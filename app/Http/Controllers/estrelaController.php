<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Exception;
class estrelaController extends Controller
{
    //

    public function inserirEstrela(Request $request){
        
        try{
            $possuiSN='false';
            $Estrela =DB:: insert('INSERT INTO estrela values(DEFAULT,?,?,?,?,?,?)',[    
                                                                                                                                                                                                             
                $request->get('tamanho'),
                $request->get('idade'),
                $possuiSN,
                $request->get('dist_terra'), 
                $request->get('nome'),
                $request->get('tipo')]
            
            );

            if($request->get('tipo')=='5'){

                if($request->get('morte')=='on'){

                    $data = DB::select('select idestrela from estrela where nome = :nomeEstrela', ['nomeEstrela' => $request->get('nome')]);
                    $idEstrela=$data[0]->idestrela;
                    $morte='true';
                    $Estrelaa =DB:: insert('INSERT INTO gigante_vermelha values(?,?)',[                                                                                                                                                                            
                        $morte,
                        $idEstrela]);

                }else{
                    $data = DB::select('select idestrela from estrela where nome = :nomeEstrela', ['nomeEstrela' => $request->get('nome')]);
                    $idEstrela=$data[0]->idestrela;
                    $morte='false';
                    $Estrelaa =DB:: insert('INSERT INTO gigante_vermelha values(?,?)',[                                                                                                                                                                            
                        $morte,
                        $idEstrela]);

                }

            }
            $msg= 'Estrela inserida com sucesso';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));



        }catch (Exception $e){
            $msg= 'Não foi possível inserir a estrela,tente novamente';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));
        }
        
        dd($request->all());
        
        
        
    }

    public function consultarEstrela(Request $request){

        $tipoConsulta= $request->get('consulta');

        if($tipoConsulta=='esp'){
            $data = DB::select('SELECT * FROM estrela e 
                        LEFT JOIN gigante_vermelha g ON (e.idestrela = g.gv_idestrela)
                        WHERE e.idestrela=?', 
            [ $request->get('id')]);
                  
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
                                    if($data[0]->morte=='true'){
                                        $data[0]->morte='SIM';
                                    }else{
                    
                                        $data[0]->morte='NÃO';
                                    }
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
            $data = DB::select('SELECT * FROM estrela e 
                        LEFT JOIN gigante_vermelha g 
                        ON (e.idestrela = g.gv_idestrela)');
            
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
                                if($value->morte=='true'){
                                    $value->morte='SIM';
                                }else{
                                    $value->morte='NÃO';
                                }
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
        try{
            
            $possuiSN='false';

            if($request->get('possuiSN')=='SIM'){
                $possuiSN='true';
            }
            
            $Estrela =DB:: update('UPDATE estrela SET tamanho=?,idade=?,dist_terra=?,nome=?,tipo=? WHERE idEstrela=?',[
                
                $request->get('tamanho'),
                $request->get('idade'),
                $request->get('dist_terra'), 
                $request->get('nome'),
                $request->get('tipo'),
                $request->get('id')
                
                ]);

            //SE O TIPO DA ESTRELA A ALTERAR FOI DEFINIDO GIG. VERMELHA
            if($request->get('tipo')=='5'){
                //SE ELA JÁ ERA GIGANTE, NA TABELA GIGANTE SÓ PRECISA SER ALTERADO A MORTE
                if($request->get('tipoAnt')=='5')   {                
                    $morte='false';
                    if($request->get('morte')=='on'){
                        $morte='true';
                        $data = DB::update('UPDATE gigante_vermelha SET morte=? where gv_idestrela = ?', [
                            $morte,
                            $request->get('id')]);


                    }else{
                        $data = DB::update('UPDATE gigante_vermelha SET morte=? where gv_idestrela = ?', [
                            $morte,
                            $request->get('id')]);
                    }
                //SE ELA NÃO ERA GIGANTE, PRECISA SER ADICIONADO NA TABELA GIGANTE
                }else{
                    if($request->get('morte')=='on'){

                        $morte='true';
                        $Estrelaa =DB:: insert('INSERT INTO gigante_vermelha values(?,?)',[                                                                                                                                                                            
                            $morte,
                            $request->get('id')]);
                    }else{
                        $morte='false';
                        $Estrelaa =DB:: insert('INSERT INTO gigante_vermelha values(?,?)',[                                                                                                                                                                            
                            $morte,
                            $request->get('id')]);
                    }
                }
            //SE O TIPO DA ESTRELA A ALTERAR DEFINIDA NÃO FOI GIG. VERMELHA
            }else{
                //MAS ELA ANTERIORMENTE ERA GIGANTE VERMELHA É NECESSÁRIO APAGÁ-LA DA TABELA GIG. VERMELHA
                if($request->get('tipoAnt')=='5')   {

                    $Estrela =DB:: delete('DELETE FROM gigante_vermelha WHERE gv_idestrela=?',[
                        $request->get('id')
                        ]);  
                }

            }

            $msg= 'Estrela alterada com sucesso';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));

        }catch (Exception $e){
        
            $msg= 'Não foi possível alterar a estrela ,tente novamente';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));        
    }




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

        try{
            $Estrela =DB:: delete('DELETE FROM Estrela WHERE idEstrela=?',[
                $request->get('id')
                ]);
            
            $msg= 'Estrela excluido com sucesso';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));

        }catch (Exception $e){

            $msg= 'Não foi possível excluir estrela, tente novamente';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));

        }
        dd($request->all());
    }

 
}
