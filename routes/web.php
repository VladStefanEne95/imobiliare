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
    $date = \DB::table('anunturi')->get()->where('id',$anunt)->first();
    return view('anunt',['anunt'=>$date]);
});



Route::get('/adauga-anunt', 'AccessController@display');

Route::get('/superadmin-edit', 'AdminController@display');
Route::post('/utilizator-adaugat', 'AdminController@addUser');
Route::post('/utilizator-sters', 'AdminController@delUser');
Route::post('/listeaza-utilizatorii', 'AdminController@listUsers');
Route::post('/modifica-utilizator', 'AdminController@modUsers');

Route::get('/admin-edit', 'AdminController@show');
Route::post('/anunt-sters', 'AdminController@delAn');
Route::post('/anunt-modificat', 'AdminController@modAn');

Route::post('/anunt-adaugat', 'AddAnounceController@display');

Route::get('/price/filter', 'FilterControler@display');

Route::get('/bs', function () {
    return view('test_bs');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/plata/{id}', 'PaymentController@display');
Route::get('/vp/{id}', 'PaymentController@check');
Route::get('/edit/{id}', 'EditAnounceController@addFields');
Route::post('/anunt-editat/{id}', 'EditAnounceController@editFields');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('sendemail',  'MailController@html_email');

Route::post('/upload', 'AddAnounceController@upload');



    



