<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Exception;

class relacionamentoController extends Controller
{
    //
    public function inserirOrbita(Request $request){
        if($request->get('entidadeOrbitar')==$request->get('entidadeOrbitada')){
            $msg= 'Planeta não pode orbitar outro planeta,tente novamente!';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));

        }else{
            $idOrbitar=$request->get('idOrbitar');
            $idOrbitada=$request->get('idOrbitada');

            if($request->get('entidadeOrbitar')=='planeta'){
                //planeta orbita estrela
                try{
                    
                    $planeta = DB::select('select idplaneta from planeta where idplaneta = ?', [$idOrbitar]);
                    $estrela = DB::select('SELECT * FROM estrela WHERE idestrela=?', [$idOrbitada]);
                    
                    $orbita =DB:: insert('INSERT INTO orbitar values(?,?,?,DEFAULT)',[  
                            $idOrbitar,
                            $idOrbitada,
                            null
                        ]);
                    
                    $msg= 'Órbita: Planeta orbita Estrela inserida com sucesso!';
                    return(view('templates.avisos',[
                        'mensagem'=>$msg
                    ] ));
                    
                    
                }catch(Exception $e){
                    $msg= 'Órbita não inserida, tente novamente!';
                    return(view('templates.avisos',[
                        'mensagem'=>$msg
                    ] ));

                }

            }else if($request->get('entidadeOrbitada')=='planeta'){
                    //satelite orbita planeta
                    try{
                         
                    $satelite = DB::select('select idsn from satelite_natural where idsn = ?', [$idOrbitar]);
                    $planeta = DB::select('select idplaneta from planeta where idplaneta = ?', [$idOrbitada]);
                                                        //planeta,estrela,satelite
                    $orbita =DB:: insert('INSERT INTO orbitar values(?,?,?,DEFAULT)',[  
                            $idOrbitada,
                            null,
                            $idOrbitar
                        ]);
                    
                    $msg= 'Órbita: Satélite orbita Planeta inserida com sucesso!';
                    return(view('templates.avisos',[
                        'mensagem'=>$msg
                    ] ));
                    

                    }catch(Exception $e){
                        $msg= 'Órbita não inserida, tente novamente!';
                        return(view('templates.avisos',[
                            'mensagem'=>$msg
                        ] ));
                        
                    }

                }else{
                    //satelite orbita estrela
                    try{
                        $satelite = DB::select('select idsn from satelite_natural where idsn = ?', [$idOrbitar]);
                        $estrela = DB::select('SELECT * FROM estrela WHERE idestrela=?', [$idOrbitada]);
                                                                //planeta,estrela,satelite
                        $orbita =DB:: insert('INSERT INTO orbitar values(?,?,?,DEFAULT)',[  
                            null,
                            $idOrbitada,
                            $idOrbitar
                        ]);
                    
                        $msg= 'Órbita: Satélite orbita Estrela inserida com sucesso!';
                        return(view('templates.avisos',[
                            'mensagem'=>$msg
                        ] ));
                    }catch(Exception $e){
                        $msg= 'Órbita não inserida, tente novamente!';
                        return(view('templates.avisos',[
                            'mensagem'=>$msg
                        ] ));
                        
                    }

                }





        }

    }

    public function consultarOrbita(Request $request){

        $data = DB::table('orbitar')->get();
        return(view('relacionamento.consultarOrbita',[
            'data'=>$data
        ] ));

    }

    public function removerOrbita(Request $request){


        try{
            $data = DB::delete('DELETE from orbitar where idorbitar = ?', [$request->get('id')]);
            
            $msg= 'Órbita removida com sucesso ';

            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));
        }catch(Exception $e){

            $msg= 'Órbita não removida, tente novamente!';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));
            
        }
    }
}
