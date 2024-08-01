<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class , 'home'])->name('home');

Route::get('/about', [HomeController::class , 'about'])->name("about");

Route::get('/articles/{article}', [ArticleController::class , 'single']);

Route::resource('admin/articles' , 'App\Http\Controllers\Admin\ArticleController');