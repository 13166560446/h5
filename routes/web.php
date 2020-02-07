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
//Route::get('/api/user/reg','User\IndexController@reg');
Route::get('/index/index','Index\IndexController@index');
Route::get('/index/register','Index\IndexController@register');
Route::post('/index/reg','Index\IndexController@reg');
Route::get('/index/login','Index\IndexController@login');
Route::post('/index/login0','Index\IndexController@login0');

