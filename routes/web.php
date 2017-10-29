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

Route::get('/home_bk', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home2');
});

Auth::routes();
/*Route::match(['get', 'post'], 'register', function(){
    return redirect('/');
});
*/

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contest', 'CluesController@index');
Route::post('/contest', 'CluesController@answer')->name('answer');
