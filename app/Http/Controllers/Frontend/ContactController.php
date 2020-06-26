<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Mail\MailContact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact-us/index');
    }

    public function sendMail(ContactRequest $request)
    {
        Mail::to($request->email)->send(new MailContact());
        if (Mail::failures()) {
            $mess = [
                'status' => INFO,
                'title' => '',
                'message' => 'Email không thành công.'
            ];
        }
        $mess = [
            'status' => SUCCESS,
            'title' => '',
            'message' => 'Chúng tôi đã gửi mail liên hệ đến bạn.'
        ];
        session()->flash(ALERT_TOASTR, json_encode($mess));
        return redirect()->route('contact');
    }

    public function subscribe(Request $request)
    {
        if ($request->email == null) {
            $result = [
                'status' => WARNING,
                'title' => 'Thiếu địa chỉ email',
                'message' => 'Email không được bỏ trống.'
            ];
        } else {
            Mail::to($request->email)->send(new MailContact());
            if (Mail::failures()) {
                $result = [
                    'status' => WARNING,
                    'title' => 'Lỗi gửi mail',
                    'message' => 'Có lỗi xảy ra, email chưa được gửi.'
                ];
            } else {
                $result = [
                    'status' => SUCCESS,
                    'title' => 'Đã liên hệ',
                    'message' => 'Chúng tôi đã gửi email tới bạn.'
                ];
            }
        }

        return response()->json($result);
    }
}
