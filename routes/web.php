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
Route::get('/','indexController@index');
Route::get('/carrer-assessment','TestController@index');
Route::get('/carrer-assessment/{assmentlink}','TestController@loadTest');
Route::post('/carrer-assement-calculation','TestController@calculateScore');
Route::get('/carrer-assessment-report', 'ReportController@index');
Route::get('/carer-report',function(){
	return view('repo');
});
Route::get('/testpdf','ReportController@pdf');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
