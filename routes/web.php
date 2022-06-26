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

Route::get('/', function () {
    $comics_array = config('comics');
    // dd($comics_array);

    $data = [
        'menu_array' => [
            'charters',
            'movies',
            'tv',
            'collectibles',
            'videos',
            'fans',
            'news',
            'shops'
        ],
        'comics_array' => $comics_array,
        'dc_comics_links' => [
            'Characters',
            'Comics',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News',
        ],
        'shop_links' => [
            'Shop DC',
            'Shop DC Collectibles',
        ],
        'dc_links' => [
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
        ],
        'sites_links' => [
            'DC',
            'MAD Magazine',
            'DC Kids',
            'DC Universe',
            'DC Power Visa',
        ]
    ];

    return view('home', $data);
})->name('homepage');
