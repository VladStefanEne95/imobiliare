<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilterControler extends Controller
{

    public function display_lower($var)
    {
        $users = \DB::table('anunturi')->get();
        $arr = array();

        foreach ($users as $user) {
           if ($user->pret <= $var) {
                $arr[] = $user;
            }
        }

        return view('lista_anunturi',['users'=>$arr]);
    }

    public function display_bigger( $var)
    {
        $users = \DB::table('anunturi')->get();
        $arr = array();


        foreach ($users as $user) {
            if ($user->pret >= $var) {
                $arr[] = $user;
            }
        }
        return view('lista_anunturi',['users'=>$arr]);
    }

    public function display_equal($var)
    {
        $users = \DB::table('anunturi')->get();
        $arr = array();

        foreach ($users as $user) {
            if ($user->nr_camere == $var) {
                $arr[] = $user;
            }
        }
        return view('lista_anunturi',['users'=>$arr]);
    }

    public function display(Request $request )
    {

        $filtru = $request->input('filtru');
        $valoare = $request->input('valoare');

        if (isset ($filtru) == FALSE)
            return view('lista_anunturi');

        if ($filtru == 'lower')
           return $this->display_lower($valoare);
        else  if ($filtru == 'bigger')
            return $this->display_bigger($valoare);
         else if ($filtru == 'equal')
            return $this->display_equal($valoare);

    }
}
