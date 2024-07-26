<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/admin/users')->name('admin.')->group(function () {
    Route::get('/management', function () {
        return '<h1 style="color: red">Hello World</h1>';
    })->name('users.management');

    Route::get('/reports', function () {
        return '<h1 style="color: red">Hello World</h1>';
    })->name('users.reports');
});

// Route::get('/admin/users/management', function () {
//     return '<h1 style="color: red">Hello World</h1>';
// })->name('admin.users.management');

// Route::get('/admin/users/reports', function () {
//     return '<h1 style="color: red">Hello World</h1>';
// })->name('admin.users.reports');

Route::view('/', 'welcome');

Route::get('/home', function () {
    return to_route('admin.users.management');
});
