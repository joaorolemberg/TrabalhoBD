@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')
    <div class="container overflow-auto" id="containerConsultar">

        <h1>Remover galáxia</h1>  
        <!-- CASO FOR UTILIZAR 2 METODOS ALTERAR O METHOD SEMELHANTE AO LOGIN-->
        {!! Form::open(['method'=> 'post','action'=>'galaxiaController@consultaRemover','class'=> 'form-padrao'])!!}

        <div class="row"  >


            <div class="col-xl-7" style="display:flex; aling-items: center; ">

                    <label class="labelFormsInserir" >ID:</label>
                    {!! Form:: text('id',null,['id'=>'consultarText','class'=>'form-control','placeholder'=>"ID da galáxia"])!!}
            </div>
            <div class="col-xl-2" >
                    {!!Form::submit('Consultar',['style'=>'margin-right:50px; clear:both','class'=>'botaoForm']) !!}
            </div>
        </div>
        {!! Form::close() !!}

        <div class="row" style="min-height:50px; display:block; padding:30px 0px 30px 0px; text-align:center;">

        </div>


    </div>

    

@endsection


@section('js-view')

@endsection