@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')

    <div class="container overflow-auto" id="containerConsultar">
        <h1>Alterar Sistema</h1> 
        @forelse ($data as $sistema)

            {!! Form::open(['method'=> 'put','action'=>'sistemaController@alterarSistema','class'=> 'form-padrao'])!!}
                
                {!! Form:: hidden('idSistema',$sistema->idsistema_planetario ?? null)!!}
                <label class="labelFormsInserir" style="padding-left:60px;" >ID: </label>
                <label class="labelFormsConsulta" >{{$sistema->idsistema_planetario}}</label>

                <div class="form-group" style="padding-left:60px;">     
                    <label class="labelFormsInserir" >Nome</label>
                    {!! Form:: text('nome',$sistema->nome_sis ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Nome do sistema"])!!}
                </div>

                <div class="form-group" style="padding-left:60px;" >     
                    <label class="labelFormsInserir" >Idade</label>
                    {!! Form:: text('idade',$sistema->sis_idade ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Tamanho em km"])!!}
                </div>

                <div class="form-group" style="padding-left:60px;" >     
                    <label class="labelFormsInserir" >ID Galáxia</label>
                    {!! Form:: text('idGalaxia',$sistema->galaxia_idgalaxia ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Peso em kg(Ex.: 5.972x10^24)"])!!}
                </div>

                {!!Form::submit('Alterar',['style'=>'margin-right:50px;','class'=>'botaoForm']) !!}

            {!! Form::close() !!}

        @empty
            <label class="labelFormsConsulta" >Sistema não encontrado, tente novamente</label>
        @endforelse
    
    </div>
@endsection