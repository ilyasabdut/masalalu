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










Route::get('auth/login', 'PublicController@showLogin');
Route::post('auth/login', 'Auth\LoginController@authenticate');

Route::group(['middleware' => ['auth']], function() {
	Route::get('/', 'ImportExportController@importexport');
  	Route::get('/exportmenu', 'ImportExportController@menuExport');
    Route::post('/importmenu', 'ImportExportController@menuImport');


	Route::get('/logout', function(){
        Auth::logout();
        return redirect('/auth/login');
	});

});


