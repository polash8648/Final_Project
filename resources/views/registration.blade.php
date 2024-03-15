@extends('layout')
@section('title','Registration')
@section('content')
<div class="container">
<div class="mt-5">
  @if($errors->any())
<div class="col-12">
   @foreach($errors->all() as $error)
      <div class="alert alert-dander">{{$error}}</div>
   @endforeach
</div>
  @endif

  @if(session()->has('error'))
     <div class="alert alert-dander">{{session('error')}}</div>
  @endif  
  @if(session()->has('success'))
     <div class="alert alert-success">{{session('success')}}</div>
  @endif  
</div>

<form action="{{route('registration.post')}}" method="post" class="ms-auto me-auto mt-auto" style="width: 500px;">
@csrf 
<div class="mb-3">
    <label  class="form-label">Full Name</label>
    <input type="text" class="form-control" name="name"  >
  </div>
  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" >   
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="password" >
  </div>
  <div class="mb-3">
  <label  class="form-label">Role</label>
  <select class="form-select" name="role" >  
  <option name="role" value="Admin">Admin</option>
  <option  name="role" value="User">User</option>
  <option name="role" value="Company User">Company User</option>
</select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

@endsection