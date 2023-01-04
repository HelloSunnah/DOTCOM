<?php

namespace App\Http\Controllers\backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function Cate_Creat(){
        return view('backend.pages.Category.create');
    }


    public function Cate_Submit(Request $request){
      $request->validate([
        'category_name'=>'required',
        'category_details'=>'required',
        'category_status'=>'required'


      ]);


    Category::create([
        'category_name'=>$request->category_name,
        'category_details'=>$request->category_details,
        'category_status'=>$request->category_status


    ]);
    return redirect()->route('Cate_list');
 }
 public function Cate_list(){
    $Categories=Category::paginate(4);
    return view('backend.pages.Category.list',compact('Categories'));
}

}

