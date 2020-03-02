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
use \App\{Post, User};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{post:slug}', function(Post $post){
    dd($post); // find findOrFail
});


Route::get('/users/{user}/posts/{post:id}', function (User $user, Post $post) {
    // users/1/posts/4
    return $post;
    dd($post); // find findOrFail
});
