<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Exception;

class galaxiaController extends Controller
{
    public function inserirGalaxia(Request $request){

        try{
           
            $zero='0';
            $Galaxia =DB:: insert('INSERT INTO galaxia values(DEFAULT,?,?,?)',[                                                                                                                                                                                
                $zero,  
                $request->get('dist_terra'),
                $request->get('nome')]);

            $msg= 'Galáxia inserida com sucesso';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));

        }catch (Exception $e){
            
            $msg= 'Não foi possível inserir a galáxia,tente novamente';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));
           
        }
        
        
        
    }

    /*
    public function inserirSistema(Request $request){
        

        try{

            $planeta_sistema =DB:: insert('INSERT INTO pertence_planeta values(?,?)',[    
                
                $request->get('idEntidade'),
                $request->get('idSistema')
            ]);

            $data = DB::select('SELECT count (*) FROM pertence_planeta WHERE id_sisplan_plan = :id', ['id' => $request->get('idSistema')]);
            $qtde_plan=$data[0]->count;

            $sistema =DB:: update('UPDATE sistema_planetario SET qtd_planetas=? WHERE idsistema_planetario=?',[
                
                $qtde_plan,
                $request->get('idSistema')                                                                                                                                                                                              
                    ]
            );

            $msg= 'Planeta inserido com sucesso';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));
                
           
        }catch(Exception $e){
            dd($e);
        }  
    }
    */

    public function consultaGalaxia(Request $request){

        $tipoConsulta= $request->get('consulta');

        if($tipoConsulta=='esp'){

            
            $data = DB::select('select * from galaxia where idgalaxia = :id', ['id' => $request->get('id')]);
                  
            return(view('galaxia.consultarEsp',[
                'data'=>$data
            ] ));

        

        }else{
            //retornar lista com todos os planetas
            $data = DB::table('galaxia')->get();

            return(view('galaxia.consultarGeral',[
                'data'=>$data
            ] ));
        }
        
        
    }

    public function consultaAlterar(Request $request){
        
        $data = DB::select('select * from galaxia where idgalaxia = :id', ['id' => $request->get('id')]);

        return(view('galaxia.alterarInputs',[
            'data'=>$data
        ] ));



    }
    public function alterarGalaxia(Request $request){

        try{

            
            $Sistema =DB:: update('UPDATE galaxia SET nome_galaxia=?,dist_terra=? WHERE idgalaxia=?',[
                 
                $request->get('nome'),                                                                                                                                                                                              
                $request->get('dist_terra'),
                $request->get('idGalaxia')
                ]);

            $msg= 'Galáxia alterada com sucesso';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));

        }catch (Exception $e){
            
            $msg= 'Não foi possível alterar a galáxia,tente novamente';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));        
        }
            dd($request->all());    
    }

    public function consultaRemover(Request $request){
        
        $data = DB::select('select * from galaxia where idgalaxia = :id', ['id' => $request->get('id')]);
                  
        return(view('galaxia.removerEsp',[
            'data'=>$data
        ] ));

    }

    public function removerGalaxia(Request $request){

        try{
            $galaxia =DB:: delete('DELETE FROM galaxia WHERE idgalaxia=?',[
                $request->get('id')
                ]);

                $msg= 'Galáxia excluida com sucesso';
                return(view('templates.avisos',[
                    'mensagem'=>$msg
                ] ));

        }catch (Exception $e){

            $msg= 'Não foi possível excluir galáxia, tente novamente';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));

        }
       
        dd($request->all());
    }
}
