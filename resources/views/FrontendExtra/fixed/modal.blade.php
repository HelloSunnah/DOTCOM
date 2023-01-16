
<!-- Register -->

<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
              
<form action="{{route('Frontend_submit_register')}}" method="post">
  @csrf

      <div class="modal-body">

    <div>
    <label for="">Name</label>
    <input type="text" placeholder="Enter Your Name" class="form-control" name="name">
    @error('name')
    <div class="alert alert-danger">
{{$message}}
    </div>
    @enderror
    </div>
<br>
    <div>
    <label for="">Email</label>
    <input type="email" placeholder="Enter Your email" class="form-control" name="email">
    @error('email')
    <div class="alert alert-danger">
{{$message}}
    </div>
    @enderror
    </div>
<br>
    <div>
    <label for="">Password</label>
    <input type="password" placeholder="Enter Your password" class="form-control" name="password">
    @error('password')
    <div class="alert alert-danger">
{{$message}}
    </div>
    @enderror
    </div>

    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
</form>



  </div>
</div>



<!-- Login -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form action="Frontend_login_submit" method="post">
        @csrf
      <div class="modal-body">
        
<div>
    <label for="">Email</label>
    <input type="email" placeholder="Enter Your email" class="form-control" name="email">
    @error('email')
    <div class="alert alert-danger">
{{$message}}
    </div>
    @enderror
    </div>

    <br>
    <div>
    <label for="">Password</label>
    <input type="password" placeholder="Enter Your password" class="form-control" name="password">
    </div>
    @error('password')
    <div class="alert alert-danger">
{{$message}}
    </div>
    @enderror
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
     
    </div>
  </div>
</div>