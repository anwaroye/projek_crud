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
Route::get('/posManger','ControllerPosManager@index')->name('posManger');
Route::get('/religion','ControllerReligion@index')->name('religion');

// ============= benda TABLE ==================

Route::get('/data-benda','ControllerKatBenda@index')->name('data.benda');
Route::get('/benda', 'ControllerTableBenda@index')->name('benda');
Route::get('/addbenda', 'ControllerTableBenda@addbenda')->name('addbenda');
Route::post('/createbenda','ControllerTableBenda@store')->name('createbenda');
Route::post('/updateBenda','ControllerTableBenda@updateBenda')->name('updateBenda');
Route::post('/deleteBenda/{id}','ControllerTableBenda@destroyBenda')->name('deleteBenda');

//-====== tabel event ===========
Route::get('/event','ControllerTableEvent@index')->name('event');
Route::get('/addevent','ControllerTableEvent@addevent')->name('addevent');
Route::post('/createevent','ControllerTableEvent@store')->name('createevent');
Route::get('/EditEvent{id}','ControllerTableEvent@editEvent')->name('EditEvent');
Route::post('/updateEvent/{id}' ,'ControllerTableEvent@updateEvent')->name('updateEvent');
Route::post('/deleteEvent/{id}', 'ControllerTableEvent@destroyEvent')->name('deleteEvent');


//========  model informasi museum ====



//======= pengelola=================
Route::get('/manager','ControllerTablePengelola@index')->name('manager');
Route::post('/createmanager','ControllerTablePengelola@store')->name('createmanager');
Route::get('/addmanager','ControllerTablePengelola@addmanager')->name('addmanager');



//dropdown
Route::get('/jeniskelamin','ControllerJenisKelamin@index')->name('jeniskelamin');
Route::get('/addpostmanager', 'ControllerPosManager@create')->name('addpostmanager');
Route::post('/createpostmanager','ControllerPosManager@store')->name('createpostmanager');
Route::post('/deletePost/{id}','ControllerPosManager@destroyPost')->name('deletePost');
Route::post('/createreligion','ControllerReligion@store')->name('createreligion');
Route::get('/addreligion','ControllerReligion@create')->name('addreligion');
Route::post('/deleteReligion/{id}','ControllerReligion@destroyReligion')->name('deleteReligion');
