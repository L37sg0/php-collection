<?php

return [
    trans('Catalog') => [
        'icon' => '<i class="fa-solid fa-layer-group"></i>',
        'route' => null,
        'order' => 10,
        'can' => 'manage_catalog',
        'children' => [
            trans('Categories') => [
                'icon' => '<i class="fa-solid fa-list"></i>',
                'route' => 'admin.categories.list',
                'order' => 10,
            ],
            trans('Products') => [
                'icon' => '<i class="fa-regular fa-rectangle-list"></i>',
                'route' => 'admin.products.list',
                'order' => 11,
            ],
            trans('Attributes') => [
                'icon' => '<i class="fa-solid fa-table-list"></i>',
                'route' => 'admin.attributes.list',
                'order' => 11,
            ]
        ]
    ],
];
