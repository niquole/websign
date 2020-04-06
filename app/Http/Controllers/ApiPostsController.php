<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ApiPostsController extends Controller
{
    public function index()
    {
        $posts = Post::with('comments', 'tags', 'user')->orderBy('created_at', 'desc')->get();
        foreach ($posts as $key => $post) {
            $posts[$key]->description = \Str::Limit($post->description, 30);

        }

        return $posts;
    }
    public function store(Request $request) {
        $request->merge(["user_id"=> \Auth::user()->id]);
        Post::create($request->all());
    }
}
