<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoopController;
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

Route::get('/loop', [LoopController::class, 'loop']);

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'store'])->name('user.register');

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'auth'])->name('user.login');