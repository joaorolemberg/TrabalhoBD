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

//SATELITE
//          INSERIR
Route::get('/satelite/inserir', ['as'=>'satelite.inserir',function(){ return view('satelite.inserir'); }]);
Route::post('/satelite/inserir', ['as'=>'satelite.inserir','uses'  =>'sateliteController@inserirSatelite']);
//          CONSULTAR
Route::get('/satelite/consultar', ['as'=>'satelite.consultar',function(){ return view('satelite.consultar'); }]);
Route::post('/satelite/consultar', ['as'=>'satelite.consultar','uses'  =>'sateliteController@consultaSatelite']);
//          ALTERAR
Route::get('/satelite/alterar', ['as'=>'satelite.alterar',function(){ return view('satelite.alterar'); }]);
Route::post('/satelite/alterar', ['as'=>'satelite.alterar','uses'  =>'sateliteController@consultaAlterar']);
Route::put('/satelite/alterar', ['as'=>'satelite.alterar','uses'  =>'sateliteController@alterarSatelite']);
//         REMOVER
Route::get('/satelite/remover', ['as'=>'satelite.remover',function(){ return view('satelite.remover'); }]);
Route::post('/satelite/remover', ['as'=>'satelite.remover','uses'  =>'sateliteController@consultaRemover']);
Route::put('/satelite/remover', ['as'=>'satelite.remover','uses'  =>'sateliteController@removerSatelite']);

//SISTEMA
//          INSERIR
Route::get('/sistema/inserir', ['as'=>'sistema.inserir',function(){ return view('sistema.inserir'); }]);
Route::post('/sistema/inserir', ['as'=>'sistema.inserir','uses'  =>'sistemaController@inserirSistema']);
Route::put('/sistema/inserir', ['as'=>'sistema.inserir','uses'  =>'sistemaController@inserirEntidade']);
//          CONSULTAR
Route::get('/sistema/consultar', ['as'=>'sistema.consultar',function(){ return view('sistema.consultar'); }]);
Route::post('/sistema/consultar', ['as'=>'sistema.consultar','uses'  =>'sistemaController@consultaSistema']);
//          ALTERAR
Route::get('/sistema/alterar', ['as'=>'sistema.alterar',function(){ return view('sistema.alterar'); }]);
Route::post('/sistema/alterar', ['as'=>'sistema.alterar','uses'  =>'sistemaController@consultaAlterar']);
Route::put('/sistema/alterar', ['as'=>'sistema.alterar','uses'  =>'sistemaController@alterarSistema']);
//         REMOVER
Route::get('/sistema/remover', ['as'=>'sistema.remover',function(){ return view('sistema.remover'); }]);
Route::post('/sistema/remover', ['as'=>'sistema.remover','uses'  =>'sistemaController@consultaRemover']);
Route::put('/sistema/remover', ['as'=>'satelsistemaite.remover','uses'  =>'sistemaController@removerSistema']);