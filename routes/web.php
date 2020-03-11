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

Route::get('/planeta/inserir', ['as'=>'planeta.inserir',function(){
    return view('planeta.inserir');
}]);
Route::post('/planeta/inserir', ['as'=>'planeta.inserir','uses'  =>'planetaController@inserirPlaneta']);




Route::get('/planeta/consultar', ['as'=>'planeta.consultar',function(){
    return view('planeta.consultar');
}]);
Route::post('/planeta/consultar', ['as'=>'planeta.consultar','uses'  =>'planetaController@consultarPlaneta']);


Route::get('/planeta/alterar', ['as'=>'planeta.alterar',function(){
    return view('planeta.alterar');
}]);



Route::post('/planeta/alterar', ['as'=>'planeta.alterar','uses'  =>'planetaController@consultaAlterar']);

Route::put('/planeta/alterar', ['as'=>'planeta.alterar','uses'  =>'planetaController@alterarPlaneta']);





Route::get('/planeta/remover', ['as'=>'planeta.remover',function(){
    return view('planeta.remover');
}]);

Route::post('/planeta/remover', ['as'=>'planeta.remover','uses'  =>'planetaController@consultaRemover']);
Route::put('/planeta/remover', ['as'=>'planeta.remover','uses'  =>'planetaController@removerPlaneta']);


Route::get('/t', function () {
    return view('teste');
});
