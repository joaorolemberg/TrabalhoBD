<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class planetaController extends Controller
{
    //
    public function inserirPlaneta(Request $request){
        
        $nome          =$request->get('nome');
        $tamanho       =$request->get('tamanho');
        $peso          =$request->get('peso');
        $velocidade    =$request->get('velocidade');
        $possuiSN      =$request->get('possuiSN');
        $composicao    =$request->get('composicao');
        
        dd($request->all());
        
        
    }

    public function consultarPlaneta(Request $request){

        $tipoConsulta= $request->get('consulta');

        if($tipoConsulta=='esp'){

            
            $data = DB::select('select * from planeta where id = :id', ['id' => $request->get('id')]);

            return(view('planeta.consultarEsp',[
                'data'=>$data
            ] ));

        }else{
            //retornar lista com todos os planetas
            $data = DB::table('planeta')->get();
            return(view('planeta.consultarGeral',[
                'data'=>$data
            ] ));
        }
        
        
    }

    public function consultaAlterar(Request $request){
        
        $data = DB::select('select * from planeta where id = :id', ['id' => $request->get('id')]);

            return(view('planeta.alterarInputs',[
                'data'=>$data
            ] ));


    }
    public function alterarPlaneta(Request $request){
        dd($request->all());
    }

    public function consultaRemover(Request $request){
        
        $data = DB::select('select * from planeta where id = :id', ['id' => $request->get('id')]);

            return(view('planeta.removerEsp',[
                'data'=>$data
            ] ));


    }

    public function removerPlaneta(Request $request){
        dd($request->all());
    }

    

}
