<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\ArticleController as ControllersArticleController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class , 'home'])->name('home');

Route::get('/about', [HomeController::class , 'about'])->name("about");

Route::resource('admin/articles' , 'App\Http\Controllers\Admin\ArticleController');