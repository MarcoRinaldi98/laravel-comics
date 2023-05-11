<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/characters', function () {

    $data = [
        'navlinks' => config('db.navlinks'),
        'icons' => config('db.footer.icons')
    ];

    return view('characters', $data);
})->name('characters');

Route::get('/', function () {

    $data = [
        'navlinks' => config('db.navlinks'),
        'movies' => config('db.movies'),
        'icons' => config('db.footer.icons')
    ];

    return view('comics', $data);
})->name('comics');

Route::get('/movies', function () {

    $data = [
        'navlinks' => config('db.navlinks'),
        'icons' => config('db.footer.icons')
    ];

    return view('movies', $data);
})->name('movies');

Route::get('/tv', function () {

    $data = [
        'navlinks' => config('db.navlinks'),
        'icons' => config('db.footer.icons')
    ];

    return view('tv', $data);
})->name('tv');

Route::get('/games', function () {

    $data = [
        'navlinks' => config('db.navlinks'),
        'icons' => config('db.footer.icons')
    ];

    return view('games', $data);
})->name('games');

Route::get('/collectibles', function () {

    $data = [
        'navlinks' => config('db.navlinks'),
        'movies' => config('db.movies'),
        'icons' => config('db.footer.icons')
    ];

    return view('collectibles', $data);
})->name('collectibles');

Route::get('/videos', function () {

    $data = [
        'navlinks' => config('db.navlinks'),
        'icons' => config('db.footer.icons')
    ];

    return view('videos', $data);
})->name('videos');

Route::get('/fans', function () {

    $data = [
        'navlinks' => config('db.navlinks'),
        'movies' => config('db.movies'),
        'icons' => config('db.footer.icons')
    ];

    return view('fans', $data);
})->name('fans');

Route::get('/news', function () {

    $data = [
        'navlinks' => config('db.navlinks'),
        'icons' => config('db.footer.icons')
    ];

    return view('news', $data);
})->name('news');

Route::get('/shop', function () {

    $data = [
        'navlinks' => config('db.navlinks'),
        'movies' => config('db.movies'),
        'icons' => config('db.footer.icons')
    ];

    return view('shop', $data);
})->name('shop');
