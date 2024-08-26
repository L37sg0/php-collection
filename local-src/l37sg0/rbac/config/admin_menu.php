<?php

return [
    'Accounts' => [
        'icon' => '<i class="fa-brands fa-redhat"></i>',
        'route' => null,
        'order' => 10,
        'children' => [
            'Roles' => [
                'icon' => '<i class="fa-brands fa-redhat"></i>',
                'route' => 'admin.roles.list',
                'order' => 10,
            ],
            'Users' => [
                'icon' => '<i class="fa fa-users"></i>',
                'route' => 'admin.users.list',
                'order' => 11,
            ]
        ]
    ],
];
