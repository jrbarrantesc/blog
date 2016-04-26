<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class email extends Model
{
    protected $table = 'mails';
	protected $fillable = [ 'destino', 'asunto', 'fecha', 'mensaje', 'status','remenber_token'];
	public $timestamps = false;

}