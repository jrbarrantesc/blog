<!DOCTYPE html>
<html lang="es">
<head>
  <title>Borrador</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="\bootstrap\css\bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<header>
  <div class="container">
    <h1><b><i> Bandeja de Borrador</i></b></h1>
    <br>
  </div>
 <a href="{{URL::route('logout')}}"><button style="right"class = " glyphicon glyphicon-user btn btn-xs btn-danger">Cerrar Sesion </button></a>


</div>
</header>

<form name ="crear">
  <div class = "container col-lg-2">
    <div class="btn btn-group-vertical">
      <div class="btn-group">

        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button id =  "closemodal" type="button" class=" glyphicon glyphicon-minus-sign close btn-danger" data-dismiss="modal"></button>
                <div class="form-group">
                  <label  for="usr" >Destinatario: </label>
                  <input  name="email" type="email" class="form-control">
                </div>
                <div class="form-group">
                  <label    for="pwd">asunto:</label>
                  <input  id = "asunto" type="text" class="form-control" id="Asunto" >
                </div>
                <div class="form-group">
                  <label for="comment">Mensaje:</label>
                  <textarea id = "contenido"class="form-control" rows="6" id="comment" style="resize:none" id = "Contenido"></textarea>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" value ="enviar" class=" glyphicon glyphicon-floppy-save btn btn-success"> Guardar</button>
                <button type="button" id ="eliminar" class = " glyphicon glyphicon-user btn btn-xs btn-danger"> Eliminar</button></div>
              </div>
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
  </form>
  <div class ="container col-xs-8">
   <table class=" table table-responsive  table-hover"id="tablacargar"class="col-lg-12">
    <thead >
      <tr>
       <th>Destinatario</th>
       <th>Asunto</th>
       <th>Mensaje</th>
       <th>Fecha</th>
     </tr>
   </thead>
   <tbody >
    @foreach ($mails as $mail)
    <tr>
      <td>{{$mail->destino}}</td>
      <td>{{$mail->asunto}}</td>
      <td>{{$mail->mensaje}}</td>
      <td>{{$mail->fecha}}</td>
      <td><a class="btn btn-info glyphicon glyphicon-edit " href="{{URL::route('mail.show',$mail->id)}}" type="button"></a></td>
      <td>
        {!!  Form::open(['route'=>['mail.destroy' ,$mail->id],'method'=>'delete'])!!}
        <button type="submit" class="btn btn-danger glyphicon glyphicon-trash"></button>
        <td><a class="btn btn-info" href="{{URL::route('mail.show',$mail->id)}}" type="button">Ver</a></td>
        {!!Form::close()!!}
      </td>
    </tr>


    @endforeach

  </tbody>
</table>
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js" type="text/javascript"></script>
</body>
</html>
