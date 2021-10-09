<?php
return [
    'user' => [
        'role' => [
            "admin" => 1,
            "customer" => 2,
            "agent" => 3
        ],
    ],
    'order' => [
        'status' => [
            "cho_duyet" => 1,
            "dang_xu_ly" => 2,
            "dang_giao_hang" => 3,
            "da_giao_hang" => 4,
            "da_huy" => 5,
            "chuyen_hoan" => 6,
        ],
    ],
    'product_order_by' => [
        1 => 'Sản phẩm mới nhất',
        2 => 'Giá tăng dần',
        3 => 'Giá giảm dần',
        4 => 'Số lượng tăng dần',
        5 => 'Số lượng giảm dần',
    ],

];
