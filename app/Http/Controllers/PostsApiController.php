<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsApiController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return $posts;
    }
}
