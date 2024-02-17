<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RiderAuthController extends Controller
{
    public function login(Request $request){
        //validate
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
     
        $user = User::where('email', $request->email)->first();
     
        if (! $user || ! Hash::check($request->password, $user->password)) {
            return   response()->json([
                'status' => 'failed',
                'message' => 'authentication failed',
                'user' => $user 
            ]);
    
        }
     
        $user->token =  $user->createToken($request->email)->plainTextToken;
        
        return   response()->json([
            'status' => 'success',
            'message' => 'authenticated',
            'user' => $user 
        ]);

    }
}
