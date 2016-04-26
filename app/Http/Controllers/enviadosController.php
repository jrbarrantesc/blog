<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;

class enviadosController extends Controller
{

/*
Se crea una función sent() dentro del controlador SentController,
la cual se encarda de seleccionar todos los correos de la DB
y pasarlos a la vista sent.
*/
public function sent()
{
$mails = DB::select('select * from mails where estado = 1');
return view('mail/sent', ['mails' => $mails]);
}

}