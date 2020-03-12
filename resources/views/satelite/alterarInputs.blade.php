@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')

    <div class="container overflow-auto" id="containerConsultar">
        <h1>Alterar Satélite</h1> 
        @forelse ($data as $satelite)

            {!! Form::open(['method'=> 'put','action'=>'sateliteController@alterarSatelite','class'=> 'form-padrao'])!!}
                
                {!! Form:: hidden('idsn',$satelite->idsn ?? null)!!}
                <label class="labelFormsInserir" style="padding-left:60px;" >ID: </label>
                <label class="labelFormsConsulta" >{{$satelite->idsn}}</label>

                <div class="form-group" style="padding-left:60px;">     
                    <label class="labelFormsInserir" >Nome</label>
                    {!! Form:: text('nome',$satelite->nome ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Nome do Planeta"])!!}
                </div>

                <div class="form-group" style="padding-left:60px;" >     
                    <label class="labelFormsInserir" >Tamanho</label>
                    {!! Form:: text('tamanho',$satelite->tamanho ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Tamanho em km"])!!}
                </div>

                <div class="form-group" style="padding-left:60px;" >     
                    <label class="labelFormsInserir" >Peso</label>
                    {!! Form:: text('peso',$satelite->peso ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Peso em kg(Ex.: 5.972x10^24)"])!!}
                </div>

                <div class="form-group" style="padding-left:60px;">     
                    <label class="labelFormsInserir" >Composição</label>
                    {!! Form:: text('comp_sn',$satelite->comp_sn ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Composição química (Ex.: H:10%;O:60%;He:30%)"])!!}
                </div>


                {!!Form::submit('Alterar',['style'=>'margin-right:50px;','class'=>'botaoForm']) !!}

            {!! Form::close() !!}

        @empty
            <label class="labelFormsConsulta" >Satélite não encontrado, tente novamente</label>
        @endforelse
    
    </div>
@endsection