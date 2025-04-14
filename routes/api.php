<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* HOMEPAGE ROUTES */

Route::name('itstudio.homepage.')->group(function () {
    Route::get('/homepage/config',  [App\Http\Controllers\Homepage\HomepageController::class, 'config']);
});

/* ADMIN ROUTES */

Route::name('itstudio.admin.')->group(function () {
    Route::get('/admin/config',  [App\Http\Controllers\Admin\AdminController::class, 'config']);
});
