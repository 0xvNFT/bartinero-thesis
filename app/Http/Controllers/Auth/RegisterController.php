<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Providers\RouteServiceProvider;

class RegisterController extends Controller
{

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator (array $request) {

        return Validator::make($request, [
            'firstname' => 'required|max:20|alpha',
            'lastname' => 'required|max:20|alpha',
            'gender' => 'required',
            'address' => 'required|max:140',
            'barangay' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'mobile' => 'required|max:11|unique:users',
            'username' => 'required|max:15|unique:users',
            'password' => 'required|confirmed|min:8',
            //'tcagree' => 'required',
        ]);

        //User::create([
        //    'firstname' => $request->firstname,
        //    'lastname' => $request->lastname,
        //    'gender' => $request->gender,
        //    'address' => $request->address,
        //    'barangay' => $request->barangay,
        //    'email' => $request->email,
        //    'mobile' => $request->mobile,
        //    'username' => $request->username,
        //    'password' => Hash::make($request->password),
            //'tcagree' => $request->tcagree,
        //]);

        auth()->attempt($request->only('email', 'password')); 

        return redirect()->route('dashboard');

        // Store user

        // Sign the user in

        // Redirect
    }

        /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $request)
    {
        return User::create([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'gender' => $request['gender'],
            'address' => $request['address'],
            'barangay' => $request['barangay'],
            'email' => $request['email'],
            'mobile' => $request['mobile'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
        ]);
    }
}
