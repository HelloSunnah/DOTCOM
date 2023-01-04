@extends('backend.master')
@section('content')
<h1>SubCategory list Page</h1>
@if (session('success'))
<div class="alert alert-success">
{{session("success")}}
</div>
@endif
<div class="container">
    <a class="btn btn-primary" href="{{route('SubCategory_Creat')}}">Create SubCategory</a>
</div>
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">SubCategory Name</th>
            <th scope="col">SubCategory Details</th>
            <th scope="col">SubCategory Status</th>
            <th scope="col">Action</th>

        </tr>
        
    </thead>
    <tbody>
        
            @foreach($SubCategories as $Subcategory)
            <tr>

        <td>{{$Subcategory->id}}</td>
        <td>{{$Subcategory->Subcategory_name}}</td>
        <td>{{$Subcategory->Subcategory_details}}</td>
        <td>{{$Subcategory->Subcategory_status}}</td>
       
            
        <td>
            <a class="btn btn-danger" href="{{route('SubCategory_delete',$Subcategory->id)}}">Delete</a>
            <a class="btn btn-success" href="{{route('SubCategory_edit',$Subcategory->id)}}">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
<div class="d-flex justify-content-center"
>{{$SubCategories->links()}}</div>
    @endsection