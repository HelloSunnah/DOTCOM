<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
public function Product_list(){
    $Productall=Product::all();
    return view('backend.pages.Product.list',compact('Productall'));
    
    }


    public function Product_create(){
        return view('backend.pages.Product.create');

}
public function Product_submit_create(Request $request)
{
    $request->validate([
'product_id'=>'required',
'product_name'=>'required',
'product_image'=>'required',
'product_size'=>'required',
'product_price'=>'required',
'product_status'=>'required'
    ]);
    $fileName=null;
    if ($request->hasFile('product_image')){
    $fileName='kodeeo'.'_'.date('Ymdhmsis').'.'.$request->file('product_image')->
    getclientOriginalExtension();
    $request->file('product_image')->storeAs('/uploads/product',$fileName);
    }

    Product::create([
        'product_id'=>$request->product_id,
        'product_name'=>$request->product_name,
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
}