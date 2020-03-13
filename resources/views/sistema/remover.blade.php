@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')
    <div class="container overflow-auto" id="containerConsultar">

        <h1>Remover</h1>  
        <!-- CASO FOR UTILIZAR 2 METODOS ALTERAR O METHOD SEMELHANTE AO LOGIN-->
        {!! Form::open(['method'=> 'post','action'=>'sistemaController@consultaRemover','class'=> 'form-padrao'])!!}

        <div class="row"  >

            <div class="col-xl-3" id="radios"  >

                {!! Form:: radio('entidade','estrela',['class'=>'radioForm','type'=>'radio','id'=>'a'])!!}
                <label class="form-check-label" for="a">Estrela</label>
                <br>
                {!! Form:: radio('entidade','planeta',['class'=>'radioForm','type'=>'radio','id'=>'b'])!!}
                <label class="form-check-label" for="b">Planeta</label>
                <br>
                {!! Form:: radio('entidade','sistema',['class'=>'radioForm','type'=>'radio','id'=>'c'])!!}
                <label class="form-check-label" for="c">Sistema</label>

            </div>

            <div class="col-xl-7" style="display:block; aling-items: center; ">
                <div class="row">
                    <label class="labelFormsInserir" style="aling-items: center;" >ID Sistema:</label>
                    {!! Form:: text('idSistema',null,['id'=>'consultarText','class'=>'form-control','style'=>'max-width:40%','placeholder'=>"ID do sistema"])!!}
                </div>
                <div class="row">
                    <label class="labelFormsInserir" style="aling-items: center;" >ID Entidade:</label>
                    {!! Form:: text('idEntidade',null,['id'=>'consultarText','class'=>'form-control','style'=>'max-width:35%','placeholder'=>"ID da entidade"])!!}
                </div>
            </div>

            <div class="col-xl-2" >
                {!!Form::submit('Remover',['style'=>'margin-right:50px; clear:both','class'=>'botaoFormSist']) !!}
            </div>
        </div>

        {!! Form::close() !!}

        <div class="row" style="min-height:50px; display:block; padding:30px 0px 30px 0px; text-align:center;">

        </div>


    </div>

    

@endsection


@section('js-view')

@endsection