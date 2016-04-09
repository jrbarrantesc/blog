<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Http\Requests;
use App\Mail;
use Session;
use Illuminate\Routing\Controller;

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
	return Redirect::to('bandeja')->with('status', '¡Mensaje eliminado con éxito!');

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
public function sendMail()
    {
    	Mail::send('emails.welcome', ['key' => 'value'], function($message)
{
    $message->to('foo@example.com', 'John Smith')->subject('Welcome!');
});
            
    }

}
