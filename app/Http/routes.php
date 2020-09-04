<?php

// MedicalAppointments
Route::auth();
Route::get('/', array('as' => 'dashboard', 'middleware' => 'auth', 'uses' => 'DashboardController@index'));
Route::get('/searchappointment/{search?}/{filter?}', array('as' => 'searchappointment', 'middleware' => 'auth', 'uses' => 'AppointmentController@search'));

Route::post('/appointments', array('as' => 'appointments', 'middleware' => 'auth', 'uses' => 'AppointmentController@index'));
Route::get('/newappointment', array('as' => 'newappointment', 'middleware' => 'auth', 'uses' => 'AppointmentController@new'));
Route::post('/editappointment', array('as' => 'editappointment', 'middleware' => 'auth', 'uses' => 'AppointmentController@edit'));
Route::post('/saveappointment', array('as' => 'saveappointment', 'middleware' => 'auth', 'uses' => 'AppointmentController@save'));
Route::get('/viewappointment', array('as' => 'viewappointment', 'middleware' => 'auth', 'uses' => 'AppointmentController@view'));
Route::post('/deleteappointment', array('as' => 'deleteappointment', 'middleware' => 'auth', 'uses' => 'AppointmentController@delete'));

Route::post('/doctors', array('as' => 'doctors', 'middleware' => 'auth', 'uses' => 'DoctorController@index'));
Route::get('/newdoctor', array('as' => 'newdoctor', 'middleware' => 'auth', 'uses' => 'DoctorController@new'));
Route::post('/editdoctor', array('as' => 'editdoctor', 'middleware' => 'auth', 'uses' => 'DoctorController@edit'));
Route::post('/savedoctor', array('as' => 'savedoctor', 'middleware' => 'auth', 'uses' => 'DoctorController@save'));
Route::get('/viewdoctor', array('as' => 'viewdoctor', 'middleware' => 'auth', 'uses' => 'DoctorController@view'));
Route::post('/deletedoctor', array('as' => 'deletedoctor', 'middleware' => 'auth', 'uses' => 'DoctorController@delete'));

Route::get('/patients', array('as' => 'patients', 'uses' => 'PatientController@index'));
Route::get('/newpatient', array('as' => 'newpatient', 'middleware' => 'auth', 'uses' => 'PatientController@new'));
Route::post('/editpatient', array('as' => 'editpatient', 'middleware' => 'auth', 'uses' => 'PatientController@edit'));
Route::post('/savepatient', array('as' => 'savepatient', 'middleware' => 'auth', 'uses' => 'PatientController@save'));
Route::get('/viewpatient', array('as' => 'viewpatient', 'middleware' => 'auth', 'uses' => 'PatientController@view'));
Route::post('/deletepatient', array('as' => 'deletepatient', 'middleware' => 'auth', 'uses' => 'PatientController@delete'));


Route::get('/settings/{id?}', array('as' => 'settings', 'middleware' => 'auth', 'uses' => 'SettingController@index'));



Route::post('/rooms', array('as' => 'rooms', 'middleware' => 'auth', 'uses' => 'SettingController@index'));
Route::get('/newroom', array('as' => 'newroom', 'middleware' => 'auth', 'uses' => 'SettingController@new'));
Route::post('/editroom', array('as' => 'editroom', 'middleware' => 'auth', 'uses' => 'SettingController@edit'));
Route::post('/saveroom', array('as' => 'saveroom', 'middleware' => 'auth', 'uses' => 'SettingController@save'));
Route::get('/viewroom', array('as' => 'viewroom', 'middleware' => 'auth', 'uses' => 'SettingController@view'));
Route::post('/deleteroom', array('as' => 'deleteroom', 'middleware' => 'auth', 'uses' => 'SettingController@delete'));

Route::post('/specialties', array('as' => 'specialtys', 'middleware' => 'auth', 'uses' => 'SpecialtyController@index'));
Route::get('/newspecialty', array('as' => 'newspecialty', 'middleware' => 'auth', 'uses' => 'SpecialtyController@new'));
Route::post('/editspecialty', array('as' => 'editspecialty', 'middleware' => 'auth', 'uses' => 'SpecialtyController@edit'));
Route::post('/savespecialty', array('as' => 'savespecialty', 'middleware' => 'auth', 'uses' => 'SpecialtyController@save'));
Route::get('/viewspecialty', array('as' => 'viewspecialty', 'middleware' => 'auth', 'uses' => 'SpecialtyController@view'));
Route::post('/deletespecialty', array('as' => 'deletespecialty', 'middleware' => 'auth', 'uses' => 'SpecialtyController@delete'));

Route::post('/company', array('as' => 'company', 'middleware' => 'auth', 'uses' => 'CompanyController@index'));
Route::get('/newcompany', array('as' => 'newcompany', 'middleware' => 'auth', 'uses' => 'CompanyController@new'));
Route::post('/editcompany', array('as' => 'editcompany', 'middleware' => 'auth', 'uses' => 'CompanyController@edit'));
Route::post('/savecompany', array('as' => 'savecompany', 'middleware' => 'auth', 'uses' => 'CompanyController@save'));

Route::post('/users', array('as' => 'users', 'middleware' => 'auth', 'uses' => 'UserController@index'));
Route::get('/newuser', array('as' => 'newuser', 'middleware' => 'auth', 'uses' => 'UserController@new'));
Route::post('/edituser', array('as' => 'edituser', 'middleware' => 'auth', 'uses' => 'UserController@edit'));
Route::post('/saveuser', array('as' => 'saveuser', 'middleware' => 'auth', 'uses' => 'UserController@save'));
Route::get('/viewuser/{id?}', array('as' => 'viewuser', 'middleware' => 'auth', 'uses' => 'UserController@view'));
Route::post('/deleteuser', array('as' => 'deleteuser', 'middleware' => 'auth', 'uses' => 'UserController@delete'));

Route::get('/report/{id?}', array('as' => 'reports', 'middleware' => 'auth', 'uses' => 'ReportController@index'));


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

Route::get('/canal/{id}', array('as' => 'channel', 'uses' => 'UserController@channel'));
