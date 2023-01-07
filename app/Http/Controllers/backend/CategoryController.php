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
    $categories=Category::paginate(4);
    return view('backend.pages.Category.list',compact('categories'));
}


public function Category_edit($id){
  $editCategory=Category::find($id);
  return view('backend.pages.Category.update',compact('editCategory'));
}



public function Category_edit_submit(Request $request,$id){
  $editSubmitCategory=Category::find($id);

$editSubmitCategory->update([
  'category_name'=>$request->category_name,
  'category_details'=>$request->category_details,
  'category_status'=>$request->category_status

]);
return redirect()->route('Cate_list');
}


public function Category_delete($id){
  Category::find($id)->delete();
  return back();
}

}

