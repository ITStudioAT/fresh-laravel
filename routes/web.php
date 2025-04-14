<?php

use Illuminate\Support\Facades\Route;

/* HOMEPAGE ROUTES */

Route::name('itstudio.homepage.')->group(function () {
    Route::get('/', function () {
        return view('homepage');
    });

    Route::get('/homepage/{any?}', function () {
        return view('homepage');
    })->where('any', '.*');
});


/* ADMIN ROUTES */
Route::name('itstudio.admin.')->group(function () {

    Route::get('/admin/{any?}', function () {
        return view('admin');
    })->where('any', '.*');
});
