<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;

class homeController extends Controller
{
    //
    public function index(){

    	$mails = DB::select('select * from mails');

        return view('home', ['mails' => $mails]);


    }

}	