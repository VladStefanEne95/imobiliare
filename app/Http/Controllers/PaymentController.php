<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
   public function html_email($email){
     $data = array(
        'name' => 'name'
       
    );

    Mail::send('emails.confirmare', $data, function ($message) use ($email){

        $message->from('emevladstefan95@gmail.com', 'Anunt publicat');
        $message->to($email)->subject('Anunt publicat');
    });

      
   }
    public function display($id)
    {
      //apelat functia de verificare a datelor
      $result = \DB::table('anunturi')->where('id',$id)->get();
       
    
      return view ('plata',['date'=>$result[0]]);
    }

    public function check($id)
    {
      //verificare plata
      //daca e  ok , updatez statusul
      $email = \DB::table('anunturi')->where('id', $id)->value('email');
     
      
      $this->html_email( $email);
      return view ('anunt-succes', ['id' => $id]);
    }
}
