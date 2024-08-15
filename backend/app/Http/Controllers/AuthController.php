<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash; 

class AuthController extends Controller
{
    public function register(Request $request){
      $fields= $request->validate([
       'name'=>'required|max:25',
       'email'=>'required|email|unique:users',
       'password'=>'required|confirmed',

       ]);

     $user = User::create($fields);
     $token = $user->createToken($request->name);

     return [
       'user'=>$user,
       'token'=>$token->plainTextToken
     ];

    }



    public function login(Request $request){

         $request->validate([
            
            'email'=>'required|email|unique:users',
            'password'=>'required',
     
            ]);
            // query useremail==db email
            $user = User::where('email',$request->email)->first();
            // check password
            if( !$user || !Hash::check($request->password , 
            $user->password)){
                //not match pass then show incorrect password  
            return [
                'message'=>'the provided creadential are incorrect'
        
             ];

            };
            //   if correct it give return user detail and token
            $token = $user->createToken($user->name);
            return [
                'user'=>$user,
                'token'=>$token->plainTextToken
              ];

    }


    // logout
    public function logout(Request $request){
      $request->user()->tokens()->delete;
      return [
         'message'=>'logout successfully'
      ];
    }
}
