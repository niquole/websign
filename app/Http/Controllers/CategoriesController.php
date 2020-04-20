<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show($name)
    {

        $category = Category::where('name', $name)->with(['posts' => function ($query) {
            $query->with(['user'])->orderBy('created_at', 'desc');
        }])->first();


        return view("category", compact("category"));

    }
}
