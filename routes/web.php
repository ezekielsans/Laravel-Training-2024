<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('user')->name('user.')->group(function(){
    Route::get('/profile', function(){
        return '<h3>Name:</h3><h2>Ariel Lagata</h2><br>
                <h3>address:</h3><h2>Gubat Sorsogon</h2><br>
                <h3>email:</h3><h2>my@email.com</h2><br>';
    })->name('profile');

    Route::get('/work-experience', function(){
        return '<h3>Company:</h3><h2>GSAC</h2>< br>
                <h3>position:</h3><h2>Software Programmer</h2>< br>';
    })->name('work-experience');

    Route::redirect('/', '/user/profile')->name('home');

});
