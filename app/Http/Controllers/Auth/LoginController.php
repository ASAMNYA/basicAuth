<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
     public function loginForm(){

        return view('auth.login');
    }

    public function login(Request $request){
         $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('Signed in Successful');
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }

     public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
