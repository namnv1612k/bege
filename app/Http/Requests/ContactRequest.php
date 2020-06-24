<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string',
            'last_name'=> 'required|string',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|max:2000'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Không bỏ trống tên',
            'first_name.string' => 'Tên không đúng định dạng',
            'last_name.required' => 'Không bỏ trống tên',
            'last_name.string' => 'Tên không đúng định dạng',
            'email.required' => 'Email không được bỏ trống',
            'email.email' => 'Đây không phải là địa chỉ Email hợp lệ',
            'subject.required' => 'Tiêu đề là bắt buộc',
            'message.required' => 'Nội dung là bắt buộc',
            'message.max' => 'Tối đa 200 ký tự'
        ];
    }
}
