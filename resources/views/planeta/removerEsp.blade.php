@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')
    <div class="container overflow-auto" id="containerConsultar">
        <h1>Remover Planeta</h1>

        <div class="row" style="display:block; padding:30px 0px 0px 0px; text-align:center;">
            <ul>
                @forelse ($data as $planeta)
                <dd>
                    <label class="labelFormsInserir" >ID: </label>
                    <label class="labelFormsConsulta" >{{$planeta->id}}</label>
                </dd>
                <dd>
                    <label class="labelFormsInserir" >Nome: </label>
                    <label class="labelFormsConsulta" >{{$planeta->name}}</label>
                </dd>

                <dd>
                    <label class="labelFormsInserir" >Tamanho: </label>
                    <label class="labelFormsConsulta" >{{$planeta->tamanho ?? null}} km</label>
                </dd>
                    
                <dd>
                    <label class="labelFormsInserir" >Peso: </label>
                    <label class="labelFormsConsulta" >{{$planeta->peso ?? null}} kg</label>
                    
                </dd>
                    
                <dd>
                    <label class="labelFormsInserir" >Velocidade :</label>
                    <label class="labelFormsConsulta" >{{$planeta->velocidade ?? null}} km/h</label>
                </dd>
                
                <dd>
                    <label class="labelFormsInserir" >Possui satélite :</label>
                    <label class="labelFormsConsulta" >{{$planeta->possuiSN ?? null}}</label>
                </dd>

                <dd>
                    <label class="labelFormsInserir" >Composição: </label>
                    <label class="labelFormsConsulta" >{{$planeta->composicao ?? null}}</label>
                </dd>
                {!! Form::open(['method'=> 'put','action'=>'planetaController@removerPlaneta','class'=> 'form-padrao'])!!}
                    {!! Form:: hidden('id',$planeta->id ?? null)!!}
                    {!!Form::submit('Remover',['style'=>'margin-right:50px; clear:both','class'=>'botaoForm']) !!}
  
                {!! Form::close() !!}
                @empty
                    <label class="labelFormsConsulta" >Planeta não encontrado, tente novamente</label>

                @endforelse

            </ul>
            

        </div>
    </div>
@endsection
