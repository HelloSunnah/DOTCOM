<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontProductController extends Controller
{
    public function productpage(){
        $products=Product::all();
    
        return view('FrontendExtra.main.product-list',compact('products'));
    }



    public function productDetails(){
return view('FrontendExtra.main.product-detail');

}
}