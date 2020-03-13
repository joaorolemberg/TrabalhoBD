<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Exception;

class sistemaController extends Controller
{
    //
    public function inserirSistema(Request $request){

        try{
           
            $zero='0';
            $Sistema =DB:: insert('INSERT INTO sistema_planetario values(DEFAULT,?,?,?,?,?)',[    
                $request->get('nome'),
                $zero,                                                                                                                                                                                              
                $zero,  
                $request->get('idade'),
                $request->get('id_galaxia')]);

            $msg= 'Sistema inserido com sucesso';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));

        }catch (Exception $e){
            
            $msg= 'Não foi possível inserir o sistema,tente novamente';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));
           
        }
        
        
        
    }

    
    public function inserirEntidade(Request $request){
        
        $entidade= $request->get('entidade');
        try{
            if($entidade=='planeta'){

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
                
            }else{
                $estrela_sistema =DB:: insert('INSERT INTO pertence_estrela values(?,?)',[    
                    
                    $request->get('idEntidade'),
                    $request->get('idSistema')
                ]);

                $data = DB::select('SELECT count (*) FROM pertence_estrela WHERE id_sisplan_est = :id', ['id' => $request->get('idSistema')]);
                $qtde_est=$data[0]->count;

                $sistema =DB:: update('UPDATE sistema_planetario SET qtd_estrelas=? WHERE idsistema_planetario=?',[
                 
                    $qtde_est,
                    $request->get('idSistema')                                                                                                                                                                                              
                     ]
                );
    
                $msg= 'Estrela inserida com sucesso';
                return(view('templates.avisos',[
                    'mensagem'=>$msg
                ] ));

            }

        }catch(Exception $e){
            dd($e);
        }
        
        
        
    }
    

    public function consultaSistema(Request $request){

        $tipoConsulta= $request->get('consulta');

        if($tipoConsulta=='esp'){

            
            $data = DB::select('select * from sistema_planetario where idsistema_planetario = :id', ['id' => $request->get('id')]);
                  
            return(view('sistema.consultarEsp',[
                'data'=>$data
            ] ));

        

        }else{
            //retornar lista com todos os planetas
            $data = DB::table('sistema_planetario')->get();

            return(view('sistema.consultarGeral',[
                'data'=>$data
            ] ));
        }
        
        
    }

    public function consultaAlterar(Request $request){
        
        $data = DB::select('select * from sistema_planetario where idsistema_planetario = :id', ['id' => $request->get('id')]);        

        return(view('sistema.alterarInputs',[
            'data'=>$data
        ] ));



    }
    public function alterarSistema(Request $request){

        try{

            
            $Sistema =DB:: update('UPDATE sistema_planetario SET nome_sis=?,sis_idade=?,galaxia_idgalaxia=? WHERE idsistema_planetario=?',[
                 
                $request->get('nome'),                                                                                                                                                                                              
                $request->get('idade'),
                $request->get('idGalaxia'),
                $request->get('idSistema') ]

            );

            $msg= 'Sistema alterado com sucesso';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));

        }catch (Exception $e){
            
            $msg= 'Não foi possível alterar o sistema,tente novamente';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));        
        }
            dd($request->all());    
    }

    public function consultaRemover(Request $request){
        
        $data = DB::select('select * from sistema_planetario where idsistema_planetario = :id', ['id' => $request->get('id')]);
    
        return(view('sistema.removerEsp',[
            'data'=>$data
        ] ));

        


    }

    public function removerSistema(Request $request){

        try{
            $Planeta =DB:: delete('DELETE FROM SISTEMA_PLANETARIO WHERE idsistema_planetario=?',[
                $request->get('id')
                ]);
            
            $msg= 'Sistema excluido com sucesso';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));

        }catch (Exception $e){

            $msg= 'Não foi possível excluir sistema, tente novamente';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));

        }
       
        dd($request->all());
    }

}
