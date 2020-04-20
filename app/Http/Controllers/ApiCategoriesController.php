<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class ApiCategoriesController extends Controller
{
    public function index() {
        return Category::all();
    }


    public function featured() {
        return Category::offset(0)->limit(4)->get();
    }
}
