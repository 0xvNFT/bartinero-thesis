<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('posts.index');
    }   //

    public function store(Request $request) {

        $this->validate($request, [
            // 'location' => 'required',
            'title' => 'required',
            'category' => 'required',
            'body' => 'required',
            'barter' => 'required',
            // 'file' => 'required',
        ]);

        $request->user()->posts()->create([
            // 'location' => $request->location,
            'title' => $request->title,
            'category' => $request->category,
            'body' => $request->body,
            'barter' => $request->body,
            // 'file' => $request->file,
        ]);

        return back();

        //auth()->user()->posts()->create();


        // Post::create([
        //     'user_id' => auth()->id(),
        //     'barangay' => $request->barangay,
        //     'title' => $request->title,
        //     'category' => $request->category,
        //     'body' => $request->body,
        //     'file' => $request->file
        // ]);

    }

    // public function uploadFile(Request $request) {
    //     $request->file->store('public');
    //     return "File has been uploaded successfully.";
    // }
}
