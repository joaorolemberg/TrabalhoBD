@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')
    <div class="container overflow-auto" id="containerConsultar">
        <h1>Remover galáxia</h1>

        <div class="row" style="display:block; padding:30px 0px 0px 0px; text-align:center;">
            <ul>
                @forelse ($data as $galaxia)
                    <dd>
                        <label class="labelFormsInserir" >ID Galáxia: </label>
                        <label class="labelFormsConsulta" >{{$galaxia->idgalaxia ?? null}}</label>
                    </dd>
                    <dd>
                        <label class="labelFormsInserir" >Nome: </label>
                        <label class="labelFormsConsulta" >{{$galaxia->nome_galaxia ?? null}}</label>
                    </dd>

                    <dd>
                        <label class="labelFormsInserir" >Distância da terra: </label>
                        <label class="labelFormsConsulta" >{{$galaxia->dist_terra ?? null}} Anos</label>
                    </dd>
                        
                    <dd>
                        <label class="labelFormsInserir" >Quantidade de sistemas: </label>
                        <label class="labelFormsConsulta" >{{$galaxia->qt_sistema ?? null}} </label>
                    </dd>
            
                    
            </ul>
                {!! Form::open(['method'=> 'put','action'=>'galaxiaController@removerGalaxia','class'=> 'form-padrao'])!!}
                        {!! Form:: hidden('id',$galaxia->idgalaxia  ?? null)!!}
                    {!!Form::submit('Remover',['style'=>'margin-right:50px; clear:both','class'=>'botaoForm']) !!}
  
                {!! Form::close() !!}
                
                @empty
                    <label class="labelFormsConsulta" >Galáxia não encontrada, tente novamente</label>
                @endforelse

                

            </ul>
            

        </div>
    </div>
@endsection
