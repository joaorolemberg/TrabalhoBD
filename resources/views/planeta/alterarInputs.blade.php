@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')

    <div class="container overflow-auto" id="containerConsultar">
        <h1>Alterar Planeta</h1> 
        @forelse ($data as $planeta)

            {!! Form::open(['method'=> 'put','action'=>'planetaController@alterarPlaneta','class'=> 'form-padrao'])!!}
                
                {!! Form:: hidden('id',$planeta->idplaneta ?? null)!!}
                <label class="labelFormsInserir" style="padding-left:60px;" >ID: </label>
                <label class="labelFormsConsulta" >{{$planeta->idplaneta}}</label>

                <div class="form-group" style="padding-left:60px;">     
                    <label class="labelFormsInserir" >Nome</label>
                    {!! Form:: text('nome',$planeta->nome ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Nome do Planeta"])!!}
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
                    {!! Form:: text('velocidade',$planeta->vel_rotacao ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Velocidade em km/h"])!!}
                </div>

                {!! Form:: hidden('possuiSN',$planeta->psn_planeta ?? null)!!}

                <div class="form-group" style="padding-left:60px;">     
                    <label class="labelFormsInserir" >Composição</label>
                    {!! Form:: text('composicao',$planeta->comp_planeta ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Composição química (Ex.: H:10%;O:60%;He:30%)"])!!}
                </div>


                {!!Form::submit('Alterar',['style'=>'margin-right:50px;','class'=>'botaoForm']) !!}

            {!! Form::close() !!}

        @empty
            <label class="labelFormsConsulta" >Planeta não encontrado, tente novamente</label>
        @endforelse
    
    </div>
@endsection