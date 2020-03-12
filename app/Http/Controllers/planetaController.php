<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Exception;
class planetaController extends Controller
{
    //
    public function inserirPlaneta(Request $request){
        

        try{
            $possuiSN='false';
            $Planeta =DB:: insert('INSERT INTO Planeta values(DEFAULT,?,?,?,?,?,?)',[    
                $request->get('nome'),                                                                                                                                                                                              
                $request->get('tamanho'),
                $request->get('peso'),
                $request->get('velocidade'),
                $possuiSN,
                $request->get('composicao')]
            
            );
            $msg= 'Planeta inserido com sucesso';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));

        }catch (Exception $e){
            $msg= 'Não foi possível inserir o planeta,tente novamente';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));
        }
        
        dd($request->all());
        
        
    }

    public function consultarPlaneta(Request $request){

        $tipoConsulta= $request->get('consulta');

        if($tipoConsulta=='esp'){

            
            $data = DB::select('select * from planeta where idplaneta = :id', ['id' => $request->get('id')]);
            try{
                if($data[0]->psn_planeta=='true'){
                    $data[0]->psn_planeta='SIM';
                }else{
                    $data[0]->psn_planeta='NÃO';
                }
                
                return(view('planeta.consultarEsp',[
                    'data'=>$data
                ] ));

            }catch (Exception $e){
                return(view('planeta.consultarEsp',[
                    'data'=>$data
                ] ));

            }

        }else{
            //retornar lista com todos os planetas
            $data = DB::table('planeta')->get();

            foreach ($data as $value) {
                if($value->psn_planeta=='true'){
                    $value->psn_planeta='SIM';
                }else{
                    $value->psn_planeta='NÃO';
                }
            }
            return(view('planeta.consultarGeral',[
                'data'=>$data
            ] ));
        }
        
        
    }

    public function consultaAlterar(Request $request){
        
        $data = DB::select('select * from planeta where idplaneta = :id', ['id' => $request->get('id')]);
        try{
            if($data[0]->psn_planeta=='true'){
                $data[0]->psn_planeta='SIM';
            }else{
                $data[0]->psn_planeta='NÃO';
            }


            return(view('planeta.alterarInputs',[
                'data'=>$data
            ] ));

        }catch (Exception $e){
            return(view('planeta.alterarInputs',[
                'data'=>$data
            ] ));

        }


    }
    public function alterarPlaneta(Request $request){

        try{
            $possuiSN='false';

            if($request->get('possuiSN')=='SIM'){
                $possuiSN='true';
            }
            
            $Planeta =DB:: update('UPDATE Planeta SET nome=?,tamanho=?,peso=?,vel_rotacao=?,psn_planeta=?,comp_planeta=? WHERE idPlaneta=?',[
                 
                $request->get('nome'),                                                                                                                                                                                              
                $request->get('tamanho'),
                $request->get('peso'),
                $request->get('velocidade'),
                $possuiSN,
                $request->get('composicao'),
                $request->get('id'), ]

            );

            $msg= 'Planeta alterado com sucesso';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));

        }catch (Exception $e){
            
            $msg= 'Não foi possível alterar o planeta,tente novamente';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));        
        }
            dd($request->all());
    }

    public function consultaRemover(Request $request){
        
        $data = DB::select('select * from planeta where idplaneta = :id', ['id' => $request->get('id')]);
        try{
            if($data[0]->psn_planeta=='true'){
                $data[0]->psn_planeta='SIM';
            }else{
                $data[0]->psn_planeta='NÃO';
            }
            return(view('planeta.removerEsp',[
                'data'=>$data
            ] ));

        }catch (Exception $e){
            return(view('planeta.removerEsp',[
                'data'=>$data
            ] ));

        }


    }

    public function removerPlaneta(Request $request){

        try{
            $Planeta =DB:: delete('DELETE FROM Planeta WHERE idPlaneta=?',[
                $request->get('id')
                ]);
            
            $msg= 'Planeta excluido com sucesso';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));

        }catch (Exception $e){

            $msg= 'Não foi possível excluir planeta, tente novamente';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));

        }
       
        dd($request->all());
    }

    

}
