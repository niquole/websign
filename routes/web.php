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
Route::get('/posts', 'PostsController@index')->name('posts');

Route::get('/home', function () {
    return view('home');
});


//Route::get('posts/{post}', 'PostController@index');
Route::get('/posts/{id}', 'PostsController@show')->name('posts');
;



Route::get('/user', function () {
    $user = request('user_id');
    return view('user', [
        'user_id' => $user
    ]);
});

//like routes
