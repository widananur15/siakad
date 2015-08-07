<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

    Route::get('/' , 'HomeController@showformlogin');
    Route::post('/autentication' , 'AutenticationController@autentication');



Route::group(['before' => 'myauth'] , function() {

        //dashboard
    Route::get('/dashboard','HomeController@index');

    //section siswa
    Route::get('/student/management' , 'SiswaController@index');
    Route::get('/add/student' , 'SiswaController@create');

        //mapel
    Route::get('/mapel','MapelController@index');

    Route::resource('mapel','MapelController');

    Route::post('/mapel/{mapel_id}/update','MapelController@update');

    Route::get('/add','MapelController@create');

    Route::post('mapel/add/new','MapelController@store');


        //jabatan
    Route::get('/jabatan','JabatanController@index');

    Route::get('/jabatan/{jabatan_id}/edit','JabatanController@edit');

    Route::post('/jabatan/{jabatan_id}/update','JabatanController@update');

    Route::get('/add/jabatan','JabatanController@create');

    Route::post('/new','JabatanController@store');

        //guru
    Route::get('guru','GuruController@index');

    Route::get('/guru/{guru_id}/edit','GuruController@edit');

    Route::post('/guru/{guru_id}/update','GuruController@update');

    Route::get('/add/guru','GuruController@create');

    Route::post('/new.guru','GuruController@store');



        //logout
    Route::get('/logout' , 'AutenticationController@logout');



    ///

});