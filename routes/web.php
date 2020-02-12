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



Route::get('/', ['uses'  => 'loginController@telaLogin']);
Route::get('/login', ['uses'  => 'loginController@telaLogin']);
Route::post('/login', ['uses'  => 'loginController@fazerLogin']);

Route::get('/homepage', ['uses'  => 'homepageController@telaHome']);


Route::get('/t', function () {
    return view('teste');
});
