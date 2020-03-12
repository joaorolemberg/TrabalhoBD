<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Exception;

class sateliteController extends Controller
{
    //
    public function inserirSatelite(Request $request){
        

        try{
            
            $Satelite =DB:: insert('INSERT INTO satelite_natural values(DEFAULT,?,?,?,?)',[    
                $request->get('nome'),
                $request->get('comp_sn'),                                                                                                                                                                                              
                $request->get('tamanho'),
                $request->get('peso')
                ]);

            $msg= 'Satélite inserido com sucesso';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));

        }catch (Exception $e){
            $msg= 'Não foi possível inserir o satélite,tente novamente';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));
        }
        
        dd($request->all());
        
        
    }

    public function consultaSatelite(Request $request){

        $tipoConsulta= $request->get('consulta');

        if($tipoConsulta=='esp'){

            
            $data = DB::select('select * from satelite_natural where idsn = :id', ['id' => $request->get('id')]);
                  
            return(view('satelite.consultarEsp',[
                'data'=>$data
            ] ));

        

        }else{
            //retornar lista com todos os planetas
            $data = DB::table('satelite_natural')->get();

            return(view('satelite.consultarGeral',[
                'data'=>$data
            ] ));
        }
        
        
    }

    public function consultaAlterar(Request $request){
        
        $data = DB::select('select * from satelite_natural where idsn = :id', ['id' => $request->get('id')]);
        

        return(view('satelite.alterarInputs',[
            'data'=>$data
        ] ));



    }
    public function alterarSatelite(Request $request){

        try{

            
            $Satelite =DB:: update('UPDATE satelite_natural SET nome=?,tamanho=?,peso=?,comp_sn=? WHERE idsn=?',[
                 
                $request->get('nome'),                                                                                                                                                                                              
                $request->get('tamanho'),
                $request->get('peso'),
                $request->get('comp_sn'),
                $request->get('idsn'), ]

            );

            $msg= 'Satélite alterado com sucesso';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));

        }catch (Exception $e){
            
            $msg= 'Não foi possível alterar o satélite,tente novamente';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));        
        }
            dd($request->all());    
    }

    public function consultaRemover(Request $request){
        
        $data = DB::select('select * from satelite_natural where idsn = :id', ['id' => $request->get('id')]);
    
        return(view('satelite.removerEsp',[
            'data'=>$data
        ] ));

        


    }

    public function removerSatelite(Request $request){

        try{
            $Planeta =DB:: delete('DELETE FROM satelite_natural WHERE idsn=?',[
                $request->get('id')
                ]);
            
            $msg= 'Satélite excluido com sucesso';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));

        }catch (Exception $e){

            $msg= 'Não foi possível excluir satélite, tente novamente';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));

        }
       
        dd($request->all());
    }

    
}
