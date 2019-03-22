<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;

class FrontController extends Controller
{
    
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(4);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });
        return view('front.index')
            ->with('articles', $articles);
    }

}
