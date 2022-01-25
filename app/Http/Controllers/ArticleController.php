<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index () {
        return view('posts', [
            // "articles" => Article::all()
            "articles" => Article::latest()->get()
        ]);
    }

    public function show (Article $posting) {
        return view('post', [
            "article" => $posting
        ]); 
    }
}
