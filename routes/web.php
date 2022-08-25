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

Route::get('/', function () {
    $comics_array = config('comics');

    // $comics_all = [];

    return view('home', compact("comics_array"));
})->name('home');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/product/{id}', function ($id) {
    $comics_array = config('comics');
    $current_comic = [];

    foreach($comics_array as $comics) {
        if($comics['id'] == $id) {
            $current_comic = $comics;
        }
    }

    $data = [
        'current_comic' => $current_comic
    ];


    return view('single-product', $data); 
})->name('single-product');
