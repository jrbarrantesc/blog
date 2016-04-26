<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;

class sentController extends Controller
{
    //
	public function enviar(){

		$mails = DB::select('select * from mails where estado = 1');

		return view('enviados', ['mails' => $mails]);

return view('enviados');
	}

}	