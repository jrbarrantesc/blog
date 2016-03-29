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
	return view('mail/edit',compact('email'));

}

public function destroy($id)
{

	$email=Mail::find($id);
	$email->delete();
	return Redirect::to('home')->with('status', '¡Mensaje eliminado con éxito!');

}

public function update(Request $request, $id)
{

	$email=Mail::find($id);
	$email = $request->input('destino');
	$email = $request->input('asunto');
    $email = $request->input('mensaje');
    $email->save();
	return Redirect::to('home')->with('status', '¡Mensaje eliminado con éxito!');

}

}