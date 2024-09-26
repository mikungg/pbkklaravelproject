<?php

use App\Models\Post;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Mikha', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Posts', 'posts'=> Post::all()]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = Post::all();

    $post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});