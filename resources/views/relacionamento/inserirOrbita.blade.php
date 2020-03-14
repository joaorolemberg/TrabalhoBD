@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection



@section('conteudo-view')
<div class="container overflow-auto" id="containerInserir">

    <h1>Inserir Órbita</h1>  
        <!-- CASO FOR UTILIZAR 2 METODOS ALTERAR O METHOD SEMELHANTE AO LOGIN-->
        {!! Form::open(['method'=> 'put','class'=> 'form-padrao'])!!}

            <h3>Selecione o tipo de entidade a orbitar e a ser orbitada</h3>
            <br>
            <div class="row">

                <div class="col-xl-6" style="display:block; aling-items: center; ">
                    <h3>Orbitar</h3>
                </div>

                <div class="col-xl-6" style="display:block; aling-items: center; ">
                    <h3>Orbitado</h3>
                </div>

            </div>

            <div class="row">

                <div class="col-xl-2" id="radios"  >
                    {!! Form:: radio('entidade','Satélite',['class'=>'radioForm','type'=>'radio','id'=>'a'])!!}
                    <label class="form-check-label" for="a">Satélite</label>
                    <br>
                    {!! Form:: radio('entidade','planeta',['class'=>'radioForm','type'=>'radio','id'=>'b'])!!}
                    <label class="form-check-label" for="b">Planeta</label>
                </div>

                <div class="col-xl-3" style="display:block; aling-items: center; ">
                    <div class="row">
                        <label class="labelFormsInserir" style="aling-items: center;" >ID Sistema:</label>
                        {!! Form:: text('idSistema',null,['id'=>'consultarText','class'=>'form-control','style'=>'max-width:65%','placeholder'=>"ID do sistema"])!!}
                    </div>
                </div>

                <div class="col-xl-2" id="radios">
                    {!! Form:: radio('entidade','estrela',['class'=>'radioForm','type'=>'radio','id'=>'a'])!!}
                    <label class="form-check-label" for="a">Estrela</label>
                    <br>
                    {!! Form:: radio('entidade','planeta',['class'=>'radioForm','type'=>'radio','id'=>'b'])!!}
                    <label class="form-check-label" for="b">Planeta</label>
                </div>

                <div class="col-xl-3" >
                        <label class="labelFormsInserir" style="aling-items: center;" >ID Entidade:</label>
                            {!! Form:: text('idEntidade',null,['id'=>'consultarText','class'=>'form-control','style'=>'max-width:65%','placeholder'=>"ID da entidade"])!!}
                </div>

               
            </div>

            <div class="row" style="text-align: center; min-height:100px; align-items:center;" >
                <div class="col-xl-4" >
                </div>
                <div class="col-xl-4" >
                    {!!Form::submit('Inserir entidade',['style'=>'margin-right:50px;','class'=>'botaoFormOrb']) !!}
                </div>
                <div class="col-xl-4" >
                </div>
                
            </div>

        {!! Form::close() !!}
       
</div>
@endsection