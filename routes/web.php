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
    return view('site.index');
});

Route::get('/blog', function () {
    return view('site.blog');
});

Route::get('/sobre', function () {
    return view('site.sobre');
});

Route::get('/galeria', function () {
    return view('site.galeria');
});

Route::get('/forum', function () {
    return view('site.forum');
});

Route::get('/contato', function () {
    return view('site.contato');
});


