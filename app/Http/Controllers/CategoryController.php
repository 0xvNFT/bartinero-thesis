<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CategoryController extends Controller
{
    // public function __construct() {
    //     $this->middleware(['auth']);
    // }

    public function index() {

        $posts = Post::paginate(8);

        dd($posts);

        return view('categories', [
            'posts' => $posts
        ]);
    }
}

