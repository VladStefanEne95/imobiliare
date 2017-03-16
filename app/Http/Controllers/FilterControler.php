<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilterControler extends Controller
{

    public function universal_filter($filtru , $val)
    {
        if ($filtru == 'all')
            $users = \DB::table('anunturi')->get();
        else if ($filtru == 'c1')
            $users = \DB::table('anunturi')->get()->where('nr_camere',1);
        else if ($filtru == 'c2')
            $users = \DB::table('anunturi')->get()->where('nr_camere',2);
        else if ($filtru == 'c3')
            $users = \DB::table('anunturi')->get()->where('nr_camere',3);
        else if ($filtru == 'c4')
            $users = \DB::table('anunturi')->get()->where('nr_camere',4);
        else
            $users = \DB::table('anunturi')->get();



        return view('lista_anunturi')->with(['users'=>$users,'link'=>$filtru]);
    }

    public function display(Request $request )
    {

        $filtru = $request->input('filtru');
        $valoare = $request->input('valoare');

        if (isset ($filtru) == FALSE)
            return view('lista_anunturi');

           return $this->universal_filter($filtru,$valoare);
    }
}
