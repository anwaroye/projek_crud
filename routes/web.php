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
    return view('auth\login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/benda','ControllerTableBenda@index')->name('benda');
// Route::get('/informasi','ControllerTableInfMuseum@index')->name('informasi');
Route::get('/pengelola','ControllerTablePengelola@index')->name('pengelola');
Route::get('/dashboard','ControllerDashboard@index')->name('dashboard');
Route::get('/kritik','ControllerTableKritikSaran@index')->name('kritik');
Route::get('/android', 'ControllerTableUser@index')->name('android');
Route::get('/posManger','ControllerPosManager@index')->name('posManger');
Route::get('/religion','ControllerReligion@index')->name('religion');

// ============= benda TABLE ==================

Route::get('/data-benda','ControllerKatBenda@index')->name('data.benda');
Route::get('/benda', 'ControllerTableBenda@index')->name('benda');
Route::get('/addbenda', 'ControllerTableBenda@addbenda')->name('addbenda');
Route::get('/EditBenda{id}','ControllerTableBenda@editBenda')->name('EditBenda');
Route::post('/createbenda','ControllerTableBenda@store')->name('createbenda');
Route::post('/updateBenda/{id}','ControllerTableBenda@updateBenda')->name('updateBenda');
Route::post('/deleteBenda/{id}','ControllerTableBenda@destroyBenda')->name('deleteBenda');

//-====== tabel event ===========
Route::get('/event','ControllerTableEvent@index')->name('event');
Route::get('/addevent','ControllerTableEvent@addevent')->name('addevent');
Route::post('/createevent','ControllerTableEvent@store')->name('createevent');
Route::get('/EditEvent{id}','ControllerTableEvent@editEvent')->name('EditEvent');
Route::post('/updateEvent/{id}' ,'ControllerTableEvent@updateEvent')->name('updateEvent');
Route::post('/deleteEvent/{id}', 'ControllerTableEvent@destroyEvent')->name('deleteEvent');


//========  model informasi museum ====
Route::get('/museum', 'ControllerViewMuseum@index')->name('museum');
Route::get('/addmuseum', 'ControllerViewMuseum@create')->name('addmuseum');
Route::post('/createmuseum','ControllerViewMuseum@store')->name('createmuseum');
Route::post('/deletemus/{id}','ControllerViewMuseum@destroy')->name('deletemus');



//======= pengelola=================
Route::get('/manager','ControllerTablePengelola@index')->name('manager');
Route::post('/createmanager','ControllerTablePengelola@store')->name('createmanager');
Route::get('/addmanager','ControllerTablePengelola@addmanager')->name('addmanager');
Route::post('/deletemanager/{id}','ControllerTablePengelola@destroyManager')->name('deletemanager');
Route::get('/editManager/{id}','ControllerTablePengelola@edit')->name('editManager');
Route::post('/updateManager/{id}','ControllerTablePengelola@update')->name('updateManager');



//dropdown
Route::get('/addkatbenda', 'ControllerKatBenda@create')->name('addkatbenda');
Route::post('/cretaekatbenda','ControllerKatBenda@store')->name('createkatbenda');
Route::post('/deletekatbenda/{id}','ControllerKatBenda@destroykat')->name('deletekatbenda');
Route::get('/jeniskelamin','ControllerJenisKelamin@index')->name('jeniskelamin');
Route::get('/addpostmanager', 'ControllerPosManager@create')->name('addpostmanager');
Route::post('/createpostmanager','ControllerPosManager@store')->name('createpostmanager');
Route::post('/deletePost/{id}','ControllerPosManager@destroyPost')->name('deletePost');
Route::post('/createreligion','ControllerReligion@store')->name('createreligion');
Route::get('/addreligion','ControllerReligion@create')->name('addreligion');
Route::post('/deleteReligion/{id}','ControllerReligion@destroyReligion')->name('deleteReligion');


//kritik
Route::post('/deletekritik/{id}','ControllerTableKritikSaran@destroy')->name('deletekritik');


//user user_android
Route::post('/delete/{id}','ControllerTableUser@destroy')->name('delete');
