<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function addUser(Request $request)
  {
    // \DB::table('users')->insert(
    //    ['name' => $request->nume,
    //    'email' => $request->email,
    //    'password' => $request->password1, 
    //    'created_at' => new \DateTime(),
    //    'updated_at' => new \DateTime()
    //    ]); 
 return view('admin');
  } 
  public function delUser(Request $request)
  {
    // if (isset($request->nume)) 
    //  \DB::table('users')->where('name', '=', $request->nume)->delete();
    // else if (isset($request->email)) 
    //  \DB::table('users')->where('email', '=', $request->email)->delete();
  
      return view('admin');
  }

  public function delAn(Request $request)
  {
     
      \DB::table('anunturi')->where('id', '=', $request->id_an)->delete();
  
      return view('admin-anunt');
  }

   public function modUsers(Request $request)
  {
     if (isset($request->email)) 
      \DB::table('users')->where('name', '=', $request->nume)->update(['email' => $request->email]);;
     if (isset($request->password)) 
      \DB::table('users')->where('name', '=', $request->nume)->update(['password' => $request->password]);;
  
      return view('admin');
  }
     public function modAn(Request $request)
  {
 
      \DB::table('anunturi')->where('id', '=', $request->id_an)->update([$request->Field => $request->value]);;
  
      return view('admin-anunt');
  }

    public function listUsers(Request $request)
  { 
      $users = \DB::table('users')->get();
  
      return view('admin')->with(['users'=>$users]);
  }

    public function display()
    {
      return view('admin');
    }
      public function show()
    {
      return view('admin-anunt');
    }
}
