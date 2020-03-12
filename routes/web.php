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
Route::get('/login', ['as'=> 'login','uses'  => 'loginController@telaLogin']);
Route::post('/login', ['uses'  => 'loginController@fazerLogin']);

Route::get('/homepage', ['as'=>'homepage','uses'  => 'homepageController@telaHome']);


//PLANETA
//          INSERIR
Route::get('/planeta/inserir', ['as'=>'planeta.inserir',function(){ return view('planeta.inserir'); }]);
Route::post('/planeta/inserir', ['as'=>'planeta.inserir','uses'  =>'planetaController@inserirPlaneta']);
//          CONSULTAR
Route::get('/planeta/consultar', ['as'=>'planeta.consultar',function(){ return view('planeta.consultar'); }]);
Route::post('/planeta/consultar', ['as'=>'planeta.consultar','uses'  =>'planetaController@consultarPlaneta']);
//          ALTERAR
Route::get('/planeta/alterar', ['as'=>'planeta.alterar',function(){ return view('planeta.alterar'); }]);
Route::post('/planeta/alterar', ['as'=>'planeta.alterar','uses'  =>'planetaController@consultaAlterar']);
Route::put('/planeta/alterar', ['as'=>'planeta.alterar','uses'  =>'planetaController@alterarPlaneta']);
//         REMOVER
Route::get('/planeta/remover', ['as'=>'planeta.remover',function(){ return view('planeta.remover'); }]);
Route::post('/planeta/remover', ['as'=>'planeta.remover','uses'  =>'planetaController@consultaRemover']);
Route::put('/planeta/remover', ['as'=>'planeta.remover','uses'  =>'planetaController@removerPlaneta']);

//ESTRELA
//          INSERIR
Route::get('/estrela/inserir', ['as'=>'estrela.inserir',function(){ return view('estrela.inserir'); }]);
Route::post('/estrela/inserir', ['as'=>'estrela.inserir','uses'  =>'estrelaController@inserirEstrela']);
//          CONSULTAR
Route::get('/estrela/consultar', ['as'=>'estrela.consultar',function(){ return view('estrela.consultar'); }]);
Route::post('/estrela/consultar', ['as'=>'estrela.consultar','uses'  =>'estrelaController@consultarEstrela']);
//          ALTERAR
Route::get('/estrela/alterar', ['as'=>'estrela.alterar',function(){ return view('estrela.alterar'); }]);
Route::post('/estrela/alterar', ['as'=>'estrela.alterar','uses'  =>'estrelaController@consultaAlterar']);
Route::put('/estrela/alterar', ['as'=>'estrela.alterar','uses'  =>'estrelaController@alterarEstrela']);
//         REMOVER
Route::get('/estrela/remover', ['as'=>'estrela.remover',function(){ return view('estrela.remover'); }]);
Route::post('/estrela/remover', ['as'=>'estrela.remover','uses'  =>'estrelaController@consultaRemover']);
Route::put('/estrela/remover', ['as'=>'estrela.remover','uses'  =>'estrelaController@removerEstrela']);

