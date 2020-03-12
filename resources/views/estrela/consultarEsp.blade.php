@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')

    <div class="container overflow-auto" id="containerConsultar">

        <h1>Consultar Estrela</h1>  
        <!-- CASO FOR UTILIZAR 2 METODOS ALTERAR O METHOD SEMELHANTE AO LOGIN-->
        {!! Form::open(['method'=> 'post','class'=> 'form-padrao'])!!}

        <div class="row"  >
            <div class="col-xl-3" id="radios" >

                {!! Form:: radio('consulta','esp',['class'=>'radioForm','type'=>'radio','id'=>'a'])!!}
                <label class="form-check-label" for="a">Consulta específica</label>
                <br>
                {!! Form:: radio('consulta','geral',['class'=>'radioForm','type'=>'radio','id'=>'b'])!!}
                <label class="form-check-label" for="b">Consulta geral</label>

            </div>

            <div class="col-xl-7" style="display:flex; aling-items: center; ">

                    <label class="labelFormsInserir" >ID:</label>
                    {!! Form:: text('id',$id ?? null,['id'=>'consultarText','class'=>'form-control','placeholder'=>"ID da estrela"])!!}
            </div>
            <div class="col-xl-2" >
                    {!!Form::submit('Consultar',['style'=>'margin-right:50px; clear:both','class'=>'botaoForm']) !!}
            </div>
        </div>

        {!! Form::close() !!}

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
                    <label class="labelFormsConsulta" >{{$estrela->dist_terra ?? null}} km/h</label>
                </dd>
                
                <dd>
                    <label class="labelFormsInserir" >Possui satélite :</label>
                    <label class="labelFormsConsulta" >{{$estrela->psnestrela ?? 0 }}</label>
                </dd>

                <dd>
                    <label class="labelFormsInserir" >Tipo:</label>
                    <label class="labelFormsConsulta" >{{$estrela->tipo ?? null}}</label>
                </dd>

                @empty
                    <label class="labelFormsConsulta" >Estrela não encontrada, tente novamente</label>

                @endforelse
            
            </ul>

        </div>


    </div>
@endsection


@section('js-view')

@endsection