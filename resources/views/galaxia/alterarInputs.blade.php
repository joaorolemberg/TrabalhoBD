@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')

    <div class="container overflow-auto" id="containerConsultar">
        <h1>Alterar galaxia</h1> 
        @forelse ($data as $galaxia)

            {!! Form::open(['method'=> 'put','action'=>'galaxiaController@alterarGalaxia','class'=> 'form-padrao'])!!}
                
                {!! Form:: hidden('idGalaxia',$galaxia->idgalaxia ?? null)!!}
                <label class="labelFormsInserir" style="padding-left:60px;" >ID: </label>
                <label class="labelFormsConsulta" >{{$galaxia->idgalaxia}}</label>

                <div class="form-group" style="padding-left:60px;">     
                    <label class="labelFormsInserir" >Nome</label>
                    {!! Form:: text('nome',$galaxia->nome_galaxia ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Nome do sistema"])!!}
                </div>

                <div class="form-group" style="padding-left:60px;" >     
                    <label class="labelFormsInserir" >Distância da terra</label>
                    {!! Form:: text('dist_terra',$galaxia->dist_terra ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Tamanho em km"])!!}
                </div>

                {!!Form::submit('Alterar',['style'=>'margin-right:50px;','class'=>'botaoForm']) !!}

            {!! Form::close() !!}

        @empty
            <label class="labelFormsConsulta" >Sistema não encontrado, tente novamente</label>
        @endforelse
    
    </div>
@endsection