<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:5|string|exists:users,username',
            'password' => 'required|min:5|string',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors(['message' => $validator->errors()]);
        }
        if(!Auth::attempt($request->only('username', 'password'))){
            return redirect()->back()->withErrors(['message' => 'Username or Password Incorrect']);
        }

        $request->session()->regenerate();
        return redirect()->intended('/home');
    }
    public function logout(Request $request){
        $user = Auth::check();
        if($user){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerate();
            return redirect()->intended('/');
        };
    }
}
