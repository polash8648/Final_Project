@extends('layout')
@section('title','Job Create')
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
<form action="{{route('job.post')}}" method="post" class="ms-auto me-auto mt-auto" style="width: 500px;">
@csrf 
<div class="row">
<div class="col-md-6">
<div class="mb-3">
    <label  class="form-label">Job Name</label>
    <input type="text" class="form-control" name="job_name"  >
  </div>
  <div class="mb-3">
    <label  class="form-label">Company Name</label>
    <input type="text" class="form-control" name="company_name" >   
  </div>
  <div class="mb-3">
    <label  class="form-label">Job Description</label>
    <input type="text" class="form-control" name="job_description" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Salary</label>
    <input type="number" class="form-control" name="salary" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Terms and Condition</label>
    <input type="text" class="form-control" name="terms_condition" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Location</label>
    <input type="text" class="form-control" name="location" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Status</label>
    <select class="form-select" name="status" >  
  <option name="status" value="Full Time">Full Time</option>
  <option  name="status" value="Part Time">Part Time</option>
  <option name="status" value="Remote">Remote</option>
</select>  
  </div> 
  </div>
 <div class="col-md-6">
 <div class="mb-3">
    <label  class="form-label">Education</label>
    <input type="text" class="form-control" name="education" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Experience</label>
    <input type="text" class="form-control" name="experience" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Responsibilities</label>
    <input type="text" type="multiline" class="form-control" name="responsibilities" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Skills</label>
    <input type="text" class="form-control" name="skills" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Company Benifits</label>
    <input type="text" class="form-control" name="company_benifit" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Workplace</label>
    <input type="text" class="form-control" name="workplace" >
  </div>
 </div>
 </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>


@endsection