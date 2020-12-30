<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('posts.index');
    }   //

    public function uploadFile(Request $request) {
        $request->file->store('public');
        return "File has been uploaded successfully.";
    }
}
