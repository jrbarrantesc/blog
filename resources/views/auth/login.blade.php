 <!DOCTYPE html>

<html lang="es">

<head>
    <title>Lo-Gin</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/bootstrap/css/login.css">
   <link rel="stylesheet" href="/bootstrap/css/screen.css">


</head>

<body>
  <body>
 
  <div class = "modal-dialog">
    <div class = "modal-content">
      <div class = "modal-header">
        <h1 class = "text-center ">LOGIN</h1>
      </div>
      <br>
      <div class = "modal-body">
        <form method="POST" action="/auth/login">
      
          <div class="form-group">
         <form class = " form-inline col-md-12 center-block"></form>
       <div class = "form-group">
          <input name ="email"type = "email" class = "form-control input-lg" placeholder="Email" id= "username" required >
        </div>

        <div class = "form-group ">
          <input name = "password"type = "password" class = "form-control input-lg" placeholder="Contraseña" id = "userpassword" required>
        </div>
        
      </form>

  <div class ="form-group">

       <button type = "submit" class = " glyphicon glyphicon-user btn btn-sm btn-success active pull-right"> Login</button>
      </div>
      <br>
      <br>
      <div class ="modal-footer"></div>
      <br>
            <div class = "col-md-12"></div>
   
      <div class ="form-group">
   
       <span class = "pull-right">¿Eres nuevo en tumail.es?</span>
     </span>
   </div>
   <br>
   <div class ="form-group">
    <span class = "pull-right "><a href="/auth/register">Regístrate para obtener una cuenta nueva</a>
    </span>
    
  </div>  
</div>
</div>
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js" type="text/javascript"></script>
</body>
</html>