<?php

return [
    'Accounts' => [
        'icon' => '<i class="fa fa-id-badge"></i>',
        'route' => null,
        'order' => 10,
        'children' => [
            'Roles' => [
                'icon' => '<i class="fa fa-id-card"></i>',
                'route' => 'admin.roles.list',
                'order' => 10,
                'can' => 'manage_roles',
            ],
            'Users' => [
                'icon' => '<i class="fa fa-users"></i>',
                'route' => 'admin.users.list',
                'order' => 11,
                'can' => 'manage_users',
            ]
        ]
    ],
];
