<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {




    return view('pages.index');
});


View::composer('components.header', function ($view) {
    $links = [
        [
            'text' => 'Characters',
            'url' => '#',
            'current' => false
        ],
        [
            'text' => 'Comics',
            'url' => '#',
            'current' => false
        ],
        [
            'text' => 'Movies',
            'url' => '#',
            'current' => false
        ],
        [
            'text' => 'Tv',
            'url' => '#',
            'current' => false
        ],
        [
            'text' => 'Games',
            'url' => '#',
            'current' => false
        ],
        [
            'text' => 'Collectibles',
            'url' => '#',
            'current' => false
        ],
        [
            'text' => 'Videos',
            'url' => '#',
            'current' => false
        ],
        [
            'text' => 'Fans',
            'url' => '#',
            'current' => false
        ],
        [
            'text' => 'News',
            'url' => '#',
            'current' => false
        ],
        [
            'text' => 'Shop',
            'url' => '#',
            'current' => false
        ]
    ];

    $view->with('links', $links);
});
