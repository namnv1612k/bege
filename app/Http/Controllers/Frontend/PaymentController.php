<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\ProductHelper;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Cashier;

class PaymentController extends Controller
{
    public function show()
    {
        return view('payment/show');
    }

    public static function applyCoupon(Request $request)
    {
        $discount = 0;
        $totalPrice = CartController::totalPrice();
        try {
            $code = $request->code;
            $voucher = Voucher::all()
                ->where('is_active', '=', ACTIVE)
                ->where('code', '=', $code)
                ->where('start_at', '<', now())
                ->first();
            if ($voucher == null) {
                $message = [
                    'status' => INFO,
                    'title' => '',
                    'message' => 'Không tìm thấy mã giảm giá'
                ];
            } else {
                $totalPrice = CartController::totalPrice();
                if ($voucher->quantity = 0 || !$voucher->end_at > now()) { // Nếu hết mã hoặc hết hạn
                    $message = [
                        'status' => INFO,
                        'title' => 'Không thể áp dụng',
                        'message' => 'Mã giảm giá đã hết hạn'
                    ];
                } elseif ($totalPrice < $voucher->condition) { // Nếu giá trị order nhỏ hom điều kiện giảm giá
                    $message = [
                        'status' => INFO,
                        'title' => 'Không thể áp dụng',
                        'message' => 'Giá trị order tối thiểu ' . ProductHelper::vndFormat($voucher->condition)
                    ];
                } else {
                    // Nếu giá trị giảm lớn hơn giá trị discount tối đa thì discount sẽ bẳng giá trị tối đa
                    if ($totalPrice*($voucher->discount/100) > $voucher->max_discount) {
                        $discount = $voucher->max_discount;
                    } else {
                        $discount = $totalPrice*($voucher->discount/100);
                    }
                    $message = [
                        'status' => SUCCESS,
                        'title' => 'Đã giảm ' . ProductHelper::vndFormat($discount),
                        'message' => 'Đã áp dụng mã giảm giá ' . $voucher->discount . ' % tối đa ' . ProductHelper::vndFormat($voucher->max_discount)
                    ];
                    $totalPrice = CartController::totalPrice();
                    $code = $voucher->code;
                }
            }
        } catch (\Exception $exception) {
            $message = [
                'status' => ERROR,
                'title' => 'Error',
                'message' => 'Đã xảy ra lỗi'
            ];
        }

        return response()->json(compact('message', 'discount', 'totalPrice', 'code'));
    }

    public function payment(Request $request)
    {
        try {
            $user = Cashier::findBillable($stripeId);
            $totalPrice = CartController::totalPrice();

            if ($request->voucher_code != null) {
                $voucher = Voucher::all()
                    ->where('is_active', '=', ACTIVE)
                    ->where('code', '=', $request->voucher_code)
                    ->where('start_at', '<=', now())
                    ->where('end_at', '>', now())
                    ->where('quantity', '>', 0)->first();
                if ($voucher != null) { // Nếu voucher đúng thì giảm giá
                    if ($totalPrice*($voucher->discount/100) > $voucher->max_discount) {
                        $totalPrice = $totalPrice - $voucher->max_discount;
                    } else {
                        $totalPrice = $totalPrice - ($totalPrice*($voucher->discount/100));
                    }
                }
            }

            $order = new Order;
            $order->user_id = Auth::id() ?? null;
            $order->total = $totalPrice;
            $order->address = $request->address;
            $order->phone = $request->phone;
            $order->message = $request->message ?? '';
            if ($request->payment_method == DEFAULT_PAYMENT) {
                $order->payment_method = 0;
                $order->status = 0;

                // Tạo đơn và đơn hàng chi tiết
                $order->save();
                $order_id = $order->id;

                foreach (session(CART) as $keycart => $item) {
                    $detail = new OrderDetail;

                    $detail->order_id = $order_id;
                    $detail->product_id = $keycart;
                    $detail->quantity = $item['quantity'];

                    $detail->save();
                }

                // Gửi email thông báo

            } elseif ($request->payment_method == STRIPE_PAYMENT) {
                $order->payment_method = 1;
                // Api thanh toán ngoài (Paypal) nếu thành công thì trả status = 1 nếu k thì hủy thanh toán
                $order->status = 1;


            }
        } catch (\Exception $exception) {
            return abort(404);
        }
//        return true;
    }
}
