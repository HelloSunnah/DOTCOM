<?php

namespace App\Http\Controllers\backend;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
   public function Brand_create(){


return view('backend.pages.Brand.create');
   }
public function Brand_submit(Request $request){
     $request->validate([

        'Brand_name'=>'required',
        'Brand_details'=>'required',      
        'Brand_status'=>'required',
        'Brand_image'=>'required'
      


       ]);


   $fileName = null;
   if($request->hasFile('Brand_image')){
           $fileName = 'Brand'.'.'.date('Ymdhmsis').'.'.$request->file('Brand_image')->getClientOriginalExtension();
        //   dd($fileName);
           $request->file('Brand_image')->storeAs('/uploads/Brand',$fileName);
   }            //   dd($fileName);




   
   Brand::create(
      [
         'Brand_name'=>$request->Brand_name,
         'Brand_details'=>$request->Brand_details,
         'Brand_status'=>$request->Brand_status,
         'Brand_image'=>$fileName



      ]);
      return redirect()->route('Brand_list');

}
   
   public function Brand_list(){
      $Brands=Brand::all();
     
    return view ('backend.pages.Brand.list',compact('Brands'));




   }
   public function Brand_edit(){
      return view('backend.pages.Brand.update');
   }
   public function Brand_edit_Submit(Request $request,$id){
      $Edit_Submit=Brand::find($id);
$Edit_Submit->update([

   'Brand_name'=>$request->Brand_name,
   'Brand_details'=>$request->Brand_details,
   'Brand_status'=>$request->Brand_status,
   'Brand_image'=>$fileName



]);
$request->validate([

   'Brand_name'=>'required',
   'Brand_details'=>'required',      
   'Brand_status'=>'required',
   'Brand_image'=>'required'
 


  ]);

return redirect()->route('Brand_list');
   }
   public function Brand_delete(Request $request,$id){
   Brand::find($id)->delete();
   return back()->with('danger','opps you have deleted a data');
   }
}