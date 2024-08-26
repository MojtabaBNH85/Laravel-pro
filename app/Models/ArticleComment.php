<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    use HasFactory;
    protected $fillable = ['comment', 'article_id', 'user_id'];


    public function user(){
        return $this->belongsTo(User::class);
    }


    public function article(){
        return $this->belongsTo(Article::class);
    }
}
