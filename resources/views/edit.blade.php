 <!DOCTYPE html>

<html lang="es">

<head>
    <title>Editar</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/bootstrap/css/login.css">
   <link rel="stylesheet" href="/bootstrap/css/screen.css">


</head>

<body>
  <body>
    <div class="container">
      <section class="main row">
        <article class="col-xs-12 col-sm-8 col-md-6 col-lg-12">
          <article class="col-xs-12 col-sm-8 col-md-6 col-lg-3">
            <form>
              <div class="form-group">
                <label for="usr"></label>
               </div>
            </form>
            <button type="button" class="btn btn-default">
              <span class="glyphicon glyphicon-search"></span>Buscar
            </button>
          </article>
        </section>
      </div>
         </article>
 </header>

 <br>

 <form name ="crear">
  <div class = "container col-sm-2" align="left">
    <div class="btn btn-group-vertical">
      <div class="btn-group ">
        <input  type="button" class="btn btn-danger"  value="Redactar" data-toggle="modal" data-target="#myModal"/><br><br>
        <div class="row">
          </div>
        </div>
        </div>

        <div class="btn-group-vertical">
          <button type="button" class="btn btn-default" id="btn2"><b>Salida</b></button>
          <button type="button" class="btn btn-default" id="btn1">Enviados</button>
          <button type="button" class="btn btn-default" id="btn">Salir</button>
        </div>
      </div>
    </div>
  </form>
 <div class ="container col-xs-8">

{!!  Form::model($email ,['route'=>['mail.update' ,$email],'method'=>'put'])!!}

<div class="form-group">
    <label for="exampleInputEmail1">destino</label>
    {!!Form::text('destino',null,['class'=>'form-control','placeholder'=>'example@gmail.com,example2@hotmail.com'])!!}
</div>
<div class="form-group">
    <label for="example">asunto</label>
    {!!Form::text('asunto',null,['class'=>'form-control','placeholder'=>'Subject'])!!}
</div>
<div class="form-group">
    <label for="example">mensaje</label>
    {!!Form::textarea ('mensaje',null,['class'=>'form-control','placeholder'=>'Write the message here'])!!}
</div>
{!!Form::open(['route'=>['mail.update' ,$email->id],'method'=>'update'])!!}
<button type="submit" class="btn btn-danger">Editar</button>
{!!Form::close()!!}


  </div>
</div>
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>