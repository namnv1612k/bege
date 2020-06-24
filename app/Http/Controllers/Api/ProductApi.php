<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;

class ProductApi extends Controller
{
    public function addWish(Request $request)
    {
        if ($request->user_id == null) {
            $result = [
                'status' => FAIL,
                'title' => 'Có Lỗi xảy ra',
                'message' => 'Bạn phải đăng nhập để sử dụng chức năng này',
            ];
        } else {
            try {
                $product_id = $request->product_id;
                $user_id = $request->user_id;

                $product = Product::findOrFail($product_id);

                if (Wishlist::where('product_id', '=', $product_id)->where('user_id','=', $user_id)->exists()) {
                    $result = [
                        'status' => EXIST,
                        'title' => 'Đã tồn tại',
                        'message' => 'Sản phẩm ' . $product->name . ' đã ở trong danh sách yêu thích',
                    ];
                } else {
                    $wishlist = new Wishlist;
                    $wishlist->product_id = $product_id;
                    $wishlist->user_id = $user_id;

                    $wishlist->save();
                    $result = [
                        'status' => SUCCESS,
                        'title' => 'Thành công',
                        'message' => 'Đã thêm ' . $product->name . ' vào danh sách yêu thích',
                    ];
                }

            } catch (Exception $exception) {
                $result = [
                    'status' => FAIL,
                    'title' => 'Có Lỗi xảy ra',
                    'message' => 'Có lỗi không xác định đã xảy ra',
                ];
            }
        }

        return response()->json($result);
    }
}
