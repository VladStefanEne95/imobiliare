<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
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
      \DB::table('anunturi')->where('id', $id)->update(['status' => 1]);
      return view ('anunt-succes', ['id' => $id]);
    }
}
