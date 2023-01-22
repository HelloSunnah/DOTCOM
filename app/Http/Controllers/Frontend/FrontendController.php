<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{


   
    public function Frontend(){
      $products=Product::all();
      $categories=Category::all();
      return view('FrontendExtra.main.content',compact('products','categories'));
}

public function mainFront(){

   return view('FrontendExtra.main.main');
}

public function Frontend_submit_register(Request $request){

   $request->validate([
    'name'=>'required',
    'email'=>'required',
    'password'=>'required'
 ]);



 User::create([
    'name'=>$request->name,
    'email'=>$request->email,
    'password'=>bcrypt($request->password)

 ]);
 notify()->success('Register succeful');
return back();
 

}
public function Frontend_login_submit(Request $request){

   $request->validate([
      
      'email'=>'required',
      'password'=>'required'
   ]);
  

      $credentials=$request->except('_token');
      $authentication=auth()->attempt($credentials)&& auth()->user()->role=="admin";
      if($authentication){
         notify()->success('Login succeful');

          return to_route('dashboard');

         }
      else{
         notify()->success('Please ');
          return to_route('Frontend');


      }
  
}
public function Frontend_logout(){
   auth()->logout();
   notify()->success('Logout succeful');

   return to_route('Frontend');


}



public function cart(){
   return view('FrontendExtra.main.cart');
}
}



