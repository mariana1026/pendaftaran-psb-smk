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

// untuk superadmin, admin dan user silahkan di kembangkan sendiri
Route::group(['middleware'=>'auth'], function () {
	Route::get('permissions-all-users',['middleware'=>'check-permission:user|admin|superadmin','uses'=>'HomeController@allUsers']);
	Route::get('permissions-admin-superadmin',['middleware'=>'check-permission:admin|superadmin','uses'=>'HomeController@adminSuperadmin']);
	Route::get('permissions-superadmin',['middleware'=>'check-permission:superadmin','uses'=>'HomeController@superadmin']);
});


Route::resource('post', 'PostController');

Route::resource('daftar', 'DaftarController'); //untuk daftar

Route::get('/personaldata','DaftarController@personaldata'); //satu user hanya bisa melihat data nya sendiri

//kita buat route daftar peringkat nya

Route::get('/dataperingkat','DaftarController@peringkat');