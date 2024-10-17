<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            return response()->json(["retCode" => 200, "name" => auth()->user()->name]);
        }else{
            return response()->json(["retCode" => 404]);
        }
    }

    public function register(Request $request){

    }

    public function logout(User $user){

    }
}
