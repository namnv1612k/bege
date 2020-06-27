<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\Cart;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart/index');
    }

    public static function add(Request $request)
    {
        try {
            $countCart = Cart::countCart();
            $totalPrice = Cart::totalPrice();
            $id = $request->id;
            // get id product from request
            $product = Product::find($id);
            $item = [];
            // Check isset product
            if (!$product) {
                $message = [
                    'status' => ERROR,
                    'title' => 'Error',
                    'content' => 'Sản phẩm không tìm thấy'
                ];
                dd('Sản phẩm không tìm thấy');
            } elseif ($product->stocks == 0) { // If product stock = 0
                $message = [
                    'status' => WARNING,
                    'title' => 'Hết hàng',
                    'content' => $product->name . ' đã hết hàng.'
                ];
                dd($product->name . ' đã hết hàng.');
            } else {

                // Get session Cart
                $message = Cart::add($product);
                $item = Cart::find($id);
                $countCart = Cart::countCart();
                $totalPrice = Cart::totalPrice();
            }
        } catch (\Exception $exception) {
            $message = [
                'status' => WARNING,
                'title' => 'Warning',
                'content' => 'Có lỗi không xác định'
            ];
        }
        return response()->json(compact('message', 'countCart', 'totalPrice', 'item'));
    }

    public static function update(Request $request)
    {
        $ids = $request->id;
        $quantities = $request->quantity;

        Cart::update($ids, $quantities);
        return redirect()->route('cart');
    }

    public static function remove(Request $request)
    {
        $countCart = Cart::countCart();
        $totalPrice = Cart::totalPrice();
        try {
            $id = $request->id;
            Cart::remove($id);
            $message = ['status' => null];
            $countCart = Cart::countCart();
            $totalPrice = Cart::totalPrice();
        } catch (\Exception $exception) {
            $message = [
                'status' => ERROR,
                'title' => 'Error',
                'content' => 'Không thể xóa Item'
            ];
        }
        return response()->json(compact('message', 'countCart', 'totalPrice'));
    }
}
