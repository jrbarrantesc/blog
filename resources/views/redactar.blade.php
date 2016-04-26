 <!DOCTYPE html>
 <html lang="es">
 <head>
  <title>Redactar</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/bootstrap/css/login.css">
  <link rel="stylesheet" href="/bootstrap/css/screen.css">
</head>
<body>
 <div style="text-align:right">
   <a href="{{URL::route('logout')}}"><button class = " glyphicon glyphicon-user btn btn-xs btn-danger">Cerrar Sesion </button></a>
 </div>
 <div class="container">
  <h1><b><i> Nuevo Correo</i></b></h1>


</div>
<div class="container">
  <section class="main row">
    <article class="col-xs-12 col-sm-8 col-md-6 col-lg-12">
      <article class="col-xs-12 col-sm-8 col-md-6 col-lg-3">
        <form>
          <div class="form-group">
            <label for="usr"></label>
          </div>
        </form>
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

        <div class="row">
        </div>
      </div>
    </div>

    <div class="btn-group-vertical">
      <div class = "btn-group">
        <a href="{{URL::to('mail/create')}}"type="button" class="btn btn-lg btn-success glyphicon glyphicon-pencil">Redactar</a>
      </div> 
      <div class="btn-group"><a href="{{URL::to('enviados')}}"  id ="btn2"class = " glyphicon glyphicon-envelope btn btn-lg btn-default">Enviados</a>  
      </div>
      <div class="btn-group"><a href="{{URL::to('bandeja')}}"  id ="btn2"class = " glyphicon glyphicon-envelope btn btn-lg btn-default">Salida</a>  
      </div>
            <div class="btn-group"><a href="{{URL::to('borrador')}}"  id ="btn2"class = " glyphicon glyphicon-envelope btn btn-lg btn-default">Borrador</a>  
      </div>
    </div>
  </div>
</div>
</div>
</form>
<div class ="container col-xs-8">
  @if(count($errors)>0)
  <div class = "alert alert-danger">
    <ul>
      @foreach($errors->all()as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <form action ='/mail' method="POST">
    {!! csrf_field() !!}
    <div class="form-group">
      <label for="exampleInputEmail1 ">Para</label>
      {!!Form::email('destino',null,['class'=>'form-control','placeholder'=>'example@gmail.com,example2@hotmail.com'])!!}
    </div>
    <div class="form-group">
      <label for="example">Asunto</label>
      {!!Form::text('asunto',null,['class'=>'form-control','placeholder'=>'Subject'])!!}
    </div>
    <div class="form-group">
      <label for="example">Mensaje</label>
      {!!Form::textarea ('mensaje',null,['class'=>'form-control','placeholder'=>'Write the message here'])!!}
    </div>
    <div style="text-align:right">
      <button type="submit" class=" glyphicon glyphicon-floppy-save btn btn-success ">Guardar</button>
      {!!Form::close()!!}
    </div>

  </div>
</div>
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>