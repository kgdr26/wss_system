<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

// Dashboard
// Route::get('/',['as'=>'/dasbor','uses'=> 'MainController@Dasbor']);
Route::get('dasbor',['as'=>'dasbor','uses'=> 'MainController@Dasbor']);

//Master
Route::get('vendor',['as'=>'vendor','uses'=> 'MainController@Vendor']);
Route::post('addvendor',['as'=>'addvendor','uses'=> 'MainController@addvendor']);

Route::get('customer',['as'=>'customer','uses'=> 'MainController@Customer']);
Route::post('addcustomer',['as'=>'addcustomer','uses'=> 'MainController@addcustomer']);

Route::get('itemsatk',['as'=>'itemsatk','uses'=> 'MainController@ItemsATK']);
Route::post('cekkode',['as'=>'cekkode','uses'=> 'MainController@cekkode']);
Route::post('additemsatk',['as'=>'additemsatk','uses'=> 'MainController@additemsatk']);

Route::get('user',['as'=>'user','uses'=> 'MainController@User']);
Route::post('adduser',['as'=>'adduser','uses'=> 'MainController@adduser']);

// Inventory
Route::get('stock',['as'=>'stock','uses'=> 'MainController@Stock']);
Route::get('stockopname',['as'=>'stockopname','uses'=> 'MainController@StockOpname']);
Route::post('addopname',['as'=>'addopname','uses'=> 'MainController@addopname']);

Route::get('barangmasuk',['as'=>'barangmasuk','uses'=> 'MainController@BarangMasuk']);
Route::post('showdatabrgpo',['as'=>'showdatabrgpo','uses'=> 'MainController@showdatabrgpo']);

Route::post('searchnamebrg',['as'=>'searchnamebrg','uses'=> 'MainController@searchnamebrg']);
Route::get('atkhistorypo',['as'=>'atkhistorypo','uses'=> 'MainController@ATKHistoryPO']);

//Purchase Order
Route::get('addpo',['as'=>'addpo','uses'=> 'MainController@AddPO']);
Route::get('datatemppo',['as'=>'datatemppo','uses'=> 'MainController@datatemppo']);
Route::post('cekvendor',['as'=>'cekvendor','uses'=> 'MainController@cekvendor']);
Route::post('cektemppo',['as'=>'cektemppo','uses'=> 'MainController@cektemppo']);
Route::post('addtemppo',['as'=>'addtemppo','uses'=> 'MainController@addtemppo']);
Route::post('addcreatepo',['as'=>'addcreatepo','uses'=> 'MainController@addcreatepo']);


