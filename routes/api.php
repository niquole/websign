<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('api')->get('posts', 'ApiPostsController@index');
Route::middleware('api')->get('categories', 'ApiCategoriesController@index');
Route::middleware('api')->post('/image/upload', 'ApiImageUpload@uploadImage');
Route::middleware('auth:api')->post('/posts', 'ApiPostsController@store');



