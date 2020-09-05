<?php

header("Access-Control-Allow-Origin: *");

header("Content-Type: application/json; charset=UTF-8");

header("Access-Control-Allow-Methods: POST, GET, PUT, PATCH, DELETE");

header("Access-Control-Max-Age: 3600");

header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// MedicalAppointments
Route::auth();
Route::get('/', array('as' => 'dashboard', 'middleware' => 'auth', 'uses' => 'DashboardController@index'));

Route::get('/getImage/{filename}', array('as' => 'getImage', 'uses' => 'Controller@getImage'));
Route::get('/doctors', array('as' => 'doctors', 'uses' => 'DoctorController@index'));
Route::get('/viewdoctor/{id}', array('as' => 'viewdoctor', 'uses' => 'DoctorController@view'));
Route::post('/savedoctor', array('as' => 'savedoctor', 'middleware' => 'auth', 'uses' => 'DoctorController@save'));
Route::get('/patients', array('as' => 'patients', 'uses' => 'PatientController@index'));
Route::post('/savepatient', array('as' => 'savepatient', 'middleware' => 'auth', 'uses' => 'PatientController@save'));
Route::get('/viewpatient/{id}', array('as' => 'viewpatient', 'uses' => 'PatientController@view'));
Route::get('/rooms', array('as' => 'rooms', 'uses' => 'RoomController@index'));
Route::post('/saveroom', array('as' => 'saveroom', 'middleware' => 'auth', 'uses' => 'RoomController@save'));
Route::get('/viewroom/{id}', array('as' => 'viewroom', 'uses' => 'RoomController@view'));
Route::get('/specialtys', array('as' => 'specialtys', 'uses' => 'SpecialtyController@index'));
Route::post('/savespecialty', array('as' => 'savespecialty', 'middleware' => 'auth', 'uses' => 'SpecialtyController@save'));
Route::get('/viewspecialty/{id}', array('as' => 'viewspecialty', 'uses' => 'SpecialtyController@view'));
Route::get('/companys', array('as' => 'companys', 'uses' => 'CompanyController@index'));
Route::get('/viewcompany/{id}', array('as' => 'viewcompany', 'uses' => 'CompanyController@view'));
Route::post('/savecompany', array('as' => 'savecompany', 'middleware' => 'auth', 'uses' => 'CompanyController@save'));


Route::get('/searchappointment/{search?}/{filter?}', array('as' => 'searchappointment', 'middleware' => 'auth', 'uses' => 'AppointmentController@search'));
Route::post('/appointments', array('as' => 'appointments', 'middleware' => 'auth', 'uses' => 'AppointmentController@index'));
Route::get('/newappointment', array('as' => 'newappointment', 'middleware' => 'auth', 'uses' => 'AppointmentController@new'));
Route::post('/editappointment', array('as' => 'editappointment', 'middleware' => 'auth', 'uses' => 'AppointmentController@edit'));
Route::post('/saveappointment', array('as' => 'saveappointment', 'middleware' => 'auth', 'uses' => 'AppointmentController@save'));
Route::get('/viewappointment', array('as' => 'viewappointment', 'middleware' => 'auth', 'uses' => 'AppointmentController@view'));
Route::post('/deleteappointment', array('as' => 'deleteappointment', 'middleware' => 'auth', 'uses' => 'AppointmentController@delete'));


Route::get('/reportpatient', array('as' => 'reportpatient', 'middleware' => 'auth', 'uses' => 'ReportController@index'));
Route::get('/reportdoctor', array('as' => 'reportdoctor', 'middleware' => 'auth', 'uses' => 'ReportController@index'));
Route::get('/reportroom', array('as' => 'reportroom', 'middleware' => 'auth', 'uses' => 'ReportController@index'));


// WepApp like youtube videos Web app
Route::get('/videos', array('as' => 'videos', 'uses' => 'HomeController@index'));
Route::get('/crear-video', array('as' => 'createVideo', 'middleware' => 'auth', 'uses' => 'VideoController@createVideo'));
Route::post('/guardar-video', array('as' => 'saveVideo', 'middleware' => 'auth', 'uses' => 'VideoController@saveVideo'));
Route::get('/miniatura/{filename}', array('as' => 'imageVideo', 'uses' => 'VideoController@getImage'));

Route::get('/video/{id}', array('as' => 'detailVideo', 'uses' => 'VideoController@getVideoDetail'));
Route::get('/video-file/{filename}', array('as' => 'fileVideo', 'uses' => 'VideoController@getVideo'));
Route::get('/delete-video/{id}', array('as' => 'videoDelete', 'middleware' => 'auth', 'uses' => 'VideoController@delete'));
Route::get('/editar-video/{id}', array('as' => 'editVideo', 'middleware' => 'auth', 'uses' => 'VideoController@edit'));
Route::post('/update-video/{id}', array('as' => 'updateVideo', 'middleware' => 'auth', 'uses' => 'VideoController@update'));
Route::get('/buscar/{search?}/{filter?}', ['as'  => 'videoSearch', 'uses'  => 'VideoController@search']);

Route::post('/comment', array('as' => 'comment', 'middleware' => 'auth', 'uses' => 'CommentController@store'));
Route::get('/delete-comment/{id}', array('as' => 'commentDelete', 'middleware' => 'auth', 'uses' => 'CommentController@delete'));


Route::get('/users', array('as' => 'users', 'uses' => 'UserController@index'));
Route::post('/saveuser', array('as' => 'saveuser', 'middleware' => 'auth', 'uses' => 'UserController@save'));
Route::post('/createuser', array('as' => 'createuser', 'middleware' => 'auth', 'uses' => 'UserController@create'));
Route::get('/viewuser/{id?}', array('as' => 'viewuser', 'uses' => 'UserController@view'));
Route::get('/canal/{id}', array('as' => 'channel', 'uses' => 'UserController@channel'));
