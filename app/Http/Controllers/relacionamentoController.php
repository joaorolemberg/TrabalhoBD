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

                    $Planeta =DB:: update('UPDATE Planeta SET psn_planeta=? WHERE idPlaneta=?',[
                        true,
                        $idOrbitada
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
                        $estrela =DB:: update('UPDATE estrela SET psnestrela=? WHERE idEstrela=?',[
                            true,
                            $idOrbitada
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
            $linha=DB::select('SELECT * FROM orbitar WHERE idorbitar = ?', [$request->get('id')]);

            //verificando se com a orbita removida alguem vai deixar de ter satelite natural
           
            if($linha[0]->satelite_natural_idsn !=null){

                
                if($linha[0]->planeta_idplaneta !=null){


                    $qtdSNPlaneta=DB::select('
                        SELECT count(*) as qtde FROM ORBITAR 
                        WHERE (planeta_idplaneta=?) AND satelite_natural_idsn IS NOT NULL 
                    ',[$linha[0]->planeta_idplaneta]);
                    
                    if($qtdSNPlaneta[0]->qtde==1){

                        $Planeta =DB:: update('UPDATE Planeta SET psn_planeta=? WHERE idPlaneta=?',[
                            false,
                            $linha[0]->planeta_idplaneta
                        ]);
                    }
                }else{
                    
                    $qtdSNEstrela=DB::select('
                    SELECT count(*) as qtde FROM ORBITAR 
                    WHERE (estrela_idestrela=?) AND satelite_natural_idsn IS NOT NULL 
                    ',[$linha[0]->estrela_idestrela]);

                    if($qtdSNEstrela[0]->qtde==1){

                        $estrela =DB:: update('UPDATE estrela SET psnestrela=? WHERE idestrela=?',[
                            false,
                            $linha[0]->estrela_idestrela
                        ]);
                    }

                }
            }

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

    public function inserirBuraco(Request $request){
        
        try{
            $estrela = DB::select('SELECT * 
            FROM gigante_vermelha WHERE gv_idestrela=?',[$request->get('id')]);

            if($estrela[0]->morte=='true'){

                $data = DB::insert('INSERT INTO buraco_negro values(?)',[
                    $request->get('id')
                ]);
                
                $msg= 'Buraco inserido com sucesso ';

                return(view('templates.avisos',[
                    'mensagem'=>$msg
                ] ));

            }else{
                $msg= 'Gigante vermelha não está morta ';
                return(view('templates.avisos',[
                    'mensagem'=>$msg
                ] ));
            }

        }catch(Exception $e){

            $msg= 'Buraco não inserido, tente novamente!';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));
            
        }
    }

    public function consultarBuraco(Request $request){
        
        $data = DB::select('SELECT id_buraconegro,nome 
                        FROM buraco_negro b JOIN estrela e 
                        ON (b.id_buraconegro=e.idestrela)');

        return(view('relacionamento.consultarBuraco',[
            'data'=>$data
        ] ));
    }

    public function removerBuraco(Request $request){

        try{
            $data = DB::delete('DELETE from buraco_negro WHERE id_buraconegro = ?', [$request->get('id')]);
            
            $msg= 'Buraco removido com sucesso ';

            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));

        }catch(Exception $e){

            $msg= 'Buraco não removido, tente novamente!';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));
            
        }
        
    }

    public function consultaGeral(Request $request){
        
        $data1 = DB::table('planeta')->get();

        foreach ($data1 as $value) {
            if($value->psn_planeta=='true'){
                $value->psn_planeta='SIM';
            }else{
                $value->psn_planeta='NÃO';
            }
        }
        
        $data2 = DB::select('SELECT * FROM estrela e 
                        LEFT JOIN gigante_vermelha g 
                        ON (e.idestrela = g.gv_idestrela)');
            
            foreach ($data2 as $value) {
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
        
        $data3 = DB::table('satelite_natural')->get();
        $data4 = DB::select('SELECT * FROM galaxia g FULL JOIN sistema_planetario sp ON(g.idgalaxia=sp.galaxia_idgalaxia)');

        
        
        $data5=DB::select('

            WITH planetas AS (
                SELECT 	id_sisplan_plan as idsistema_planetario,
                    idplaneta,
                    nome
                FROM planeta p JOIN pertence_planeta pp 
                    ON (p.idplaneta=pp.planeta_idplaneta)
            )
            SELECT 	sp.*,
                planetas.nome as nome_planeta,
                planetas.idplaneta
                
            FROM 	sistema_planetario sp LEFT JOIN
                planetas USING (idsistema_planetario) 
       ' );
        
       $data6=DB::select('
            WITH estrelas as (
                SELECT 	id_sisplan_est as idsistema_planetario,
                    idestrela,
                    nome
                FROM estrela e 
                    JOIN pertence_estrela pe ON (e.idestrela=pe.estrela_idestrela)
                    
                )
                SELECT 	sp.*,
                    estrelas.nome as nome_estrela,
                    estrelas.idestrela
                    
                FROM 	sistema_planetario sp LEFT JOIN
                    estrelas USING (idsistema_planetario) 
       
       ');

        return(view('consultaGeral',[
                'data1'=>$data1,
                'data2'=>$data2,
                'data3'=>$data3,
                'data4'=>$data4,
                'data5'=>$data5,
                'data6'=>$data6

        ]));
    }
}
