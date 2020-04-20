<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class ApiPostsController extends Controller
{

    public function index()
    {
        $posts = Post::with('comments', 'user', 'category')->orderBy('created_at', 'desc')->get();
        foreach ($posts as $key => $post) {
            $posts[$key]->description = \Str::Limit($post->description, 30);

        }

        return $posts;
    }

    public function store(Request $request)
    {
        $request->merge(["user_id" => \Auth::user()->id]);
        Post::create($request->all());
    }

    public function like(Request $request)
    {
        $post = Post::find($request->id);
        if ($post->likes()->where('user_id', \Auth::user()->id)->exists()) {
            $post->likes()->detach(\Auth::user()->id);
        } else {
            $post->likes()->attach(\Auth::user()->id);
        }
        return [
            'likes_count' => $post->likes_count,
            'if_i_liked' => $post->if_i_liked
        ];
    }

    public function latest()
    {
         $posts = Post::with('comments', 'user', 'category')->orderBy('created_at', 'desc')->limit(4)->get();
          foreach ($posts as $key => $post) {
            $posts[$key]->description = \Str::Limit($post->description, 30);

        }
         return $posts;
    }
}
