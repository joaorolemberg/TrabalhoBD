@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')

    <div class="container overflow-auto" id="containerConsultar">

        <h1>Consultar Satélite</h1>  
        <!-- CASO FOR UTILIZAR 2 METODOS ALTERAR O METHOD SEMELHANTE AO LOGIN-->
        {!! Form::open(['method'=> 'post','class'=> 'form-padrao'])!!}

        <div class="row"  >
            <div class="col-xl-3" id="radios" >

                {!! Form:: radio('consulta','esp',['class'=>'radioForm','type'=>'radio','id'=>'a'])!!}
                <label class="form-check-label" for="a">Consulta específica</label>
                <br>
                {!! Form:: radio('consulta','geral',['class'=>'radioForm','type'=>'radio','id'=>'b'])!!}
                <label class="form-check-label" for="b">Consulta total</label>

            </div>

            <div class="col-xl-7" style="display:flex; aling-items: center; ">

                    <label class="labelFormsInserir" >ID:</label>
                    {!! Form:: text('id',$id ?? null,['id'=>'consultarText','class'=>'form-control','placeholder'=>"ID do planeta"])!!}
            </div>
            <div class="col-xl-2" >
                    {!!Form::submit('Consultar',['style'=>'margin-right:50px; clear:both','class'=>'botaoForm']) !!}
            </div>
        </div>

        {!! Form::close() !!}

        <div class="row" style="display:block; padding:30px 0px 0px 0px; text-align:center;">

            <ul>
                @forelse ($data as $satelite)
                <dd>
                    <label class="labelFormsInserir" >ID: </label>
                    <label class="labelFormsConsulta" >{{$satelite->idsn ?? null}}</label>
                </dd>
                <dd>
                    <label class="labelFormsInserir" >Nome: </label>
                    <label class="labelFormsConsulta" >{{$satelite->nome ?? null}}</label>
                </dd>

                <dd>
                    <label class="labelFormsInserir" >Tamanho: </label>
                    <label class="labelFormsConsulta" >{{$satelite->tamanho ?? null}} km</label>
                </dd>
                    
                <dd>
                    <label class="labelFormsInserir" >Peso: </label>
                    <label class="labelFormsConsulta" >{{$satelite->peso ?? null}} kg</label>
                    
                </dd>

                <dd>
                    <label class="labelFormsInserir" >Composição: </label>
                    <label class="labelFormsConsulta" >{{$satelite->comp_sn ?? null}}</label>
                </dd>
                @empty
                    <label class="labelFormsConsulta" >Satélite não encontrado, tente novamente</label>

                @endforelse
            
            </ul>

        </div>


    </div>
@endsection


@section('js-view')

@endsection