<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Http\Requests;
use App\Mail;
use Session;
use Illuminate\Routing\Controller;
use email;
use DB;

class MailController extends Controller
{

  public function edit($id)
  {
   $email=Mail::findOrFail($id);
   return view('edit',compact('email'));

 }

 public function destroy($id)
 {

   $email=Mail::find($id);
   $email->delete();
   return Redirect::to('bandeja')->with('status', '¡Mensaje eliminado con éxito!');

 }

 public function update(Request $request, $id)
 {

   $email=Mail::find($id);	
   $email->destino=$request->destino;
   $email->asunto=$request->asunto;
   $email->mensaje=$request->mensaje;
   $email->save();
   return Redirect::to('bandeja')->with('status', '¡!');

 }
 public function create()
 {
  return view('redactar');
}

public function show($id)
{ 
}

public function store(Request $request)
{
  $mail = new Mail;
  $mail->destino=$request->destino;
  $mail->asunto=$request->asunto;
  $mail->mensaje=$request->mensaje;
  $mail->save();
  return Redirect::to('bandeja')->with('status', '¡Mensaje Enviado!');
}

/*public function getEmails() {
    $this->db->where("estado", "Pendiente");
    $this->db->select("*");
    $this->db->from('emails');
    $query = $this->db->get();
    return ($query->result_array());
  }*/


/*public function update_emailStatus($id) {
    $this->db->where("id", $id);
    $this->db->set("estado", "Enviado");
    $this->db->update("emails");
  }*/

  public function Confirmacion($remenber_token) {


    $user = DB::table('users')
    ->where('token', '=',$remenber_token)
    ->get();

    if ((empty($user))) {
      return Redirect::to('/auth/login')->with('status', '¡Lo siento mucho, no ha verificado su cuenta!');
    }
    else
    {
      DB::table('users')
      ->where('token', $remenber_token)
      ->update(['status' => 1]);
      return Redirect::to('/auth/login')->with('status', '¡Bienvenido!');


    }
  }

   public function verificarRegistro($status) {


    $user = DB::table('users')
    ->where('status', '=',$status)
    ->get();

    if ($status == 0) {
      return Redirect::to('/auth/login')->with('status', '¡Lo siento mucho, no ha verificado su cuenta!');
    }
    else
    {
     
      return Redirect::to('bandeja')->with('status', '¡Bienvenido!');


    }
  }


}


