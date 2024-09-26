<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Mikhael Abie',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio expedita ea quo sapiente est iste sint deserunt minus cupiditate cum! Repellendus consectetur molestias minus maxime repellat eos nihil deserunt atque.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Mikhael Abie',
                'body' => 'sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma.'
            ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), function ($post) use ($slug) {
            return $post['slug'] == $slug;
        });

        if(! $post) {
            abort(404);
        }

        return $post;
    }
}

?>