@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')

    <div class="container overflow-auto" id="containerConsultar">
        <h1>Alterar Planeta</h1> 
        @forelse ($data as $planeta)

            {!! Form::open(['method'=> 'put','action'=>'planetaController@alterarPlaneta','class'=> 'form-padrao'])!!}
                
                {!! Form:: hidden('id',$planeta->id ?? null)!!}
                <label class="labelFormsInserir" style="padding-left:60px;" >ID: </label>
                <label class="labelFormsConsulta" >{{$planeta->id}}</label>

                <div class="form-group" style="padding-left:60px;">     
                    <label class="labelFormsInserir" >Nome</label>
                    {!! Form:: text('nome',$planeta->name ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Nome do Planeta"])!!}
                </div>

                <div class="form-group" style="padding-left:60px;" >     
                    <label class="labelFormsInserir" >Tamanho</label>
                    {!! Form:: text('tamanho',$planeta->tamanho ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Tamanho em km"])!!}
                </div>

                <div class="form-group" style="padding-left:60px;" >     
                    <label class="labelFormsInserir" >Peso</label>
                    {!! Form:: text('peso',$planeta->peso ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Peso em kg(Ex.: 5.972x10^24)"])!!}
                </div>

                <div class="form-group" style="padding-left:60px;" >     
                    <label class="labelFormsInserir" >Velocidade de Rotação</label>
                    {!! Form:: text('velocidade',$planeta->velocidade ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Velocidade em km/h"])!!}
                </div>

                <div class="form-group" style="padding-left:60px;">
                    <label class="labelFormsInserir" style="padding-right:60px;">Possui satélite natural?</label>
                    <label class="checkForm">{{ Form::checkbox('possuiSN',null)}}</label>
                </div>
                        
                <div class="form-group" style="padding-left:60px;">     
                    <label class="labelFormsInserir" >Composição</label>
                    {!! Form:: text('composicao',$planeta->composicao ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Composição química (Ex.: H:10%;O:60%;He:30%)"])!!}
                </div>

                {!!Form::submit('Alterar',['style'=>'margin-right:50px;','class'=>'botaoForm']) !!}

            {!! Form::close() !!}

        @empty
            <label class="labelFormsConsulta" >Planeta não encontrado, tente novamente</label>
        @endforelse
    
    </div>
@endsection