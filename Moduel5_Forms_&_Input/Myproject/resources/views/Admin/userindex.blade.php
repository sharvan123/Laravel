@extends('Admin.layouts.admindashbord')
@section('content')
<h1>User</h1>
<a href="{{route('users.create')}}" class="btn btn-primary">Add User</a>
<div class="row">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">UserName</th>
      <th scope="col">email</th>
      <th>Action</th>
     
    </tr>
  </thead>
  <tbody>
    
    @foreach($user as $users)
    <tr>
      <th scope="row">{{$users->id}}</th>
      <td>{{$users->name}}</td>
      <td>{{$users->email}}</td>
      <td>{{$users->id}}</td>
      
      <td>
      <form action="{{route('users.destroy',$users->id)}}" method="POST">
      @method('DELETE')
      @csrf
     <input type="submit" value="DELETE" class="btn btn-danger">
      </form></td>
      
      
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>
@endsection