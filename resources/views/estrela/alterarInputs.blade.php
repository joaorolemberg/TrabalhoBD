@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')

    <div class="container overflow-auto" id="containerConsultar">
        <h1>Alterar Estrela</h1> 
        @forelse ($data as $estrela)

            {!! Form::open(['method'=> 'put','action'=>'estrelaController@alterarEstrela','class'=> 'form-padrao'])!!}
                
                {!! Form:: hidden('id',$estrela->idestrela ?? null)!!}
                {!! Form:: hidden('tipoAnt',$estrela->tipo ?? null)!!}
                <label class="labelFormsInserir" style="padding-left:60px;" >ID: </label>
                <label class="labelFormsConsulta" >{{$estrela->idestrela}}</label>

                <div class="form-group" style="padding-left:60px;">     
                    <label class="labelFormsInserir" >Nome</label>
                    {!! Form:: text('nome',$estrela->nome ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Nome da estrela"])!!}
                </div>

                <div class="form-group" style="padding-left:60px;" >     
                    <label class="labelFormsInserir" >Tamanho</label>
                    {!! Form:: text('tamanho',$estrela->tamanho ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Tamanho em km"])!!}
                </div>

                <div class="form-group" style="padding-left:60px;" >     
                    <label class="labelFormsInserir" >Idade</label>
                    {!! Form:: text('idade',$estrela->idade ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Idade"])!!}
                </div>

                <div class="form-group" style="padding-left:60px;" >     
                    <label class="labelFormsInserir" >Distancia da terra</label>
                    {!! Form:: text('dist_terra',$estrela->dist_terra ?? null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Velocidade em km/h"])!!}
                </div>

                <label class="labelFormsInserir" style="padding:0px 30px 0px 60px;" >Tipo de estrela</label>
                    {!!Form::select('tipo', [  '1' => 'Anã Vermelha', 
                                                    '2' => 'Anã Branca',
                                                    '3' => 'Estrela Binária',
                                                    '4' => 'Gigante Azul',
                                                    '5' => 'Gigante Vermelha', 
                    ])!!}

                 <br>
                 <div class="form-group" style="padding-left:60px;" >     
                    <label class="labelFormsInserir" style="padding-right:40px;" >Morte:</label>
                    <label class="checkForm">
                        {{ Form::checkbox('morte',null)}}
                    </label>
                    <br>
                    <label class="labelFormsEstrela" >Obs: campo só precisa ser preenchido caso a estrela seja Gigante Vermelha</label>
                    <br>
                </div>
                    
          
                {!!Form::submit('Alterar',['style'=>'margin-right:50px;','class'=>'botaoForm']) !!}

            {!! Form::close() !!}

        @empty
            <label class="labelFormsConsulta" >Estrela não encontrada, tente novamente</label>
        @endforelse
    
    </div>
@endsection