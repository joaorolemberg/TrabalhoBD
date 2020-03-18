@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')
    <div class="container overflow-auto" id="containerConsultar">
        <h1>Remover Estrela</h1>

        <div class="row" style="display:block; padding:30px 0px 0px 0px; text-align:center;">
            <ul>
            @forelse ($data as $estrela)
                <dd>
                    <label class="labelFormsInserir" >ID: </label>
                    <label class="labelFormsConsulta" >{{$estrela->idestrela}}</label>
                </dd>
                <dd>
                    <label class="labelFormsInserir" >Nome: </label>
                    <label class="labelFormsConsulta" >{{$estrela->nome}}</label>
                </dd>

                <dd>
                    <label class="labelFormsInserir" >Tamanho: </label>
                    <label class="labelFormsConsulta" >{{$estrela->tamanho ?? null}} km</label>
                </dd>
                    
                <dd>
                    <label class="labelFormsInserir" >Idade: </label>
                    <label class="labelFormsConsulta" >{{$estrela->idade ?? null}} anos</label>
                    
                </dd>
                    
                <dd>
                    <label class="labelFormsInserir" >Distancia da terra :</label>
                    <label class="labelFormsConsulta" >{{$estrela->dist_terra ?? null}} km</label>
                </dd>
                
                <dd>
                    <label class="labelFormsInserir" >Possui satélite :</label>
                    <label class="labelFormsConsulta" >{{$estrela->psnestrela ?? 0 }}</label>
                </dd>

                <dd>
                    <label class="labelFormsInserir" >Tipo:</label>
                    <label class="labelFormsConsulta" >{{$estrela->tipo ?? null}}</label>
                </dd>

                <dd>
                    <label class="labelFormsInserir" >Morte:</label>
                    <label class="labelFormsConsulta" >{{$estrela->morte ?? null}}</label>
                </dd>

                @empty
                    <label class="labelFormsConsulta" >Estrela não encontrada, tente novamente</label>

                @endforelse

                {!! Form::open(['method'=> 'put','action'=>'estrelaController@removerEstrela','class'=> 'form-padrao'])!!}
                    {!! Form:: hidden('id',$estrela->idestrela ?? null)!!}
                    {!!Form::submit('Remover',['style'=>'margin-right:50px; clear:both','class'=>'botaoForm']) !!}
  
                {!! Form::close() !!}


            </ul>
            

        </div>
    </div>
@endsection
