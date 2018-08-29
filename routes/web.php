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

Route::get('register','HomeAdminController@getRegister')->name('getregister');
Route::post('register','HomeAdminController@postRegister')->name('postregister');

Route::get('login','HomeAdminController@getLogin')->name('getlogin');
Route::post('login','HomeAdminController@postLogin')->name('postlogin');

Route::get('admin','HomeAdminController@getIndex')->name('admindashboard');
Route::get('productdetail','HomeClientsController@getDetailProduct')->name('getdetail');
Route::get('home','HomeClientsController@getHome')->name('gethome');
Route::get('product','HomeClientsController@getProduct')->name('getproduct');
Route::get('cart','HomeClientsController@getCart')->name('getcart');
Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard','HomeAdminController@getIndex')->name('dashboard');
    Route::get('listuser','HomeAdminController@getUserList')->name('getuserlist');
    Route::get('listbill', 'HomeAdminController@getBillList')->name('getbilllist');

    //bills
    Route::get('bills-{status?}','HomeAdminController@getBillsByStatus')->name('bills');
    Route::get('update-bill-{id}','HomeAdminController@getUpdateBill')->name('updatebill');
    Route::get('cancel-bill-{id}','HomeAdminController@getCancelBill')->name('cancelbill');

    //products
    Route::get('list-product-{idType}','HomeAdminController@getListProduct')->name('getproductlist');
    Route::get('addproduct','HomeAdminController@getAddProduct')->name('addproduct');
    Route::post('addproduct','HomeAdminController@postAddProduct')->name('addproduct');
    Route::get('delete-product-{id}','HomeAdminController@getDeleteProduct')->name('deleteproduct');
    Route::get('update-product-{id}','HomeAdminController@getUpdateProduct')->name('updateproduct');
    Route::post('update-product-{id}','HomeAdminController@postUpdateProduct')->name('updateproduct');
    Route::get('list-cate','HomeAdminController@getListCate')->name('getcatelist');

    //Level Two
    Route::get('select-level-two',"HomeAdminController@getLevelTwo")->name('getl2');

    
});