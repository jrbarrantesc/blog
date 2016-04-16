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
/*    class enviar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('model_correo');
        $this->load->library('session');
    }*/
    function send() {

        $data = $this->Mail->getEmails();

        include "class.phpmailer.php";
        include "class.smtp.php";
        foreach ($data as $valor) {

            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.mandrillapp.com',
                'smtp_port' => 587,
                'smtp_user' => 'AlexanderBarrantes10@gmail.com', // change it to yours
                'smtp_pass' => 'NlXJVAqPJPDrEYj-e-jgjQ', // change it to yours
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE,
            );

            $message = '';
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('alexanderbarrantes10@gmail.com'); // change it to yours
            $this->email->to($valor['destinatario']);
            //$mail->AddAddress($row['email'], $row['name']);// change it to yours
            $this->email->subject($valor['asunto']);
            $this->email->message($valor['mensaje']);
            if ($this->email->send()) {
                $this->model_correo->update_emailStatus($valor['id']);

            } else {
                show_error($this->email->print_debugger());
            }

            $urln = base_url() . "email/bandeja";
            redirect($urln);
            $this->email->insert($data);

        }

    }

public function getEmails() {
        $this->db->where("estado", "Pendiente");
        $this->db->select("*");
        $this->db->from('emails');
        $query = $this->db->get();
        return ($query->result_array());
    }

    public function update_emailStatus($id) {
        $this->db->where("id", $id);
        $this->db->set("estado", "Enviado");
        $this->db->update("emails");
    }

}
