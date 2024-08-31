<?php

return [
    'Dashboard' => [
        'icon' => '<i class="fa fa-house"></i>',
        'route' => 'admin.dashboard',
        'order' => 1,
    ],
    'Accounts' => [
        'icon' => '<i class="fa fa-id-badge"></i>',
        'route' => null,
        'order' => 10,
        'children' => [
            'Profile' => [
                'icon' => '<i class="fa fa-user"></i>',
                'route' => 'admin.profile.edit',
                'order' => 9,
            ],
        ]
    ],
];
