@extends('Admin.layouts.admindashbord')
@section('content')
@if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        <img src="images/{{ Session::get('image') }}">
        @endif
    
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
<form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{route('products.store')}}" >
@csrf
  <div class="form-group">
    <label class="control-label col-md-4" for="email">ProductName</label>
    <div class="col-md-8">
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="pname" value="<?php echo $editdata->pname ?? '';?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-4" for="email">Image</label>
    <div class="col-md-8">
      <input type="file" class="form-control" id="file" placeholder="Enter email" name="img" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-4" for="pwd">Description</label>
    <div class="col-md-8">
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="desc" value="<?php  echo $editdata->description ?? ''?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-md-4" for="pwd">Price</label>
    <div class="col-md-8">
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="price" value="<?php echo $editdata->price ?? '';?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-4" for="pwd">Quantity</label>
    <div class="col-md-8">
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="qty" value="<?php echo $editdata->qty ?? '';?>">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-default" name="submit">
    </div>
  </div>
</form>
@endsection