<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function __construct() {
        $this->middleware(['guest']);
    }

    public function index() {
        return view('auth.register');
    }
    
    public function uploadAvatar(Request $request) {

        $this->validate($request->image->store('public'));

        // if($request->hasFile('image')) {
        //     dd($request->image);
        // }

        User::find(1)->update([
            'avatar' => 'test'
        ]);

        return 'Uploaded';
    }


    public function store(Request $request) {

        $this->validate($request, [
            'firstname' => 'required|max:20|alpha',
            'lastname' => 'required|max:20|alpha',
            'gender' => 'required',
            'address' => 'required|max:140',
            'barangay' => 'required',
            'email' => 'required|email|max:255',
            'mobile' => 'required|max:11|numeric',
            'username' => 'required|max:15',
            'password' => 'required|confirmed|min:8',
            //'tcagree' => 'required',
        ]);

        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'gender' => $request->gender,
            'address' => $request->address,
            'barangay' => $request->barangay,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            //'tcagree' => $request->tcagree,
        ]);

        auth()->attempt($request->only('email', 'password')); 

        return redirect()->route('dashboard');

        // Store user

        // Sign the user in

        // Redirect
    }
}
