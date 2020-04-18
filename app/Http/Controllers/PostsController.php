<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {

        return view('allposts');
    }

    public function show($id)
    {

//        $post = Post::where('id', $id)->with(['user', 'title', 'description' => function ($query) {
//            $query->with(['user'])->orderBy('created_at', 'desc');
//        }])->orderBy('created_at', 'desc')->first();

        $post = Post::where('id', $id)->with(['user', 'comments' => function ($query) {
            $query->with(['user'])->orderBy('created_at', 'desc');
        }])->orderBy('created_at', 'desc')->first();

            return view("post", compact("post"));
        }

}
