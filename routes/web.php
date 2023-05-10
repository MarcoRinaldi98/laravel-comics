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

    return view('characters');
})->name('characters');

Route::get('/', function () {

    $movies = config('db');

    return view('comics', compact('movies'));
})->name('comics');

Route::get('/movies', function () {

    return view('movies');
})->name('movies');

Route::get('/tv', function () {

    return view('tv');
})->name('tv');

Route::get('/games', function () {

    return view('games');
})->name('games');

Route::get('/collectibles', function () {

    $movies = config('db');

    return view('collectibles', compact('movies'));
})->name('collectibles');

Route::get('/videos', function () {

    return view('videos');
})->name('videos');

Route::get('/fans', function () {

    return view('fans');
})->name('fans');

Route::get('/news', function () {

    return view('news');
})->name('news');

Route::get('/shop', function () {

    $movies = config('db');

    return view('shop', compact('movies'));
})->name('shop');
