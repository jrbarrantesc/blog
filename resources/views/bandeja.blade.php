<!DOCTYPE html>
<html lang="es">
<head>
  <title>Salida</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="\bootstrap\css\bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  </head>
<header>
  <body>
 <a href="{{URL::route('logout')}}"><button  id ="btn"class = " glyphicon glyphicon-user btn btn-xs btn-danger">Cerrar Sesion </button></a>

        <div class="container">
        <h1><b><i> Bandeja de Salida</i></b></h1>
          <div class="form-group col-sm-3">
            <label for="usr"></label>
            <input type="text" class="form-control input" placeholder="Buscar Correo" id="usr">
 <br>
          </div> 


    </div>
  </header>

  <form name ="crear">
    <br>
    <a href="{{URL::to('mail/create')}}"type="button" class="btn btn-lg btn-success glyphicon glyphicon-pencil" style ="left:30px"> Redactar</a>
<br>
    <br>
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
        <div class="btn-group"><button id ="btn1"class = " glyphicon glyphicon-envelope btn btn-lg btn-default">  Enviados </button>
        </div>
        <div class="btn-group"><a href="{{URL::to('bandeja')}}"></a><button type = "button" id ="btn2"class = " glyphicon glyphicon-envelope btn btn-lg btn-default"> Salida </button>
        </div>
        <div class="btn-group"><button  id ="btn2"class = " glyphicon glyphicon-envelope btn btn-lg btn-default">  Borrador </button>
        </div>
      </div>
    </div>
  </form>
  <div class ="container col-xs-8">
   <table class=" table table-responsive"id="tablacargar"class="col-lg-12">
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
      <td><a class="btn btn-info" href="{{URL::route('mail.edit',$mail->id)}}" type="button">Editar</a></td>
   <td>

{!!  Form::open(['route'=>['mail.destroy' ,$mail->id],'method'=>'delete'])!!}
<button type="submit" class="btn btn-danger">Eliminar</button>
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
