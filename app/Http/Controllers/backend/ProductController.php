<?php

namespace App\Http\Controllers\backend;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
public function Product_list(){
    $Productall=Product::with('categories','Brands')->get();
    return view('backend.pages.Product.list',compact('Productall'));
    
    }


    public function Product_create(){
        $categories = Category::all();
        $Brands=Brand::all();
        return view('backend.pages.Product.create',compact('categories','Brands'));


}
public function Product_submit_create(Request $request){
    $request->validate([

'product_name'=>'required',
'category_id'=>'required',
'Brand_id'=>'required',
'product_image'=>'required',
'product_size'=>'required',
'product_price'=>'required',
'product_status'=>'required'
    ]);
    $fileName=null;
    if ($request->hasFile('product_image')){
    $fileName='kodeeo'.'.'.date('Ymdhmsis').'.'.$request->file('product_image')->
    getclientOriginalExtension();
    $request->file('product_image')->storeAs('/uploads/product',$fileName);
    }

    Product::create([
        'product_name'=>$request->product_name,
        'category_id'=>$request->category_id,
        'Brand_id'=>$request->Brand_id,
        'product_image'=>$fileName,
        'product_size'=>$request->product_size,
        'product_price'=>$request->product_price,
        'product_status'=>$request->product_status

        

    ]);
    return redirect()->route('Product_list');

}
    public function Product_delete($id){
        Product::find($id)->delete();
        return back();
    }
    public function Product_edit($id){
        $editProduct=Product::find($id);
        $categories=Category::all();
        $Brands=Brand::all();
        return view('backend.pages.Product.update',compact('editProduct','categories','Brands'));
    }
    public function Product_submit_edit(Request $request,$id){
        $ProductSubmit=Product::find($id);

        $fileName=$ProductSubmit->product_image;
        if ($request->hasFile('product_image')){
            $removeFile= public_puth().'/uploads/product/'.$fileName;
            File::delete($removeFile);
        $fileName='kodeeo'.'.'.date('Ymdhmsis').'.'.$request->file('product_image')->
        getclientOriginalExtension();
        $request->file('product_image')->storeAs('/uploads/product/',$fileName);
        }



      $ProductSubmit->update([

        'product_name'=>$request->product_name,
        'category_id'=>$request->category_id,
        'product_image'=>$fileName,
        'Brand_id'=>$request->Brand_id,
        'product_size'=>$request->product_size,
        'product_price'=>$request->product_price,
        'product_status'=>$request->product_status

        
      ]);
      return redirect()->route('Product_list');
    }
}