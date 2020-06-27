<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function info()
    {
        $masterData = config('masterdata')['order'];
        $orders = DB::table('orders')
            ->where('user_id', '=', Auth::id())
            ->orderByDesc('created_at')
            ->paginate(PAGINATION_ORDER);

        foreach ($orders as $order) {
            $order->payment_method = $masterData['payment_method'][$order->payment_method];
            $order->status_delivery = $masterData['status_delivery'][$order->status_delivery];
            $order->status_order = $masterData['status_order'][$order->status_order];
        }

        return view('user/my-account', compact('orders'));
    }

    public function wishlist()
    {
        $wishlist = Wishlist::where('user_id', '=', Auth::id())
            ->paginate(PAGINATION_WISHLIST)
            ->sortByDesc('created_at');
        return view('user/wishlist', compact('wishlist'));
    }

    public function removeWish($id)
    {
        try {
            $wish = Wishlist::find($id);
            if ($wish != null) {
                $message = [
                    'status' => SUCCESS,
                    'title' => '',
                    'content' => 'Đã xóa ' . $wish->product->name . ' khỏi danh sách'
                ];
                $wish->delete();
            } else {
                $message = [
                    'status' => WARNING,
                    'title' => '',
                    'content' => 'Không thể xóa'
                ];
            }
        } catch (\Exception $exception) {
            $message = [
                'status' => ERROR,
                'title' => '',
                'content' => 'Lỗi'
            ];
        }
        return response()->json($message);
    }
}
