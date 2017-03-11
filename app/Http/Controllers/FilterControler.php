<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilterControler extends Controller
{

    public function universal_filter($filtru , $val)
    {
        if ($filtru == 'lower')
            $users = \DB::table('anunturi')->get()->where('pret','<',$val);
        else if ($filtru == 'upper')
            $users = \DB::table('anunturi')->get()->where('pret','>',$val);
        else if ($filtru == 'equal')
            $users = \DB::table('anunturi')->get()->where('nr_camere',$val);

        return view('lista_anunturi',['users'=>$users]);
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
