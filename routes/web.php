<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PyramidController;
use Illuminate\Http\Request;
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

Route::prefix('/user')->name('user.')->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');

    Route::get('/work-experience', [UserController::class, 'workExperience'])->name('work-experience');

    // Route::redirect('/', '/user/profile')->name('home');
    Route::get('/', fn () => to_route('user.profile'))->name('home');
});


Route::get('/posts/{id}', function ($id) {
    return "Post ID: $id";
})->name('posts.show');

Route::get('/profile/{name?}', function (?string $name = 'No name found') {
    return "User Name: $name";
});

Route::get('/request', function (Request $request) {
    dd($request->query());
});

Route::get('/pyramid', [PyramidController::class, 'show']);

Route::get('/register', [UserController::class, 'register'])->name('user.register');
Route::post('/register', [UserController::class, 'store'])->name('user.store');

Route::get('/login', [UserController::class, 'login'])->name('user.login');
Route::post('/login', [UserController::class, 'authenticate'])->name('user.authenticate');
