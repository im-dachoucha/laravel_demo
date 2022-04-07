<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }
    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);
        $post = Post::create($request->all());
        return redirect()->route("posts");
    }

    public function edit($id){
        // dd($id);
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);
        $post = Post::findOrFail($request->id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect()->route("posts");
    }

    public function destroy(Request $request){
        $post = Post::findOrFail($request->id);
        $post->delete();
        return redirect()->route("posts");
    }
}
