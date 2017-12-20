<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('post.index')->with([
            "posts" => $posts
        ]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $post = new Post();

        $post->title = $request->title;
        $post->content = $request->content;

        $post->save();

        return redirect()->to('/post');
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('post.edit')->with([
            "post" => $post
        ]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $post->title = $request->title;
        $post->content = $request->content;

        $post->save();

        return redirect()->to('/post');
    }

    public function destroy(Request $request, $id)
    {
        $post = Post::find($id);

        $post->title = $request->title;
        $post->content = $request->content;

        $post->delete();

        return redirect()->to('/post');
    }
}
