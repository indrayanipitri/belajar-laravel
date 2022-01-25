<?php

namespace App\Models;

class Article 
{
    private static $blog_posts = [
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

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {

        $posts = static::all();

        // $posts = self::$blog_posts;          BISA PAKAI INI, PENGULANGAN. TAPI PAKAI COLLECT
        // $post = [];                          LEBIH SIMPLE
        // foreach($posts as $article) {
        //     if ($article["slug"] === $slug) {
        //         $post = $article;
        //     }
        // }
        // return $post;

        return $posts -> firstWhere('slug', $slug);   
    }
}
 