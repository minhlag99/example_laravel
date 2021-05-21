@extends('main')
@section('content')
@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif

<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
<div style="margin-top: 10px;margin-left: 1000px;"> <a href="{{url('/my_user/create')}}" class="btn btn-primary" >Create new employee</a> </div>
<div class="col-12 " style="margin-top: 50px;margin-left: 50px;margin-right: 50px;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">AGE</th>
      <th scope="col">Email</th>
      <th> Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($all_user as $user)
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->age}}</td>
      <td>{{$user->email}}</td>
      <td>
        <a href="/my_user/{{ $user->id }}/edit"  class="btn btn-success">EDIT</a>
        <a href="/my_user/{{ $user->id }}/delete" class="btn btn-primary">DELETE</a>
      </td>
    </tr>
    @endforeach
    
    
  </tbody>
</table>
</div>
@endsection
