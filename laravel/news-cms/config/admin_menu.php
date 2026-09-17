<?php

return [
//    trans('Articles') => [
        'Articles' => [
        'icon' => '<i class="fa-solid fa-layer-group"></i>',
        'route' => null,// null,
        'order' => 10,
        'can' => 'manage_news',
        'children' => [
//            trans('Categories') => [
                'Categories' => [
                'icon' => '<i class="fa-solid fa-list"></i>',
                'route' => 'admin.categories.list',
                'order' => 10,
            ],
//            trans('Tags') => [
                'Tags' => [
                'icon' => '<i class="fa-regular fa-rectangle-list"></i>',
                'route' => 'admin.tags.list',
                'order' => 11,
            ],
//            trans('News') => [
                'News' => [
                'icon' => '<i class="fa-solid fa-table-list"></i>',
                'route' => 'admin.news.list',
                'order' => 11,
            ]
        ]
    ],
];
