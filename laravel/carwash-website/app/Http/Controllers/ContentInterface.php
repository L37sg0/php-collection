<?php

namespace App\Http\Controllers;

interface ContentInterface
{
    const PAGE_PRICELIST = 'pricelist';
    const PAGE_FINDUS = 'findus';
    const PAGE_GALLERY = 'gallery';
    const PAGE_ABOUT = 'about';
    const PAGE_WORKTIME = 'worktime';

    const PAGE_ELEMENT_TITLE        = 'page_title';
    const PAGE_ELEMENT_IMAGE        = 'page_image';
    const PAGE_ELEMENT_TYPE         = 'page_type';
    const PAGE_ELEMENT_PAGE_CONTENT = 'page_content';

    const CONTENT_TYPE_TEXT = 'content-text';
    const CONTENT_TYPE_GALLERY = 'content-gallery';
    const CONTENT_TYPE_LIST     = 'content-list';

    const CONTENT = [
        self::PAGE_PRICELIST    => [
            self::PAGE_ELEMENT_TITLE => 'Цени на Услуги',
            self::PAGE_ELEMENT_PAGE_CONTENT => [
                'Автомобил'     => [
                    'Външно измиване безконтактно' => '10лв',
                    'Външно измиване ръчно с шампоан' => '10лв',
                    'Външно измиване с шампоан и вакса' => '12лв',
                    'Почистване седалки' => '7лв',
                    'Измиване двигател' => '5лв'
                ],
                'Ван/Джип/Бус'  => [
                    'Външно измиване безконтактно' => '15лв',
                    'Външно измиване ръчно с шампоан' => '15лв',
                    'Външно измиване с шампоан и вакса' => '17лв',
                    'Почистване седалки' => '10лв',
                    'Измиване двигател' => '7лв']
            ]
        ],
        self::PAGE_FINDUS       => [
            self::PAGE_ELEMENT_TITLE => 'Намерете Ни',
            self::PAGE_ELEMENT_PAGE_CONTENT => [
                'Адрес'     => 'Област Добрич, град Тервел 9450, ул.Явор № 4',
                'Email'     => 'pencheww@mail.bg',
                'Телефон'   => 'Явор Пенчев - 0882956651'
            ]
        ],
        self::PAGE_WORKTIME     => [
            self::PAGE_ELEMENT_TITLE => 'Работно време',
            self::PAGE_ELEMENT_PAGE_CONTENT => [
                'Понеделник - Петък'    => '08:00ч - 17:00ч',
                'Събота'                => '09:00ч - 17:00ч',
                'Неделя'                => 'Почивен Ден'
            ]
        ],
//        self::PAGE_GALLERY      => [
//            self::PAGE_ELEMENT_TITLE => 'Галерия',
//            self::PAGE_ELEMENT_PAGE_CONTENT => []
//        ],
        self::PAGE_ABOUT        => [
            self::PAGE_ELEMENT_TITLE => 'За Нас',
            self::PAGE_ELEMENT_PAGE_CONTENT => [
                'Собственик'    => 'Aвтомивка PenchevAuto e собственост на Пенчев Ауто 2022 ЕООД,',
                'ЕИК'           => '206913319',
                'Управител'     => 'Явор Димитров Пенчев',
                'Телефон'       => '0882956651',
                'Седалище'      => 'БЪЛГАРИЯ, гр. Тервел, УЛ. ДИМИТЪР ДОНЧЕВ, 47',
                'Създадена'     => '21 Април 2022',
            ]
        ]
    ];
}