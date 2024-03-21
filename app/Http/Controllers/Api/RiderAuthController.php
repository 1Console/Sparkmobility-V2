<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Rider;
use Illuminate\Support\Str;
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
                'message' => 'Wrong login credentials',
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

    public function register(Request $request){
        //validate
        $request->validate([
            "name"=> "required",
            "email"=> "required",
            "phone_number"=> "required",
            "gender"=> "required",
            "nationality" => "required",
            "address"=> "required",
            "community"=> "required",
            "password"=> "required",
        ]);

        $password =  Hash::make($request->password);
     
        $rider = Rider::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "phone_number"=> $request->phone_number,
            "gender"=> $request->gender,
            "nationality" => $request->nationality,
            "address"=> $request->address,
            "community"=> $request->community,
            "status"=>1,
        ]);

        $user = User::create([
            'name' => $rider->name,
            'email' => $rider->email,
            'userable_id' => $rider->id,
            'userable_type' => Rider::class,
            'partner_id' =>  1, //this will be trekk partner ID by defaul
            'password' => $password, // password
            'remember_token' => Str::random(10),
        ]);
     
        if (! $user || !$rider) {
            return   response()->json([
                'status' => 'error',
                'message' => 'Registration was not successful',
                'user' => $user 
            ]);
    
        }
     
        $user->token =  $user->createToken($request->email)->plainTextToken;
        
        return   response()->json([
            'status' => 'success',
            'message' => 'Rider successfully registered',
            'user' => $user 
        ]);

    }

    public function logout(Request $request){
        $request->validate([
            'token' => 'required|string',
            'user_id' => 'required',
        ]);

        try{
            $token_id  = $request->token;
            $user = User::firstWhere('id',$request->user_id);
            
            //delete
            // $user->tokens()->where('id', $token_id)->delete();
            $user->tokens()->delete();
                
            return   response()->json([
                'status' => 'success',
                'message' => 'logged out',
                'user' => $user
            ]);

        }catch(\Exception $ex){
            return response()->json([
                'status' => 'error',
                'message' => $ex->getMessage()
            ]);
        }
        
    }
}
