<?php
/*
Master data Sql
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
    ]
];
