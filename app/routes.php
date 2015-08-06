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

        //logout
    Route::get('/logout' , 'AutenticationController@logout');

    //

});