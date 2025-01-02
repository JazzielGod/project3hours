<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create', ['post' => new Post]);
    }

    public function store(SavePostRequest $request)
    {

        // $validated = $request->validate([
        //     'title' => 'required|min:4',
        //     'body' => 'required',
        // ]);

        // dd($validated);

        // $post = new Post();
        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->save();

        Post::create($request->validated());

        // session()->flash('status', 'Post created successfully!');

        return to_route('posts.index')->with('status', 'Post created successfully!');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post){
        
        // $validated = $request->validate([
        //     'title' => 'required|min:4',
        //     'body' => 'required',
        // ]);

        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->save();

        $post->update($request->validated());

        // session()->flash('status', 'Post updated successfully!');

        return to_route('posts.show', $post)->with('status', 'Post updated successfully!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        // session()->flash('status', 'Post deleted successfully!');
        return to_route('posts.index')->with('status', 'Post deleted successfully!');
    }
}
