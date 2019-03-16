<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;

class TestController extends Controller
{
    public function view($id)
    {
        $article = Article::find($id);

        $article->category;
        $article->user;
        $article->tags;
        
        dd($article);
    }
}
