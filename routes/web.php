<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
});



Route::get('posts/{post}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

Route::get('post/create', function () {
    return view('create-post');
});

Route::post('create/post', 'App\Http\Controllers\PostController@create');
