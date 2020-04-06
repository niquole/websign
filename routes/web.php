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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', function () {
    return view('home');
});


Route::get('posts/{post}', 'PostController@index');


Route::get('/user', function () {
    $user = request('user_id');
    return view('user', [
        'user_id' => $user
    ]);
});

// routes for likes
Route::get('product/like/{id}', ['as' => 'product.like', 'uses' => 'LikeController@likeProduct']);
Route::get('post/like/{id}', ['as' => 'post.like', 'uses' => 'LikeController@likePost']);
