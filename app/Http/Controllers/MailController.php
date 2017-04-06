<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
 public function html_email(){
     $data = array(
        'name' => "Learning Laravel",
    );

    Mail::send('emails.welcome', $data, function ($message) {

        $message->from('emevladstefa95@gmail.com', 'Publicare anunt');

        $message->to('emevladstefan95@gmail.com')->subject('Publicare anunt');

    });

      echo "HTML Email Sent. Check your inbox.";
   }
}