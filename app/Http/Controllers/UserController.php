<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginAPI(){
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        if(auth()->attempt($attributes)){
            return response()->json([
                'message' => 'Logged in successfully'
            ]);
        }
        //auth failed
        return response()->json([
            'message' => 'Your provided credentials not verified.'
        ]);
    
    }
}
