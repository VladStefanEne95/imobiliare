<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
   public function html_email($nume, $email){
     $data = array(
        'name' => $nume
       
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
      \DB::table('anunturi')->where('id', $id)->update(['status' => '1']);
      $email = \DB::table('anunturi')->where('id', $id)->value('email');
      $nume = \DB::table('anunturi')->where('id', $id)->value('nume');
      
      $this->html_email($nume, $email);
      return view ('anunt-succes', ['id' => $id]);
    }
}
