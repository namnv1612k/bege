<?php

namespace App\Helpers;

use App\Models\Product;
use App\Scopes\ClientScope;
use Illuminate\Http\Request;

class ProductHelper
{
    public static function classProgressbarBackend($value)
    {
        $nameClass = [
            'not_rate' => [
                'class' => 'progress-bar br-30 bg-light',
                'title' => 'Chưa có đánh giá'
            ],
            'danger' => [
                'class' => 'progress-bar br-30 bg-danger',
                'title' => 'Thấp: ' . $value . '/5 🌟'
            ],
            'warning' => [
                'class' => 'progress-bar br-30 bg-warning',
                'title' => 'Trung bình: ' . $value . '/5 🌟'
            ],
            'primary' => [
                'class' => 'progress-bar br-30 bg-primary',
                'title' => 'Tốt: ' . $value . '/5 🌟'
            ]
        ];
        $result = '';
        if ($value == 0) {
            $result = $nameClass['not_rate'];
        } elseif ($value <= 2) {
            $result = $nameClass['danger'];
        } elseif ($value <= 3.5) {
            $result = $nameClass['warning'];
        } else {
            $result = $nameClass['primary'];
        }
        return $result;
    }

    public static function classStatusBackend($id)
    {
        $nameClass = [
            'out_of_stock' => [
                'class' => 't-dot bg-dark',
                'title' => 'Hết hàng'
            ],
            'active' => [
                'class' => 't-dot bg-success',
                'title' => 'Mở bán',
            ],
            'not_active' => [
                'class' => 't-dot bg-danger',
                'title' => 'Khóa'
            ]
        ];
        $product = Product::query()->withoutGlobalScope(ClientScope::class)->findOrFail($id);
        if ($product->stocks <= 0) {
            $result = $nameClass['out_of_stock'];
        } elseif ($product->is_active == 1) {
            $result = $nameClass['active'];
        } else {
            $result = $nameClass['not_active'];
        }
        return $result;
    }

    public static function vndFormat($value)
    {
        return number_format($value, 0, '', ',') . ' đ';
    }

    public static function searchParams(Request $request, array $type) {
        $request->only('tag', 'category', 'keyword');
        $param['tag'] = [
            'name' => 'tag',
            'value' => $request->tag ?? null
        ];
        $param['category'] = [
            'name' => 'category',
            'value' => $request->category ?? null
        ];
        $param['keyword'] = [
            'name' => 'keyword',
            'value' => $request->keyword ?? null
        ];

        $result = '';

        foreach ($type as $key => $t) {
            if ($param[$t]['value'] != null) {
                $result .= $param[$t]['name'] . '=' . $param[$t]['value'] . '&';
            }
        }

        $result = rtrim($result, '&');
        return $result;
    }
}
