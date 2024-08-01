<?php

use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class , 'home']);

Route::get('/about', [HomeController::class , 'about']);

