<html>
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/bootstrap/css/login.css">
  
	<title></title>
</head>
<body>
@if(count($errors)>0)
<div class = "alert alert-danger">
	<ul>
		@foreach($errors->all()as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
<!-- resources/views/auth/register.blade.php -->

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

<div class = "modal-dialog">
  <div class = "modal-content">
    <div class = "modal-header">
      <h1 class = "text-center ">Registrarse</h1>


    <div class = "form-group">
        Name
        <input class = "form-control input-lg" type="text" name="name" value="{{ old('name') }}">
    </div>
<div class = "form-group">
        LastName
        <input class = "form-control input-lg" type="text" name="lastname" value="{{ old('lastname') }}">
    </div>
    <div class = "form-group">
        Email
        <input class = "form-control input-lg" type="email" name="email" value="{{ old('email') }}">
    </div>

    <div class = "form-group">
        Password
        <input class = "form-control input-lg" type="password" name="password">
    </div>

    <div class = "form-group">
        Confirm Password
        <input class = "form-control input-lg" type="password" name="password_confirmation">
    </div>
<div class ="form">
     <input type = "submit" class = " btn btn-success active pull-right" value = "Registrarse" onclick = "register()">
      </div>
</form>
<div class ="modal-footer"></div>
 <div class = "col-md-12"></div>
</body>

</html>