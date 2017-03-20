<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/anunt/{anunt}', function ($anunt) {
    $date = \DB::table('anunturi')->get()->where('titlu','vanzare-apartament')->first();

    return view('anunt',['anunt'=>$date]);
});

Route::get('/adauga-anunt', function () {
    return view('adauga-anunt');
});


Route::get('/price/filter', 'FilterControler@display');

Route::get('/bs', function () {
    return view('test_bs');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
