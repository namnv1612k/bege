<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductUpdateRequest extends FormRequest
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
            'name' => 'required|max:255',
            'price' => [
                'required',
                'numeric',
                'min:0',
                $this->request->get('sale_price') !== null ? 'gte:sale_price' : ''
            ],
            'sale_price' => 'nullable|numeric|min:0',
            'slug' => [
                'regex:/^[^<>]*$/',
                Rule::unique('products', 'slug')->ignore($this->id)
            ],
            'sku' => [
                'regex:/^[a-zA-Z0-9_.-]*$/',
                Rule::unique('products', 'sku')->ignore($this->id)
            ],
            'stocks' => 'required|integer|min:0',
            'supplier_id' => 'required|integer',
            'feature_image' => 'nullable|max:5000',
            'albums' => 'nullable|max:5000',
            'feature_image.*' => 'mimes:jpg,png,jpeg',
            'intro' => 'required|max:2000',
            'desc' => 'required|max:2000'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được bỏ trống',
            'name.max' => 'Giới hạn 255 ký tự',
            'price.required' => 'Giá gốc không được bỏ trống',
            'price.numeric' => 'Giá gốc là dạng  số',
            'price.min' => 'Giá trị nhỏ nhất là 0',
            'price.gte' => 'Giá gốc phải lớn hơn hoặc bẳng giá bán',
            'sale_price.numeric' => 'Giá bán là dạng  số',
            'sale_price.min' => 'Nhỏ nhất là 0',
            'slug.unique' => 'Slug đã tồn tại',
            'slug.regex' => 'Slug không được chứa ký tự đặc biệt',
            'sku.unique' => 'Sku đã tồn tại',
            'sku.regex' => 'Sku không được chứa ký tự đặc biệt',
            'stocks.required' => 'Số lượng là bắt buộc',
            'stocks.integer' => 'Giá trị phải là số nguyên',
            'stocks.min' => 'Không được nhỏ hơn 0',
            'supplier_id.required' => 'Hãng sản xuất là bắt buộc',
            'supplier_id.integer' => 'Sai định dạng dữ liệu',
            'feature_image.required' => 'Không bỏ trống ảnh',
            'feature_image.mimes' => 'Chỉ chấp nhận đuôi file: jpeg, png, jpg',
            'feature_image.max' => 'Tối đa 5kb',
            'albums.required' => 'Không bỏ trống ảnh album',
            'albums.mimes' => 'Chỉ chấp nhận đuôi file: jpeg, png, jpg',
            'albums.max' => 'Tối đa 5kb',
            'intro.required' => 'Không được bỏ trống giới thiệu',
            'intro.max' => 'Tối đa 2000 ký tự',
            'desc.required' => 'Không được bỏ trống giới thiệu',
            'desc.max' => 'Tối đa 2000 ký tự',
        ];
    }

}
