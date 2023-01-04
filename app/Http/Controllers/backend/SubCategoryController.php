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
        'Subcategory_name'=>'required',
        'Subcategory_details'=>'required',
        'Subcategory_status'=>'required'


      ]);


    SubCategory::create([
        'Subcategory_name'=>$request->Subcategory_name,
        'Subcategory_details'=>$request->Subcategory_details,
        'Subcategory_status'=>$request->Subcategory_status


    ]);
    return redirect()->route('SubCategory_list');
 }
 public function SubCategory_list(){
    $SubCategories=SubCategory::paginate(4);
    return view('backend.pages.SubCategory.list',compact('SubCategories'));
}

public function SubCategory_edit(){
  return view('backend.pages.SubCategory.update');
}
public function SubCategory_edit_Submit(){
  
      
  $request->validate([
    'Subcategory_name'=>'required',
    'Subcategory_details'=>'required',
    'Subcategory_status'=>'required'


  ]);

  $editSubCategorySubmit=SubCategory::find($id);
  $editSubCategorySubmit->update
  ([
      'Subcategory_name'=>$request->Subcategory_name,
      'Subcategory_details'=>$request->Subcategory_details,
      'Subcategory_status'=>$request->Subcategory_status

  ]);
  return redirect()->route('CustomerList')->with('success','edit succesfully');
}
public function SubCategory_delete(Request $request,$id){
  SubCategory::find($id)->delete();
  return redirect()->route('SubCategory_list');
}

}











