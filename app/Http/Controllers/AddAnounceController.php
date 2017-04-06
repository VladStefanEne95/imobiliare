<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Input;


class AddAnounceController extends Controller
{

   public function html_email($request, $id){
     $data = array(
        'name' => $request->nume,
        'id' => $id
    );

    Mail::send('emails.welcome', $data, function ($message) use ($request){

        $message->from('emevladstefan95@gmail.com', 'Publicare anunt');

        $message->to($request->email)->subject('Publicare anunt');
    });

    echo "Va rugam confirmati emailul";
      
   }

  public function addAnounce(Request $request)
  {
     \DB::table('anunturi')->insert(
       ['titlu' => 'ToDo',
       'pret' => $request->pret,
       'structura_de_rezistenta' => null, // to do in optiuni suplimentare
       'nr_camere' => $request->cam,
       'suprafata_utila' => $request->suprafataUtila,
      'suprafata_utila_totala' => null, // to do in optiuni suplimentare
      'suprafata_construita' => null,
       'regim_inaltime' =>  null,
       'confort' => $request->confort,
       'etaje' => $request->etaj,
       'tip_imobil' => null,
       'locuri_parcare' => null,
       'nr_garaje' => null,
       'nr_bai' => $request->nrBai,
       'nr_balcoane' => null,
       'nr_bucatarii' => null,
       'compartimentare' => $request->compartimentare,
       'an_constructie' => null,
       'oras' => 'Bucuresti', // de facut decodificarea
       'zona' => 'Carol',
       'tip_bloc' => null,
       'telefon' => $request->telefon,
       'status' => 0,
       'descriere' => $request->descriere,
       'adresa' => $request->adresa,
       'nume' => $request->nume,
       'email' => $request->email,
       'user_id' => \Auth::user()->id,
       'created_at' => new \DateTime(),
       'updated_at' => new \DateTime()
       ]); 
     



  }

  public function display(Request $request)
  {
    $input = $request->all();
    $result = array();

   //adaug in baza de date
    $this->addAnounce($request);
   
   //trimit mail  
  

    
 
    $this->html_email($request,\DB::getPdo()->lastInsertId());
    //echo $request->email;

    //return view("not-logged");
  }
}
