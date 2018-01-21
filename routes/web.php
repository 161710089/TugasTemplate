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

Route::get('/', function () {
    return view('Homee');
});
Route::get('/gallery',function(){
	return view('gallery');
});

Route::get('/jadwal',function(){
	return view('Jadwal');
});

Route::get('/Biografi',function(){
	return view('Biografi');
});

Route::get('tabel','gg@tabel');

Route::get('/mci2016',function(){
	return view('foto1');
});

Route::get('/mci2017',function(){
	return view('foto2');
});

Route::get('/mci2018',function(){
	return view('foto3');
});
	
Route::get('/paragrap',function(){
	return view('paragrap');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/akun',function(){
	return view('akun');
});
