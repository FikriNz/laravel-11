<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/posts', function () {
    // $posts = Post::with(['author', 'category'])->latest()->get(); // EAGER LOADING 
    return view('posts', [
        'title' => 'Blog',
        'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString()
    ]);
});
Route::get('/posts/{post:slug}', function (Post $post) {
    $related = Post::get()->random(3);
    return view('post', [
        'title' => 'Single Blog',
        'related' => $related,
        'post' => $post
    ]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('category', 'author'); // LAZY EAGER LOADING
    return view('posts', ['title' => count($user->posts) . ' Article By ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('category', 'author'); // LAZY EAGER LOADING
    return view('posts', ['title' => count($category->posts) . ' Article in ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
