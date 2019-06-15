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
Route::get('/dashboard','indexController@index');
//Route::get('/','indexController@index');
Route::get('/carrer-assessment','TestController@index');
Route::get('/carrer-assessment/{assmentlink}','TestController@loadTest');
Route::post('/carrer-assement-calculation','TestController@calculateScore');
Route::get('/carrer-assessment-report', 'ReportController@index');
Route::get('/carer-report',function(){
	return view('repo');
});
Route::get('/testpdf','ReportController@pdf');
// landing page start
Route::get('/','landingpage\IndexController@index');
Route::get('/careerlibrary/{careerid}','landingpage\IndexController@careerLib');
Route::get('/about-us','landingpage\AboutusController@index');
Route::get('/contact-us','landingpage\ContactusController@index');
// End  landing page start
// start login and registration section
Route::get('/Login','authpage\LoginController@index');
Route::get('/Register','authpage\RegisterController@index');

//  End start login and registration section
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/userprofile','UserProfileController@userprofile_getdata');
Route::get('/userprofile-getdata','UserProfileController@userprofile_getdata');
Route::post('/updateUserprofile','UserProfileController@updateUserprofile');
Route::post('/changePassword','UserProfileController@changePassword');

// userprofile section
Route::post('userEducation' ,'UserProfileController@education');
// End userprofile section


// refer section
Route::get('refer' ,'ReferController@index');
// End refer section

// home career buddy menu section
// Route::get('/','indexController@careerbuddy_menu');
// End home career buddy menu section