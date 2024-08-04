<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $articles = Article::orderBy('id' , 'desc')->get();
        return view('home', compact("articles"));
    }

    public function welcome(){
        return view('welcome');
    }
    public function about(){
        return view('about');
    }
}
