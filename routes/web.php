<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class , 'home'])->name('home');

Route::get('/about', [HomeController::class , 'about'])->name("about");

Route::get('/articles/{article}', [ArticleController::class , 'single']);

Route::get('/mail/test' , [MailController::class , 'testMail']);

Route::resource('admin/articles' , 'App\Http\Controllers\Admin\ArticleController');

Route::get('test', function () {
    echo 'go fuck your selfr';
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
