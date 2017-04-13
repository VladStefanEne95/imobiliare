<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditAnounceController extends Controller
{
  public function editFields($id, Request $request)
  {

     // $result = array();
     //    if ( isset ($request->structuraRezistenta))
     //        array_push($result, ['structura_de_rezistenta','=', $request->structuraRezistenta]);
       
     if (isset($request->structuraRezistenta) ) 
      \DB::table('anunturi')->where('id', '=', $id)->update(['structura_de_rezistenta' => $request->structuraRezistenta]);

    if (isset($request->suprafata_utila_totala)) 
      \DB::table('anunturi')->where('id', '=', $id)->update(['suprafata_utila_totala' => $request->suprafata_utila_totala]);

    if (isset($request->suprafata_construita)) 
      \DB::table('anunturi')->where('id', '=', $id)->update(['suprafata_construita' => $request->suprafata_construita]);

    if (isset($request->locuri_parcare) && is_numeric($request->locuri_parcare)) 
      \DB::table('anunturi')->where('id', '=', $id)->update(['locuri_parcare' => $request->locuri_parcare]);

    if (isset($request->nr_garaje) && is_numeric($request->nr_garaje)) 
      \DB::table('anunturi')->where('id', '=', $id)->update(['nr_garaje' => $request->nr_garaje]);

    if (isset($request->nr_balcoane) && is_numeric($request->nr_balcoane)) 
      \DB::table('anunturi')->where('id', '=', $id)->update(['nr_balcoane' => $request->nr_balcoane]);

    if (isset($request->nr_bucatarii) && is_numeric($request->nr_bucatarii))   
      \DB::table('anunturi')->where('id', '=', $id)->update(['nr_bucatarii' => $request->nr_bucatarii]);

    if (isset($request->an_constructie)) 
      \DB::table('anunturi')->where('id', '=', $id)->update(['an_constructie' => $request->an_constructie]);

    if (isset($request->tip_bloc)) 
      \DB::table('anunturi')->where('id', '=', $id)->update(['tip_bloc' => $request->tip_bloc]);
    
      return view ('anunt-succes');
  }
    public function addFields($id)
    {
       return view ('edit-anounce-apartament',['date'=>$id]);
    }
}
