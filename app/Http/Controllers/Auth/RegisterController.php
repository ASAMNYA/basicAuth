<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use DB;

class RegisterController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');
    }
      
    /*
        Process Registration
    */ 
    public function register(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required| min:4|confirmed',
            'password_confirmation' => 'required| min:4'
        ]);
           
        $data = $request->all();
        DB::beginTransaction();
        try{
            $check = $this->create($data);
  
            DB::commit();
        }catch (Exception $e) {
            DB::rollBack();
        }   
        session()->flash('message', 'Your account is created');
        return response()->json($check);
    }

    private function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => bcrypt($data['password']),
      ]);
    } 

}
