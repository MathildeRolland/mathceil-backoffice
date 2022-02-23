<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $lastPosts = Post::orderBy('created_at', 'desc')->take(5)->get();

        return view('welcome', ['posts' => $lastPosts]);
    }
}
