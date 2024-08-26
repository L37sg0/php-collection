<?php

return [
    'Dashboard' => [
        'icon' => '<i class="fa fa-house"></i>',
        'route' => 'admin.dashboard',
        'order' => 1,
    ],
    'Accounts' => [
        'icon' => '<i class="fa-brands fa-redhat"></i>',
        'route' => null,
        'order' => 10,
        'children' => [
            'Profile' => [
                'icon' => '<i class="fa-brands fa-redhat"></i>',
                'route' => 'admin.profile.edit',
                'order' => 9,
            ],
        ]
    ],
];
