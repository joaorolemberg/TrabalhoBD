<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Exception;
class estrelaController extends Controller
{
    //

    public function inserirEstrela(Request $request){
        
        $nome          =$request->get('nome');
        $tamanho       =$request->get('tamanho');
        $peso          =$request->get('peso');
        $velocidade    =$request->get('velocidade');
        $possuiSN      =$request->get('possuiSN');
        $composicao    =$request->get('composicao');
        
        dd($request->all());
        
        
        
    }

    public function consultarEstrela(Request $request){

        $tipoConsulta= $request->get('consulta');

        if($tipoConsulta=='esp'){
            $data = DB::select('select * from estrela where idEstrela = :id', ['id' => $request->get('id')]);
                    
            try{
                if($data[0]->psnestrela=='true'){
                    $data[0]->psnestrela='SIM';
                }else{
                    $data[0]->psnestrela='NÃO';
                }

                if($data[0]->tipo=='1'){
                    $data[0]->tipo='Anã Vermelha';
    
                }else if($data[0]->tipo=='2'){
                        $data[0]->tipo='Anã Branca';
    
                    }else if($data[0]->tipo=='3'){
                            $data[0]->tipo='Estrela Binária';
    
                        }else if($data[0]->tipo=='4'){
                                $data[0]->tipo='Gigante Azul';
    
                            }else{
                                    $data[0]->tipo='Gigante Vermelha';
                                }
                return(view('estrela.consultarEsp',[
                    'data'=>$data
                ] ));

            }catch (Exception $e){
                return(view('estrela.consultarEsp',[
                    'data'=>$data
                ] ));

            }
    
        }else{
            //retornar lista com todas as estrelas
            $data = DB::table('estrela')->get();
            
            foreach ($data as $value) {
                if($value->psnestrela=='true'){
                    $value->psnestrela='SIM';
                }else{
                    $value->psnestrela='NÃO';
                }
                if($value->tipo=='1'){
                    $value->tipo='Anã Vermelha';
    
                }else if($value->tipo=='2'){
                        $value->tipo='Anã Branca';
    
                    }else if($value->tipo=='3'){
                        $value->tipo='Estrela Binária';
    
                        }else if($value->tipo=='4'){
                                $value->tipo='Gigante Azul';
    
                            }else{
                                $value->tipo='Gigante Vermelha';
                                }
            }
            return(view('estrela.consultarGeral',[
                'data'=>$data
            ] ));
        }
        
        
    }

    public function consultaAlterar(Request $request){
        
        $data = DB::select('select * from estrela where idEstrela = :id', ['id' => $request->get('id')]);

            return(view('estrela.alterarInputs',[
                'data'=>$data
            ] ));


    }
    public function alterarEstrela(Request $request){
        dd($request->all());
    }

    public function consultaRemover(Request $request){
        
        $data = DB::select('select * from estrela where idEstrela = :id', ['id' => $request->get('id')]);
        try{
            if($data[0]->psnestrela=='true'){
                $data[0]->psnestrela='SIM';
            }else{
                $data[0]->psnestrela='NÃO';
            }

            if($data[0]->tipo=='1'){
                $data[0]->tipo='Anã Vermelha';

            }else if($data[0]->tipo=='2'){
                    $data[0]->tipo='Anã Branca';

                }else if($data[0]->tipo=='3'){
                        $data[0]->tipo='Estrela Binária';

                    }else if($data[0]->tipo=='4'){
                            $data[0]->tipo='Gigante Azul';

                        }else{
                                $data[0]->tipo='Gigante Vermelha';
                            }
            return(view('estrela.removerEsp',[
                'data'=>$data
            ] ));

        }catch (Exception $e){
            return(view('estrela.removerEsp',[
                'data'=>$data
            ] ));

        }

    }

    public function removerEstrela(Request $request){
        dd($request->all());
    }

 
}
