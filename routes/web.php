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
	return view('auth.login');
});
Route::resource('customers','CustomerController');
Route::resource('suppliers','SupplierController');
Route::resource('gols','GolController');
Route::resource('subgols','SubgolController');
Route::resource('kelompoks','KelompokController');
Route::resource('akuns','AkunController');
Route::resource('barangs','BarangController');
Route::resource('pembelians','PembelianController');
Route::resource('penjualans','PenjualanController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['admin','auth']], function(){
	Route::resource('/','AdminController');
});

Route::get('/tes', 'TesController@index');
Route::get('states/get/{id}', 'TesController@getStates');


