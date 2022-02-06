<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function displayPosts()
    {
        $posts = Post::all();

        return (view('posts', ['posts' => $posts]));
    }

    public function displayPost($id)
    {
        $post = Post::findOrFail($id);

        return (view('post', ['post' => $post]));
    }

    public function add()
    {
        return (view('create'));
    }

    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
    }


    //** API FUNCTIONS **//

    /**
     * Send all the posts in json format
     *
     * @return json
     */
    public function sendPosts()
    {
        $posts = Post::all();
        return response()->json([
            'posts' => $posts,
        ]);
    }

    public function sendPost($id)
    {
        $post = Post::findOrFail($id);
        return response()->json([
            'post' => $post
        ]);
    }
}
