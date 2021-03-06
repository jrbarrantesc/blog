<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('/auth/login');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

	Route::get('home',['uses'=>'home@index','as'=>'home']);
	Route::get('enviados',['uses'=>'sentController@enviar','as'=>'enviados']);


    //
    // Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('logout', ['uses'=>'Auth\AuthController@logout','as'=>'logout']);
Route::post('controlUsuarios', 'controlUsuario\@login');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('mail/Confirmacion/{remember_token}', 'Mailcontroller@Confirmacion');



// Bandeja routes...nombre de la vista nombre del controlador y el metodo

Route::get('bandeja', 'homeController@index');
Route::resource('mail','Mailcontroller');  
Route::get('borrador','borradorController@borrar');
});
