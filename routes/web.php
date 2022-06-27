<?php

use Illuminate\Support\Facades\Route;
use Ramsey\Uuid\Exception\DceSecurityException;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$menu = [
    'charters',
    'movies',
    'tv',
    'collectibles',
    'videos',
    'fans',
    'news',
    'shops',
];

$comics_array = config('comics');
// dd($comics_array);
$dc_comics_links = [
    'Characters',
    'Comics',
    'Movies',
    'TV',
    'Games',
    'Videos',
    'News',
];

$dc_links = [
    'Terms Of Use',
    'Privacy policy (New)',
    'Ad Choices',
    'Advertiising',
    'Jobs', 
    'Subscriptions',
    'Talent Workshops',
    'CPSC Certificates',
    'Ratings',
    'Shop Help',
    'Contact Us',
];

$shop_links = [
    'Shop DC',
    'Shop DC Collectibles',
];

$sites_links = [
    'DC',
    'MAD Magazine',
    'DC Kids',
    'DC Universe',
    'DC Power Visa',
];


Route::get('/', function () use($menu, $comics_array, $dc_comics_links, $shop_links, $dc_links, $sites_links ) {

    $data = [
        'menu' => $menu,
        'comics_array' => $comics_array,
        'dc_comics_links' => $dc_comics_links,
        'shop_links' => $shop_links,
        'dc_links' => $dc_links,
        'sites_links' => $sites_links,
    ];


    return view('home', $data);
})->name('home');

Route::get('/charters', function() use($menu, $comics_array, $dc_comics_links, $shop_links, $dc_links, $sites_links ) {

    $data = [
        'menu' => $menu,
        'comics_array' => $comics_array,
        'dc_comics_links' => $dc_comics_links,
        'shop_links' => $shop_links,
        'dc_links' => $dc_links,
        'sites_links' => $sites_links,
    ];

    return view('charters', $data);
})->name('charters');

Route::get('/movies', function() use($menu, $comics_array, $dc_comics_links, $shop_links, $dc_links, $sites_links ) {

    $data = [
        'menu' => $menu,
        'comics_array' => $comics_array,
        'dc_comics_links' => $dc_comics_links,
        'shop_links' => $shop_links,
        'dc_links' => $dc_links,
        'sites_links' => $sites_links,
    ];

    return view('movies', $data);
})->name('movies');

Route::get('/tv', function() use($menu, $comics_array, $dc_comics_links, $shop_links, $dc_links, $sites_links ) {

    $data = [
        'menu' => $menu,
        'comics_array' => $comics_array,
        'dc_comics_links' => $dc_comics_links,
        'shop_links' => $shop_links,
        'dc_links' => $dc_links,
        'sites_links' => $sites_links,
    ];

    return view('tv', $data);
})->name('tv');

Route::get('/collectibles', function() use($menu, $comics_array, $dc_comics_links, $shop_links, $dc_links, $sites_links ) {

    $data = [
        'menu' => $menu,
        'comics_array' => $comics_array,
        'dc_comics_links' => $dc_comics_links,
        'shop_links' => $shop_links,
        'dc_links' => $dc_links,
        'sites_links' => $sites_links,
    ];

    return view('collectibles', $data);
})->name('collectibles');

Route::get('/videos', function() use($menu, $comics_array, $dc_comics_links, $shop_links, $dc_links, $sites_links ) {

    $data = [
        'menu' => $menu,
        'comics_array' => $comics_array,
        'dc_comics_links' => $dc_comics_links,
        'shop_links' => $shop_links,
        'dc_links' => $dc_links,
        'sites_links' => $sites_links,
    ];
    return view('videos', $data);
})->name('videos');

Route::get('/fans', function() use($menu, $comics_array, $dc_comics_links, $shop_links, $dc_links, $sites_links ) {

    $data = [
        'menu' => $menu,
        'comics_array' => $comics_array,
        'dc_comics_links' => $dc_comics_links,
        'shop_links' => $shop_links,
        'dc_links' => $dc_links,
        'sites_links' => $sites_links,
    ];

    return view('fans', $data);
})->name('fans');

Route::get('/news', function() use($menu, $comics_array, $dc_comics_links, $shop_links, $dc_links, $sites_links ) {

    $data = [
        'menu' => $menu,
        'comics_array' => $comics_array,
        'dc_comics_links' => $dc_comics_links,
        'shop_links' => $shop_links,
        'dc_links' => $dc_links,
        'sites_links' => $sites_links,
    ];
    return view('news', $data);
})->name('news');

Route::get('/shops', function() use($menu, $comics_array, $dc_comics_links, $shop_links, $dc_links, $sites_links ) {

    $data = [
        'menu' => $menu,
        'comics_array' => $comics_array,
        'dc_comics_links' => $dc_comics_links,
        'shop_links' => $shop_links,
        'dc_links' => $dc_links,
        'sites_links' => $sites_links,
    ];

    return view('shops', $data);
})->name('shops');

Route::get('/series/{id}', function ($id) use($menu, $dc_comics_links, $shop_links, $dc_links, $sites_links ) {

    $series = collect(config('comics'));
    $current_serie = $series->where('id', $id)->first();

    $data = [
        'menu' => $menu,
        'serie' => $current_serie,
        'dc_comics_links' => $dc_comics_links,
        'shop_links' => $shop_links,
        'dc_links' => $dc_links,
        'sites_links' => $sites_links,
    ];


    return view('single-serie', $data);
})->name('single-serie');