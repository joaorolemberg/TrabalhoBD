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
                
            $data = DB::select('SELECT count (*) FROM sistema_planetario WHERE galaxia_idgalaxia = :id', ['id' => $request->get('id_galaxia')]);
            $qtde_sis=$data[0]->count;

            $sistema =DB:: update('UPDATE galaxia SET qt_sistema=? WHERE idgalaxia=?',[
                
                $qtde_sis,
                $request->get('id_galaxia')                                                                                                                                                                                              
                    ]
            );
        
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
        
        try{
            if($request->get('entidade')=='planeta'){
                try{
                    $Planeta =DB:: delete('DELETE FROM pertence_planeta WHERE id_sisplan_plan=? AND planeta_idplaneta=?',[
                        $request->get('idSistema'),
                        $request->get('idEntidade')
                        ]);

                    $data = DB::select('SELECT count (*) FROM pertence_planeta WHERE id_sisplan_plan = :id', ['id' => $request->get('idSistema')]);
                    $qtde_plan=$data[0]->count;
    
                    $sistema =DB:: update('UPDATE sistema_planetario SET qtd_planetas=? WHERE idsistema_planetario=?',[
                        
                        $qtde_plan,
                        $request->get('idSistema')                                                                                                                                                                                              
                            ]
                    );
                    $msg= 'Planeta excluido com sucesso';
                    return(view('templates.avisos',[
                        'mensagem'=>$msg
                    ] ));
                }catch(Exception $e){
                    
                    $msg= 'Não foi possível remover planeta';
                    return(view('templates.avisos',[
                        'mensagem'=>$msg
                    ] ));
                }
               
            }else if($request->get('entidade')=='estrela'){
                try{
                    $Estrela =DB:: delete('DELETE FROM pertence_estrela WHERE id_sisplan_est=? AND estrela_idestrela=?',[
                        $request->get('idSistema'),
                        $request->get('idEntidade')
                        ]);

                    $data = DB::select('SELECT count (*) FROM pertence_estrela WHERE id_sisplan_est = :id', ['id' => $request->get('idSistema')]);
                    $qtde_est=$data[0]->count;
    
                    $sistema =DB:: update('UPDATE sistema_planetario SET qtd_estrelas=? WHERE idsistema_planetario=?',[
                        
                        $qtde_est,
                        $request->get('idSistema')                                                                                                                                                                                              
                            ]
                    );
                    $msg= 'Estrela excluida com sucesso';
                    return(view('templates.avisos',[
                        'mensagem'=>$msg
                    ] ));
                }catch(Exception $e){
                    
                    $msg= 'Não foi possível remover estrela';
                    return(view('templates.avisos',[
                        'mensagem'=>$msg
                    ] ));
                }   
                }else{
                    $data = DB::select('select * from sistema_planetario where idsistema_planetario = :id', ['id' => $request->get('idSistema')]);
    
                    return(view('sistema.removerEsp',[
                        'data'=>$data
                    ] ));  
                    }

        }catch(Exception $e){

        }
        

        


    }

    public function removerSistema(Request $request){

        try{
            $Sistema =DB:: delete('DELETE FROM sistema_planetario WHERE idsistema_planetario=?',[
                $request->get('id')
                ]);
            
            $data = DB::select('SELECT count (*) FROM sistema_planetario WHERE galaxia_idgalaxia = :id', ['id' => $request->get('id_galaxia')]);
            $qtde_sis=$data[0]->count;

            $galaxia =DB:: update('UPDATE galaxia SET qt_sistema=? WHERE idgalaxia=?',[
                
                $qtde_sis,
                $request->get('id_galaxia')                                                                                                                                                                                              
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
