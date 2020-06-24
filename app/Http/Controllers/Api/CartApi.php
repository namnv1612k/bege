<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CartApi extends Controller
{
    public function addCart(Request $request){
        $id = $request->product_id;
        $product = Product::findOrFail($id);
        $cart = session(CART);
        $count_cart = 0;
        $total_price = 0;

        if ($product->stocks <= 0) {
            $message = [
                'status' => ERROR,
                'title' => 'Hết hàng',
                'message' => $product->name . ' đã hết hàng.'
            ];
        } else {
            $total_price = 0;
            if($cart == null) {
                $cart = [];
                $cart[] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'sku' => $product->sku,
                    'price' => $product->price,
                    'sale_price' => $product->sale_price,
                    'feature_image' => $product->feature_image,
                    'quantity' => 1
                ];
            } else {
                $existed = -1;
                foreach ($cart as $key => $item) {
                    if($item[$key]['id'] == $product->id){
                        $existed = $key;
                        break;
                    }
                }
                if($existed == -1){
                    $cart[] = [
                        'id' => $product->id,
                        'name' => $product->name,
                        'sku' => $product->sku,
                        'price' => $product->price,
                        'sale_price' => $product->sale_price,
                        'feature_image' => $product->feature_image,
                        'quantity' => 1
                    ];
                }else{
                    $cart[$existed]['quantity']++;
                }
                session(CART, $cart);
            }

            $message = [
                'status' => SUCCESS,
                'title' => 'Thành công',
                'message' => 'Đã thêm ' . $product->name . ' vào giỏ hàng'
            ];
            $count_cart = count($cart);
            foreach ($cart as $item) {
                $total_price += $item['quantity'] * $item['sale_price'];
            }
        }
        $carts = session(CART);
//        dd($carts);
        return response()->json(compact('message', 'count_cart', 'total_price', 'carts'));
    }

    public function update_quantity(Request $request){
        $index = $request->index;
        $quantity = $request->quantity;
        $cart = session(CART);
        $total_price = 0;
        $product_total = [];
        for ($i = 0; $i < count($cart) ; $i++){
            $cart[$index[$i]]['quantity'] = $quantity[$i];

            $total_price += $cart[$index[$i]]['price'] * $quantity[$i];

            // $product_total[$index[$i]] = $cart[$index[$i]]['price'] * $quantity[$i];
        }
        session()->put(CART, $cart);

        $message = "Updated quantity successfully";

        return response()->json(compact('total_price', 'message'));
    }

    public function remove_item(Request $request){
        $index = $request->index;
        $cart = session(CART);
        unset($cart[$index]);
        session()->put(CART, $cart);
        $total_price = 0;
        $product_qty = 0;
        foreach(session(CART) as $item){
            $product_qty++;
            $total_price += $item['quantity']*$item['price'];
        }

        $message = "Removed item successfully";
        return response()->json(compact('total_price', 'product_qty', 'message', 'index'));
    }
}
