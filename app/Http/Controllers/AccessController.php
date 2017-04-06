<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessController extends Controller
{
    public function display()
    {
      if(\Auth::check())
        return view('adauga-anunt');
      else 
        //return view('not-logged');
        return view ('adauga-anunt');
      
    }
}
