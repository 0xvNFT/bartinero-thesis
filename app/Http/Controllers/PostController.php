<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {

        $posts = Post::get();

        return view('posts.index', [
            'posts' => $posts
        ]);

    }

    public function show(Post $post) {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'body' => 'required',
            // 'file' => 'required',
            'barter' => 'required',
        ]);

        // $request->user()->posts()->create($request->only('title','category','body','barter','file'));
        $request->user()->posts()->create($request->only('title','category','body','barter'));

        return back();

        auth()->user()->posts()->create();

    }

    public function destroy(Post $post) {
        $post->delete();
        return back();
    }

    // public function uploadFile(Request $request) {
    //     $request->file->store('public');
    //     return "File has been uploaded successfully.";
    // }
}
