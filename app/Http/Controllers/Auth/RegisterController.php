<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function __construct() {
        $this->middleware(['guest']);
    }

    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'gender' => 'required',
            'address' => 'required|max:255',
            'barangay' => 'required',
            'email' => 'required|email|max:255',
            'mobile' => 'required|max:11',
            'username' => 'required|max:15',
            'password' => 'required|confirmed',
            //'tcagree' => 'required',
        ]);

        User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
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
