<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function addToCart($id)
    {
       $product=Product::find($id);

       //case 1 : add new product to cart
       $cart[$id]=[
           'product_name'=>$product->product_name,
           'product_price'=>$product->product_price,
           'product_quantity'=>1,
           'subtotal'=>$product->product_price,
           'image'=>$product->product_image
       ];

       session()->put('myCart',$cart);
       notify()->success('Product added to cart.');
       return redirect()->back();





       //case 2: add existing product to cart


        //case 3:cart not empty but product is new

    }


    public function cartview()
    {
        return view('FrontendExtra.main.cart');
    }

    public function cartItemDelete($id)
    {
       $newCart=session()->get('myCart');
        unset($newCart[$id]);
        session()->put('myCart',$newCart);

        notify()->success('Item deleted from cart.');
        return redirect()->back();
    }
}
  
