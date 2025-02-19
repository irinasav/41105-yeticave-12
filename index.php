<?php
require_once('php/PriceFormatter.php');
require_once('helpers.php');
$formatter = new PriceFormatter();

$is_auth = rand(0, 1);

$user_name = 'Irina'; // укажите здесь ваше имя
$categories = [
        [
            'name' => 'Доски и лыжи',
            'code' => 'boards',
        ],
        [
            'name' => 'Крепления',
            'code' => 'attachment',
        ],
        [
            'name' => 'Ботинки',
            'code' => 'boots',
        ],
        [
            'name' => 'Одежда',
            'code' => 'clothing',
        ],
        [
            'name' => 'Инструменты',
            'code' => 'tools',
        ],
        [
            'name' => 'Разное',
            'code' => 'other',

        ],
    ];
$products = [
    [
        'name' => '2014 Rossignol District Snowboard',
        'category' => 'Доски и лыжи',
        'price' => '10999',
        'url' => 'img/lot-1.jpg'
    ],
    [
        'name' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => 'Доски и лыжи',
        'price' => '159999',
        'url' => 'img/lot-2.jpg'
    ],
    [
        'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => 'Крепления',
        'price' => '8000',
        'url' => 'img/lot-3.jpg'
    ],
    [
        'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => 'Ботинки',
        'price' => '10999',
        'url' => 'img/lot-4.jpg'
    ],
    [
        'name' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => 'Одежда',
        'price' => '7500',
        'url' => 'img/lot-5.jpg'
    ],
    [
        'name' => 'Маска Oakley Canopy',
        'category' => 'Разное',
        'price' => '5400',
        'url' => 'img/lot-6.jpg'
    ],
];
$content = include_template('main.php', [
    'formatter' => $formatter,
    'products' => $products,
    'categories' => $categories
]);
print(include_template('layout.php', [
    'categories' => $categories,
    'is_auth' => $is_auth,
    'user_name' => $user_name,
    'content' => $content,
    'title' => 'Главная'
]));
