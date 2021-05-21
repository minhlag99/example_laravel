@extends('main')
@section('content')

<div class="col col-12">
<div style="margin-top:50px;text-align:center;" ><h1>EDIT EMPLOYEE FORM</h1></div>
<form action="{{URL::to('/my_user/update')}}" method="post">
@csrf
<div type="hidden" class="input-group mb-3">
  <input type="hidden" type="text" name="id" value="{!! $my_user[0]->id !!}">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">NAME</span>
  <input type="text" class="form-control" name="name" value="{!! $my_user[0]->name !!}" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">AGE</span>
  <input type="text" class="form-control" name="age" value="{!! $my_user[0]->age !!}" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">EMAIL</span>
  <input type="text" class="form-control" name="email" value="{!! $my_user[0]->email !!}" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
 <div>
 <input type="submit"  class="btn btn-primary " value="Submit" aria-describedby="basic-addon1">
 </div>
  
</div>
</form>
</div>
@endsection