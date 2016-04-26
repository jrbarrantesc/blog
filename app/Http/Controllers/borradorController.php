<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;

class borradorController extends Controller
{

/*
Se crea una función sent() dentro del controlador SentController,
la cual se encarda de seleccionar todos los correos de la DB
y pasarlos a la vista sent.
*/
public function borrar()
{
$mails = DB::select('select * from mails where estado = 2');
return view('borrador', ['mails' => $mails]);
}

}