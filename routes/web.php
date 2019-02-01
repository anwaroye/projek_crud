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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/benda','ControllerTableBenda@index')->name('benda');
Route::get('/informasi','ControllerTableInfMuseum@index')->name('informasi');
Route::get('/pengelola','ControllerTablePengelola@index')->name('pengelola');
Route::get('/dashboard','ControllerDashboard@index')->name('dashboard');
Route::get('/kritikdansaran','ControllerTableKritikSaran@index')->name('kritikdansaran');
Route::get('/user_android', 'ControllerTableUser@index')->name('user_android');
// =============modul benda TABLE ==================

Route::get('/benda', 'ControllerTableBenda@index')->name('benda');
Route::get('/addbenda', 'ControllerTableBenda@addbenda')->name('addbenda');
//-====== model event ===========
Route::get('/event','ControllerTableEvent@index')->name('event');
Route::get('/addevent','ControllerTableEvent@addevent')->name('addevent');
Route::post('/createevent','ControllerTableEvent@store')->name('createevent');
// link untuk menuju edit
Route::get('/EditEvent{id}','ControllerTableEvent@editEvent')->name('EditEvent');
Route::post('/updateEvent/{id}' ,'ControllerTableEvent@updateEvent')->name('updateEvent');
Route::post('/deleteEvent/{id}', 'ControllerTableEvent@destroyEvent')->name('deleteEvent');


//========  model informasi museum ====



//======= pengelola=================
