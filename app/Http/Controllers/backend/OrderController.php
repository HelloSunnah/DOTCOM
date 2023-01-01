<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function orderCreate(){
        return view('backend.pages.Order.create');
    }


    public function orderList(){
        $orderall=Order::all();
        return view('backend.pages.Order.list',compact('orderall'));
    }


    //for create
    public function orderSubmit_create(Request $request){

       $request->validate([

        'order_id'=>'required',
        'order_amount'=>'required',
        'order_date'=>'required',
        'order_details'=>'required'


       ]);



        Order::create([
            'order_id'=>$request->order_id,
            'order_amount'=>$request->order_amount,
            'order_date'=>$request->order_date,
            'order_details'=>$request->order_details

        ]);
        return redirect()->route('orderList');

    }
    //end create


    public function delete_order($id){
        Order::find($id)->delete();
        return back();
    }
    public function edit_order($id){
        $editOrder=Order::find($id);
        return view('backend.pages.Order.edit',compact('editOrder'));
    }
    public function Update_order(Request $request,$id)
    {

        $request->validate([

            'order_id'=>'required',
            'order_amount'=>'required',
            'order_date'=>'required',
            'order_details'=>'required'
    
    
           ]);
    




         $editOrderSubmit=Order::find($id);
         $editOrderSubmit->update([
            'order_id'=>$request->order_id,
            'order_amount'=>$request->order_amount,
            'order_date'=>$request->order_date,
            'order_details'=>$request->order_details
        ]);
        return redirect()->route('orderList');
    }
    
}
