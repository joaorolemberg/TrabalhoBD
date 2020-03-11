@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection



@section('conteudo-view')

<div class="container overflow-auto" id="containerInserir">

    <h1>Inserir planeta</h1>  
    
    <!-- CASO FOR UTILIZAR 2 METODOS ALTERAR O METHOD SEMELHANTE AO LOGIN-->
    {!! Form::open(['method'=> 'post','class'=> 'form-padrao'])!!}
       
        <div class="form-group" style="padding-left:60px;">     
            <label class="labelFormsInserir" >Nome</label>
            {!! Form:: text('nome',null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Nome do Planeta"])!!}
        </div>

        <div class="form-group" style="padding-left:60px;" >     
            <label class="labelFormsInserir" >Tamanho</label>
            {!! Form:: text('tamanho',null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Tamanho em km"])!!}
        </div>

        <div class="form-group" style="padding-left:60px;" >     
            <label class="labelFormsInserir" >Peso</label>
            {!! Form:: text('peso',null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Peso em kg(Ex.: 5.972x10^24)"])!!}
        </div>

        <div class="form-group" style="padding-left:60px;" >     
            <label class="labelFormsInserir" >Velocidade de Rotação</label>
            {!! Form:: text('velocidade',null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Velocidade em km/h"])!!}
        </div>

        <div class="form-group" style="padding-left:60px;">
            <label class="labelFormsInserir" style="padding-right:60px;">Possui satélite natural?</label>
            <label class="checkForm">
                {{ Form::checkbox('possuiSN',null)}}
            </label>

        </div>
        
        <div class="form-group" style="padding-left:60px;">     
            <label class="labelFormsInserir" >Composição</label>
            {!! Form:: text('composicao',null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Composição química (Ex.: H:10%;O:60%;He:30%)"])!!}
        </div>


        {!!Form::submit('Inserir',['style'=>'margin-right:50px;','class'=>'botaoForm']) !!}
        <br style="clear:both">
        <br>
        {!! Form::close() !!}

</div>




@endsection


@section('js-view')

@endsection