<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "<h1> Hello World </h1>";
});
Route::get('/blog', function () {
    return "<h1> ini halaman blog </h1>";
});
