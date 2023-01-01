@extends('backend.master')
@section('content')
<h1>Make your new product</h1>


<form action="{{route('Product_submit_create')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Product Id</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter your order amount" name="product_id"    >
            @error('product_id')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Product Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter your order amount" name="product_name">
            @error('product_name')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Product Image</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter your order amount" name="product_image">
            @error('product_image')
            <div class="alert alert-danger">{{$message}}</div>

            @enderror

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Product Size</label>
        <input type="text" class="form-control" id="exampleInputPassword1"
            placeholder="Enter your order date" name="product_size">
            @error('product_size')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Product Price</label>
        <input type="text" class="form-control" id="exampleInputPassword1"
            placeholder="Enter your order details" name="product_price">
            @error('product_price')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror

        </div>
 
 

        <div class="form-group">
        <label for="exampleInputPassword1">Product Status</label>
        <input type="text" class="form-control" id="exampleInputPassword1"
            placeholder="Enter your order details" name="product_status">
            @error('product_status')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
    </div>
    
 
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
