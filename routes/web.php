<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('user')->name('user.')->group(function(){
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');

    Route::get('/work-experience', [UserController::class, 'workExperience'])->name('work-experience');

    Route::redirect('/', '/user/profile')->name('home');

});

Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::get('/profile/{name?}', function(?string $name = 'No Name'){
    return "Username is $name";
});

Route::get('/request', [UserController::class, 'request']);