<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
body {padding-top:20px;}
</style>
<!------ Include the above in your HEAD tag ---------->
</head>

<body>
<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
      <h1>Email:{{$Emaildata['email']}}</h1>
      <p>Message:{{$Emaildata['msg']}}</p>
      </div>
	</div>
</div>
</body>
</html>
