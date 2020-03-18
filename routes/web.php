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
Route::put('/sistema/remover', ['as'=>'sistema.remover','uses'  =>'sistemaController@removerSistema']);

//GALÁXIA
//          INSERIR
Route::get('/galaxia/inserir', ['as'=>'galaxia.inserir',function(){ return view('galaxia.inserir'); }]);
Route::post('/galaxia/inserir', ['as'=>'galaxia.inserir','uses'  =>'galaxiaController@inserirGalaxia']);
Route::put('/galaxia/inserir', ['as'=>'galaxia.inserir','uses'  =>'galaxiaController@inserirEntidade']);
//          CONSULTAR
Route::get('/galaxia/consultar', ['as'=>'galaxia.consultar',function(){ return view('galaxia.consultar'); }]);
Route::post('/galaxia/consultar', ['as'=>'galaxia.consultar','uses'  =>'galaxiaController@consultaGalaxia']);
//          ALTERAR
Route::get('/galaxia/alterar', ['as'=>'galaxia.alterar',function(){ return view('galaxia.alterar'); }]);
Route::post('/galaxia/alterar', ['as'=>'galaxia.alterar','uses'  =>'galaxiaController@consultaAlterar']);
Route::put('/galaxia/alterar', ['as'=>'galaxia.alterar','uses'  =>'galaxiaController@alterarGalaxia']);
//         REMOVER
Route::get('/galaxia/remover', ['as'=>'galaxia.remover',function(){ return view('galaxia.remover'); }]);
Route::post('/galaxia/remover', ['as'=>'galaxia.remover','uses'  =>'galaxiaController@consultaRemover']);
Route::put('/galaxia/remover', ['as'=>'galaxia.remover','uses'  =>'galaxiaController@removerGalaxia']);

//RELACIONAMENTOS
//      ÓRBITA
//          INSERIR
Route::get('/orbita/inserir', ['as'=>'orbita.inserir',function(){ return view('relacionamento.inserirOrbita'); }]);
Route::post('/orbita/inserir', ['as'=>'orbita.inserir','uses'  =>'relacionamentoController@inserirOrbita']);
//          CONSULTAR
Route::get('/orbita/consultar', ['as'=>'orbita.consultar','uses'  =>'relacionamentoController@consultarOrbita']);
//         REMOVER
Route::get('/orbita/remover', ['as'=>'orbita.remover',function(){ return view('relacionamento.removerOrbita'); }]);
Route::post('/orbita/remover', ['as'=>'orbita.remover','uses'  =>'relacionamentoController@removerOrbita']);

//      BURACO
//          INSERIR
Route::get('/buraco/inserir', ['as'=>'buraco.inserir',function(){ return view('relacionamento.inserirBuraco'); }]);
Route::post('/buraco/inserir', ['as'=>'buraco.inserir','uses'  =>'relacionamentoController@inserirBuraco']);
//          CONSULTAR
Route::get('/buraco/consultar', ['as'=>'buraco.consultar','uses'  =>'relacionamentoController@consultarBuraco']);
//          REMOVER
Route::get('/buraco/remover', ['as'=>'buraco.remover',function(){ return view('relacionamento.removerBuraco'); }]);
Route::post('/buraco/remover', ['as'=>'buraco.remover','uses'  =>'relacionamentoController@removerBuraco']);