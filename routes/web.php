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
Route::resource('carts','CartController');
Route::resource('jtemps','JurnalTempController');
Route::resource('cartsj','CartJController');
Route::resource('penjualans','PenjualanController');
Route::resource('jurnals','JurnalController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['admin','auth']], function(){
	Route::resource('/','AdminController');
});

Route::get('/tes', 'TesController@index');
Route::get('states/get/{id}', 'TesController@getStates');

Route::get('cart/delete/{cart}', ['as' => 'cart.delete', 'uses' => 'CartController@destroy']);
Route::get('jtemps/delete/{cart}', ['as' => 'jtemps.delete', 'uses' => 'JurnalTempController@destroy']);
Route::get('cartj/delete/{cartj}', ['as' => 'cartj.delete', 'uses' => 'CartJController@destroy']);

Route::get('/pembelians/create/json-regencies','PembelianController@ajax');
Route::get('/penjualans/create/json-regencies','PenjualanController@ajaxs');
Route::get('/jurnals/create/json-regencies','JurnalController@ajax');

