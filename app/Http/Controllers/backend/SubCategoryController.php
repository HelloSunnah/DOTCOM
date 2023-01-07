<?php

namespace App\Http\Controllers\backend;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    public function SubCategory_Creat(){
        return view('backend.pages.SubCategory.create');
    }


    public function SubCategory_Submit(Request $request){
      $request->validate([
        'subcategory_name'=>'required',
        'subcategory_details'=>'required',
        'subcategory_status'=>'required'


      ]);


    SubCategory::create([
        'subcategory_name'=>$request->subcategory_name,
        'subcategory_details'=>$request->subcategory_details,
        'subcategory_status'=>$request->subcategory_status


    ]);
    return redirect()->route('SubCategory_list');
 }

 public function SubCategory_list(){
  $subcategories=SubCategory::all();
  return view('backend.pages.SubCategory.list',compact('subcategories'));
}






public function SubCategory_edit($id){
  $editSubCategory=SubCategory::find($id);
  return view('backend.pages.SubCategory.update',compact('editSubCategory'));
}

public function SubCategory_edit_submit(Request $request,$id){
  $editSubmitSubCategory=SubCategory::find($id);

$editSubmitSubCategory->update([
  'subcategory_name'=>$request->subcategory_name,
  'subcategory_details'=>$request->subcategory_details,
  'subcategory_status'=>$request->subcategory_status

]);
return redirect()->route('SubCategory_list');
}
public function SubCategory_delete($id){
  SubCategory::find($id)->delete();
  return back();
}

}

