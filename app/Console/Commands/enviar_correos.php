<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use Mail;
use App\email;
//Hay que definir el nombre con el que va ha quedar
use DB;
use Auth;
class enviar_correos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'enviar_correos';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command send the mails with status=0';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $emails = email::where('estado', '=', '0')->get();
        foreach ($emails  as $mail ) {
        $mailArray =array('id'=> $mail->id,'mail'=> $mail->destino,'subject'=> $mail->asunto,
        'content'=> $mail->mensaje,'from'=>'hgm1284@gmail.com');
        //Separate emails recorded in the field receiver
        Mail::send('emails.correo', $mailArray, function ($message) use
        ($mailArray) {
        $message->subject($mailArray['subject']);
        $message->from($mailArray['from']);
        $message->to(explode(',',$mailArray['mail']));
        });
        DB::table('mails')
        ->where('id', $mailArray['id'])
        ->update(['estado' => 1]);
        sleep(5);
      }

    }

  }