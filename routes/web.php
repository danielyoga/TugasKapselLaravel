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
    return view('home', [
        "title" => "Home"
    ]);
});
 
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Yogatama",
        "email" => "test@gmail.com",
        "image" => "img/boredape7914.png"
    ]);
});
 
Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Mas Yoga",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae suscipit modi eos odit sed sapiente, dolores tempore nam perspiciatis reprehenderit tenetur incidunt iste quaerat fugit itaque necessitatibus quia repellat nesciunt."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dodi",
            "body" => "Lorem 2ipsum dolor sit, amet consectetur adipisicing elit. Beatae suscipit modi eos odit sed sapiente, dolores tempore nam perspiciatis reprehenderit tenetur incidunt iste quaerat fugit itaque necessitatibus quia repellat nesciunt."
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});
 
   

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Mas Yoga",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae suscipit modi eos odit sed sapiente, dolores tempore nam perspiciatis reprehenderit tenetur incidunt iste quaerat fugit itaque necessitatibus quia repellat nesciunt."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dodi",
            "body" => "Lorem 2ipsum dolor sit, amet consectetur adipisicing elit. Beatae suscipit modi eos odit sed sapiente, dolores tempore nam perspiciatis reprehenderit tenetur incidunt iste quaerat fugit itaque necessitatibus quia repellat nesciunt."
        ]
    ];
    $new_post=[];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});