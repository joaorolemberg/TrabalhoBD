@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')
    <div class="container overflow-auto" id="containerConsultar">

        <h1>Inserir buraco negro</h1>  
        <h3 class= "labelFormsInserir" style="text-align:center;">Obs: só será possivel inserir caso a estrela seja Gigante Vermelha</h3>
        <br>
        <!-- CASO FOR UTILIZAR 2 METODOS ALTERAR O METHOD SEMELHANTE AO LOGIN-->
        {!! Form::open(['method'=> 'post','action'=>'relacionamentoController@inserirBuraco','class'=> 'form-padrao'])!!}

        <div class="row"  >

            <div class="col-xl-8" style="display:flex; aling-items: center; ">

                    <label class="labelFormsInserir" >ID:</label>
                    {!! Form:: text('id',null,['id'=>'consultarText','class'=>'form-control','placeholder'=>"ID da estrela"])!!}
            </div>
            <div class="col-xl-4" >
                    {!!Form::submit('Inserir',['style'=>'margin-right:50px; clear:both','class'=>'botaoForm']) !!}
            </div>
        </div>

        {!! Form::close() !!}

        <div class="row" style="min-height:50px; display:block; padding:30px 0px 30px 0px; text-align:center;">

        </div>


    </div>

    

@endsection


@section('js-view')

@endsection