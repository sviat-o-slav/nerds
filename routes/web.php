<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/catalog', function() {
    return view('pages.catalog');
})->name('catalog');
