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
    return view('welcome');
});

Route::get('/services', 'MainController@services');

Route::get('/gallery', function(){
  return view('gallery');
});

Route::get('/contact', function(){
  return view('contact');
});

Route::get('/main', 'MainController@index');
Route::get('/add_s', 'MainController@add_s');
Route::post('/rs_add', 'MainController@rs_add');
Route::get('/add_rs', 'MainController@add_rs');
Route::post('/s_add', 'MainController@s_add');
Route::get('/rubber_sheets', 'MainController@rubber_sheets');
Route::post('/card', 'MainController@card');
Route::post('/del', 'MainController@del');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('/eservices', 'MainController@successlogin');
Route::get('/erubber_sheets', 'MainController@erubber_sheets');
Route::get('main/logout', 'MainController@logout');
