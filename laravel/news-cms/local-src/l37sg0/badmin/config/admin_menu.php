<?php

return [
    trans('Dashboard') => [
        'icon' => '<i class="fa fa-house"></i>',
        'route' => 'admin.dashboard',
        'order' => 1,
    ],
    trans('Accounts') => [
        'icon' => '<i class="fa fa-id-badge"></i>',
        'route' => null,
        'order' => 10,
        'children' => [
            trans('Profile') => [
                'icon' => '<i class="fa fa-user"></i>',
                'route' => 'admin.profile.edit',
                'order' => 9,
            ],
        ]
    ],
];
