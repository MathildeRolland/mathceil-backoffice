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

    public function create()
    {
        return (view('create'));
    }

    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        $lastPosts = Post::orderBy('created_at', 'desc')->take(5)->get();

        return view('welcome', ['posts' => $lastPosts]);
    }

    public function update($id)
    {
        $postToUpdate = Post::findOrFail($id);

        return view('update', ['post' => $postToUpdate]);
    }

    public function edit(Request $request)
    {
        $postToUpdate = Post::findOrFail($request->id);

        Post::whereId($request->id)->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect('/posts');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/posts');
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
