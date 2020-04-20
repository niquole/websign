<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show($id)
    {

        $user = User::where('id', $id)->with(['posts' => function ($query) {
            $query->with(['comments', 'category'])->orderBy('created_at', 'desc');
        }])->first();


        return view("user", compact("user"));

    }
}
