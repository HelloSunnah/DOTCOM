<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function CustomerCreate(){
        return view('backend.pages.Customer.create');
    }



    public function CustomerList(){ //for create and view
        $customerall=Customer::paginate(4);
        return view('backend.pages.Customer.list' ,compact('customerall'));
    }
public function Customer_submit_Create(Request $request){

    $request->validate([

        'customer_id'=>'required',
        'customer_name'=>'required',      
        'customer_image'=>'required',
        'customer_mobile'=>'required',
        'customer_address'=>'required'


       ]);

       $fileName = null;
       if($request->hasFile('customer_image')){
               $fileName = 'Kodeeo'.'_'.date('Ymdhmsis').'.'.$request->file('customer_image')->getClientOriginalExtension();
            //   dd($fileName);
               $request->file('customer_image')->storeAs('/uploads/customer',$fileName);
       }            //   dd($fileName);


    Customer::create([
        'customer_id'=>$request->customer_id,
        'customer_name'=>$request->customer_name,
        'customer_image'=>$fileName,
        'customer_mobile'=>$request->customer_mobile,
        'customer_address'=>$request->customer_address

    ]);
    return redirect()->route('CustomerList')->with('success','created succesfully');
}
    //for create and view

 
    public function Customer_delete($id){
        Customer::find($id)->delete();
        return back();
    }

public function Customer_edit($id){
    $editCustomer=Customer::find($id);
    return view('backend.pages.Customer.update',compact('editCustomer'));
}



public function Customer_submit_edit(Request $request, $id){


    $request->validate([

        'customer_id'=>'required',
        'customer_name'=>'required',
        'customer_imagw'=>'required',

        'customer_mobile'=>'required',
        'customer_address'=>'required'


       ]);




    $editCustomerSubmit=Customer::find($id);
    $editCustomerSubmit->update
    ([
        'customer_id'=>$request->customer_id,
        'customer_name'=>$request->customer_name,
        'customer_image'=>$filename,

        'customer_mobile'=>$request->customer_mobile,
        'customer_address'=>$request->customer_address

    ]);
    return redirect()->route('CustomerList')->with('success','edit succesfully');
}

}
