<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Posts',
        'posts' => [
            [
                'id'        => 1,
                'slug'      => 'judul-artikel-1',
                'title'     => 'Judul artikel 1',
                'author'    => 'Fikri Nurmaila',
                'body'      => 'Illo sint voluptas. Error
                    voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus
                    unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.'
            ], [
                'id'        => 2,
                'slug'      => 'judul-artikel-2',
                'title'     => 'Judul artikel 2',
                'author'    => 'Lea Kumala Dewi',
                'body'      => 'Illo sint voluptas. Error
                    voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus
                    unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.'
            ]
        ]
    ]);
});
Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id'        => 1,
            'slug'      => 'judul-artikel-1',
            'title'     => 'Judul artikel 1',
            'author'    => 'Fikri Nurmaila',
            'body'      => 'Illo sint voluptas. Error
                    voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus
                    unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.'
        ], [
            'id'        => 2,
            'slug'      => 'judul-artikel-2',
            'title'     => 'Judul artikel 2',
            'author'    => 'Lea Kumala Dewi',
            'body'      => 'Illo sint voluptas. Error
                    voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus
                    unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
