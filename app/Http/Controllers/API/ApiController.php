<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function Product(){
       $products=Product::all([
        'product_name'
       ]);
       return response()->json([
        'success'=>true,
        'message'=>'all Product data showed',
        'data'=>$products
       ]);
    }

public function Crate_Category(Request $request)
{ $C_Category=Category::create([
    
    'category_name'=>$request->category_name,
    'category_details'=>$request->category_details,
    'category_status'=>$request->category_status

]);
return response()->json([
    'success'=>true,
    'message'=>'all Product data showed',
    'data'=>$C_Category
   ]);
    
}


public function DeleteCategory($id){
$delete_Cat=Category::find($id);

if($delete_Cat){
    $delete_Cat()->delete();
    return $this->responseWithSuccess(null,'Category deleted succesfully');
}
    
return $this->responseWithError('Unavailble Data');

}
}
