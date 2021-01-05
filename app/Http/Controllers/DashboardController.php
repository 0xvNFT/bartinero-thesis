<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class DashboardController extends Controller
{

    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index() {

        $posts = Post::get();

        return view('dashboard', [
            'posts' => $posts
        ]);
    }

    public function destroy(Post $post) {
        $post->delete();
        return back();
    }

}
