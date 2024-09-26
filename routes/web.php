<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Mikha', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Posts', 
    'posts'=> [
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
    ]]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Mikhael Abie',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio expedita ea quo sapiente est iste sint deserunt minus cupiditate cum! Repellendus consectetur molestias minus maxime repellat eos nihil deserunt atque.'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'slug' => 'judul-artikel-2',
            'author' => 'Mikhael Abie',
            'body' => 'sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma sigma.'
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});