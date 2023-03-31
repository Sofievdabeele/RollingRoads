<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show()
    
    {
        $articles = Article::all();
        return view ('articles',["articles"=>$articles]);
    }

    public function showDetail(Article $article)
    
    {
        return view ('article',["article"=>$article]);
    }
}

