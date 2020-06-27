<?php

namespace App\Helpers;

class Cart
{
    public static function all()
    {
        return session(CART);
    }

    public static function find($id)
    {
        $item = null;
        $cart = session(CART);
        if ($cart != null) {
            $item = $cart[$id];
        }
        return $item;
    }

    public static function add($product)
    {
        $id = $product->id;
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
                'content' => 'Đã thêm ' . $product->name . ' vào giỏ'
            ];
        } else {
            if (isset($cart[$id])) {
                $cart[$id]['quantity']++;
                session()->put(CART, $cart);
                $message = [
                    'status' => INFO,
                    'title' => 'Cập nhật',
                    'content' => 'Thêm số lượng ' . $product->name
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
                    'content' => 'Đã thêm ' . $product->name . ' vào giỏ'
                ];
            }
        }
        return $message;
    }

    public static function update($ids, $quantities)
    {
        $cart = session(CART);
        if (!Cart::check()) {
            $message = [
                'status' => WARNING,
                'title' => 'Warning',
                'content' => 'Giỏ hàng trống'
            ];
        } else {
            for ($i = 0; $i < count($cart); $i++) {
                if ($quantities[$i] <= 0) {
                    unset($cart[$ids[$i]]);
                } else {
                    $cart[$ids[$i]]['quantity'] = $quantities[$i];
                }
            }

            // Save
            session()->put(CART, $cart);
            $message = [
                'status' => SUCCESS,
                'title' => 'Success',
                'content' => 'Cập nhật thành công'
            ];
        }
        session()->flash(ALERT_TOASTR, json_encode($message));
    }

    public static function remove($id)
    {
        $cart = session(CART);
        unset($cart[$id]);
        session()->put(CART, $cart);
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

    public static function check()
    {
        if (session(CART)) {
            return true;
        }
        return false;
    }
}
