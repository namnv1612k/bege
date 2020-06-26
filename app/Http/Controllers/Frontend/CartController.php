<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Middleware\CheckOut;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
//        session()->put(CART, []);
        return view('cart/index');
    }

    public static function all()
    {
        return session(CART);
    }

    public static function add(Request $request)
    {
        try {
            $countCart = CartController::countCart();
            $totalPrice = CartController::totalPrice();
            $id = $request->id;
            // get id product from request
            $product = Product::find($id);
            $item = [];

            // Check isset product
            if (!$product) {
                $message = [
                    'status' => ERROR,
                    'title' => 'Error',
                    'message' => 'Sản phẩm không tìm thấy'
                ];
            } elseif ($product->stocks == 0) { // If product stock = 0
                $message = [
                    'status' => WARNING,
                    'title' => 'Hết hàng',
                    'message' => $product->name . ' đã hết hàng.'
                ];
            } else {
                // Get session Cart
                $cart = session(CART);

                if (!$cart) { // If cart null
                    $cart[$id] = [
                        'name' => $product->name,
                        'slug' => $product->slug,
                        'image' => $product->feature_image,
                        'price' => $product->sale_price,
                        'quantity' => 1
                    ];

                    session()->put(CART, $cart);
                    $message = [
                        'status' => SUCCESS,
                        'title' => 'Success',
                        'message' => 'Đã thêm ' . $product->name . ' vào giỏ'
                    ];
                } else {
                    if (isset($cart[$id])) {
                        $cart[$id]['quantity']++;
                        session()->put(CART, $cart);
                        $message = [
                            'status' => INFO,
                            'title' => 'Cập nhật',
                            'message' => 'Thêm số lượng ' . $product->name
                        ];
                    } else {
                        $cart[$id] = [
                            'name' => $product->name,
                            'slug' => $product->slug,
                            'image' => $product->feature_image,
                            'price' => $product->sale_price,
                            'quantity' => 1
                        ];
                        session()->put(CART, $cart);
                        $message = [
                            'status' => SUCCESS,
                            'title' => 'Success',
                            'message' => 'Đã thêm ' . $product->name . ' vào giỏ'
                        ];
                    }
                }
                $countCart = CartController::countCart();
                $totalPrice = CartController::totalPrice();
                $item = $cart[$id];
            }
        } catch (\Exception $exception) {
            $message = [
                'status' => WARNING,
                'title' => 'Warning',
                'message' => 'Có lỗi không xác định'
            ];
        }
        return response()->json(compact('message', 'countCart', 'totalPrice', 'item'));
    }

    public static function update(Request $request)
    {
        try {
            $ids = $request->id;
            $quantities = $request->quantity;

            $cart = session(CART);

            if ($cart == null) {
                $message = [
                    'status' => WARNING,
                    'title' => 'Warning',
                    'message' => 'Giỏ hàng trống'
                ];
            } else {
                for ($i = 0; $i < count($cart); $i++) {
                    if ($quantities[$i] <= 0) {
                        unset($cart[$ids[$i]]);
                    } else {
                        $cart[$ids[$i]]['quantity'] = $quantities[$i];
                    }
                }

                $message = [
                    'status' => SUCCESS,
                    'title' => 'Success',
                    'message' => 'Cập nhật thành công'
                ];
                // Save
                session()->put(CART, $cart);
            }
        } catch (\Exception $exception) {
            $message = [
                'status' => ERROR,
                'title' => 'Error',
                'message' => 'Có lỗi xảy ra'
            ];
        }
        $totalPrice = CartController::totalPrice();
        $countCart = CartController::countCart();
        return response()->json(compact('message', 'totalPrice', 'countCart'));
    }

    public static function remove(Request $request)
    {
        $countCart = CartController::countCart();
        $totalPrice = CartController::totalPrice();
        try {
            $id = $request->id;
            $cart = session(CART);
            unset($cart[$id]);
            session()->put(CART, $cart);
            $countCart = CartController::countCart();
            $totalPrice = CartController::totalPrice();
            $message = ['status' => null,];
        } catch (\Exception $exception) {
            $message = [
                'status' => ERROR,
                'title' => 'Error',
                'message' => 'Không thể xóa Item'
            ];
        }
        return response()->json(compact('message', 'countCart', 'totalPrice'));
    }

    public static function countCart()
    {
        $cart = session(CART);
        if ($cart != null) {
            return count(session(CART)) ?? 0;
        }
        return 0;
    }

    public static function totalPrice()
    {
        $cart = session(CART);
        $total = 0;
        if ($cart != null) {
            foreach ($cart as $item) {
                $total += $item['quantity'] * $item['price'];
            }
        }
        return $total;
    }
}
