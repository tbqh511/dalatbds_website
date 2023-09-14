<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('coming_soon');
});

// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/home', [HomeController::class, 'index']);

//product controller
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');

Route::get('/nha-dat', function () {
    return view('product');
});

Route::get('/dang-tin', function () {
    return view('product_create');
});

Route::get('/nha-ban', function () {
    return view('products');
});

Route::get('/dat-ban', function () {
    return view('products');
});

Route::get('/wiki-single', function () {
    return view('post');
});

Route::get('/wiki', function () {
    return view('posts');
});

Route::get('/dalatbds', function () {
    return view('about');
});

Route::get('/tin-tuc', function () {
    return view('posts');
});

Route::get('/lien-he', function () {
    return view('contact');
});
Route::fallback(function () {
    return view('404');
});


