<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ApiPostsController extends Controller
{
    public function index() {
    	return Post::with('comments', 'tags', 'user')->get();
    }
}
