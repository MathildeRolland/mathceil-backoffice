<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
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
        $categories = Category::all();

        return (view('create', ['categories' => $categories]));
    }

    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'summary' => $request->summary,
            'content' => $request->content,
        ]);

        $post->categories()->attach($request->categories);

        $lastPosts = Post::orderBy('created_at', 'desc')->take(5)->get();

        return view('welcome', ['posts' => $lastPosts]);
    }

    public function update($id)
    {
        $postToUpdate = Post::with('categories')->findOrFail($id);
        $categories = Category::all();

        return view('update', ['post' => $postToUpdate, 'categories' => $categories]);
    }

    public function edit(Request $request)
    {
        // $postToUpdate = Post::findOrFail($request->id);

        $postToUpdate = Post::whereId($request->id)->update([
            'title' => $request->title,
            'summary' => $request->summary,
            'content' => $request->content,
        ]);

        $postToUpdate->categories()->attach($request->categories);

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
        $posts = Post::with('categories')->get();

        return response()->json([
            'posts' => $posts,
        ]);
    }

    public function sendPost($id)
    {
        $post = Post::with('categories')->findOrFail($id);

        return response()->json([
            'post' => $post
        ]);
    }
}
