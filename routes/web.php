<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Wiedia Junaedi",
        "email" => "junaediwiedia@gmail.com",
        "image" => "our.jpg"
    ]);
});

Route::get('/blog', function () {

    $blog_posts = [
        [
            "judul" => "Hai Masa Depan",
            "slug" => "hai-masa-depan",
            "author" => "Pitri Indrayani",
            "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut non modi optio beatae nesciunt? Ipsa, repellendus. Quos magni doloremque veritatis quisquam totam accusantium dolores nihil debitis dolor commodi consectetur perspiciatis quod impedit labore soluta, illo sunt aut illum fuga cumque quaerat voluptate, aspernatur ipsum quidem. Illum sint, vero illo dolor, dolorem harum fugit, provident sapiente sunt laudantium nisi. Harum assumenda, iste nesciunt ipsam cumque iure commodi impedit, ad nihil laboriosam facilis qui, iusto labore excepturi! Repellendus minima accusantium sint quas."

        ],
        [
            "judul" => "Hai Masa Lalu",
            "slug" => "hai-masa-lalu",
            "author" => "Pitri Indrayani",
            "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut non modi optio beatae nesciunt? Ipsa, repellendus. Quos magni doloremque veritatis quisquam totam accusantium dolores nihil debitis dolor commodi consectetur perspiciatis quod impedit labore soluta, illo sunt aut illum fuga cumque quaerat voluptate, aspernatur ipsum quidem. Illum sint, vero illo dolor, dolorem harum fugit, provident sapiente sunt laudantium nisi. Harum assumenda, iste nesciunt ipsam cumque iure commodi impedit, ad nihil laboriosam facilis qui, iusto labore excepturi! Repellendus minima accusantium sint quas."

        ]

        ];
    return view('posts', [
        "articles" => $blog_posts
    ]);
});


Route::get('/post/{slug}', function ($slug) {

    $blog_posts = [
        [
            "judul" => "Hai Masa Depan",
            "slug" => "hai-masa-depan",
            "author" => "Pitri Indrayani",
            "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut non modi optio beatae nesciunt? Ipsa, repellendus. Quos magni doloremque veritatis quisquam totam accusantium dolores nihil debitis dolor commodi consectetur perspiciatis quod impedit labore soluta, illo sunt aut illum fuga cumque quaerat voluptate, aspernatur ipsum quidem. Illum sint, vero illo dolor, dolorem harum fugit, provident sapiente sunt laudantium nisi. Harum assumenda, iste nesciunt ipsam cumque iure commodi impedit, ad nihil laboriosam facilis qui, iusto labore excepturi! Repellendus minima accusantium sint quas."

        ],
        [
            "judul" => "Hai Masa Lalu",
            "slug" => "hai-masa-lalu",
            "author" => "Pitri Indrayani",
            "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut non modi optio beatae nesciunt? Ipsa, repellendus. Quos magni doloremque veritatis quisquam totam accusantium dolores nihil debitis dolor commodi consectetur perspiciatis quod impedit labore soluta, illo sunt aut illum fuga cumque quaerat voluptate, aspernatur ipsum quidem. Illum sint, vero illo dolor, dolorem harum fugit, provident sapiente sunt laudantium nisi. Harum assumenda, iste nesciunt ipsam cumque iure commodi impedit, ad nihil laboriosam facilis qui, iusto labore excepturi! Repellendus minima accusantium sint quas."

        ]

        ];
    
    $new_post = [];
    foreach($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "article" => $new_post
    ]);
});