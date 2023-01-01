<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class authController extends Controller
{
   public function regForm(){
    return view('auth.registration');
   
   }


   public function regFormSubmit(Request $request){

      $request->validate([
         'name'=>'required',
         'email'=>'required',
         'username'=>'required',
         'password'=>'required'
       ]);


   User::create([
    'name'=>$request->name,
    'email'=>$request->email,
    'username'=>$request->username,
    'password'=>bcrypt($request->password)
   ]);
   return back()->with('success','Resistration Succesfull');
}
   


public function login(){
  return view('auth.login');




 }
 public function loginSubmit(Request $request){
    $credentials=$request->except('_token');
    $authentication=auth()->attempt($credentials);
    if($authentication){
        return to_route('dashboard')->with('success','Login successful');}
    else{
        return to_route('regForm');
    }

 }
 public function logout(){
    auth()->logout();
    return to_route('login')->with('success','Logout Succesfull');
 }
}
