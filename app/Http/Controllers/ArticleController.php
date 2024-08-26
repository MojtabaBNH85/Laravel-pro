<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleCommentRequest;
use App\Models\Article;
use App\Models\ArticleComment;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function single(Article $article){
        $comments = ArticleComment::where('article_id' , '=' , $article->id)->orderBy('id' , 'desc')->get();
        return view('admin.articles.show' , compact('article' , 'comments'));
    }

    public function comment(ArticleCommentRequest $request){   

        $validate_data = $request->validated();
        var_dump($validate_data['article_id']);
        echo "<br>";
        var_dump($validate_data['comment']);
        echo "<br>";
        var_dump(auth()->user()->id);
        ArticleComment::create([
            'user_id' => auth()->user()->id ,
            'article_id' => $validate_data['article_id'],
            'comment'  => $validate_data['comment']
        ]);
        
        return redirect()->back();
    } 
}