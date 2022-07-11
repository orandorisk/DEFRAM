<?php

namespace App\Models;

class Post
{
    private static $blogpost = [
        [
            "title" => "PSS Sleman Juara liga",
            "slug" => "satu",
            "author" => "Orlando Riski",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ipsam non, doloribus ab voluptate harum necessitatibus, at deserunt temporibus quis, nostrum excepturi tempora. Eveniet commodi a laborum veritatis? Cupiditate, nostrum."
        ],
        [
            "title" => "Liga Indonesia",
            "slug" => "dua",
            "author" => "Orlando",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum obcaecati aut fuga alias modi soluta quaerat tenetur consequatur? Error adipisci recusandae facilis quasi impedit numquam autem, a maiores dolores! Aliquid et earum eligendi ex mollitia eaque cum ratione dignissimos quibusdam."
        ],
        [
            "title" => "PSS Sleman Berlaga di Champions",
            "slug" => "tiga",
            "author" => "Orlando Riski",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, aspernatur. Obcaecati dolorum distinctio, explicabo quas blanditiis eius asperiores nobis expedita magnam laudantium suscipit quae facere voluptatem nihil incidunt excepturi, ad quidem quos! Dolores autem similique eligendi, expedita molestias ex nemo, eius, voluptatum nobis maiores necessitatibus repellendus beatae quas minus sed?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blogpost);
    }

    public static function find($slug)
    {
        $post = static::all();
        return $post->firstWhere('slug', $slug);
    }
}
