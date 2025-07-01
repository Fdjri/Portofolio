<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/portfolio', function () { return view('portfolio'); });
Route::get('/about', function () { return view('about'); });
Route::get('/contact', function () { return view('contact'); });