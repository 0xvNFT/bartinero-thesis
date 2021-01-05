<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function index() {

        $posts = Post::get();

        return view('single', [
            'posts' => $posts
        ]);
    }

    public function show(Post $post) {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}

