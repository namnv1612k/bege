<?php

namespace App\Helpers;

use App\Models\User;
use App\Scopes\ClientScope;

class UserHelper
{
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
        $user = User::query()->withoutGlobalScope(ClientScope::class)->findOrFail($id);
        /*if ($user->stocks <= 0) {
            $result = $nameClass['out_of_stock'];
        } elseif ($user->is_active == 1) {
            $result = $nameClass['active'];
        } else {
            $result = $nameClass['not_active'];
        }*/
        return 'hihi';
    }
}
