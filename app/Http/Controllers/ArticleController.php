<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index () {
        return view('posts', [
            'title' => 'Post All',
            // "articles" => Article::all()
            "articles" => Article::with(['user', 'category'])->latest()->get()
        ]);
    }

    public function show (Article $posting) {
        return view('post', [
            "article" => $posting
        ]); 
    }
}
