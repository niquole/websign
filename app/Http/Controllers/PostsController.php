<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {

        return view('posts');
    }

    public function show($id)
    {

        $post = Post::where('id', $id)->with(['user', 'category', 'title', 'description' => function ($query) {
            $query->with(['user'])->orderBy('created_at', 'desc');
        }])->orderBy('created_at', 'desc')->first();


        return view("post", compact("post"));
    }

}
