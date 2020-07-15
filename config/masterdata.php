<?php
/*
Master data for Sql
*/
return [
    'order' => [
        'status_delivery' => [
            0 => 'Chờ xác nhận',
            1 => 'Đã chốt đơn',
            2 => 'Đang vận chuyển',
            3 => 'Đã giao hàng'
        ],
        'status_order' => [
            0 => 'Chưa thanh toán',
            1 => 'Đã thanh toán'
        ],
        'payment_method' => [
            0 => 'Tiền mặt',
            1 => 'Stripe',
            2 => 'Credit card'
        ]
    ],
    'user' => [
        'role' => [
            0 => [
                'title' => 'Người dùng',
                'class' => 'shadow-none badge badge-light'
            ],
            1 => [
                'title' => 'Quản trị viên',
                'class' => 'shadow-none badge badge-warning'
            ],
            2 => [
                'title' => 'Nhân viên',
                'class' => 'shadow-none badge badge-primary'
            ]
        ],
        'status' => [
            0 => [
                'title' => 'Khóa',
                'class' => 'shadow-none badge badge-warning'
            ],
            1 => [
                'title' => 'Kích hoạt',
                'class' => 'shadow-none badge badge-success'
            ]
        ]
    ],
];
