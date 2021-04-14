<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Issuer;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index() {
        return view('front.sessions.index');
    }

    public function store(Request $request){

        // Validate the user
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $request->validate($rules);

        // Check if exists
        $data= request(['email','password']);
        if ( ! auth()->attempt($data) ) 
        {
            return back()->withErrors([
                'message' => 'Wrong credentials please try again'
            ]);
        }

        return redirect('/user/profile');

    }

    public function logout() {

        auth()->logout();

        session()->flash('msg','You have successfully logged out');

        return redirect('/user/login');

    }

}
