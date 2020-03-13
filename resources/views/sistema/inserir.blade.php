@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">


@endsection



@section('conteudo-view')

<div class="container overflow-auto" id="containerInserir">

    <h1>Inserir</h1>  
        <!-- CASO FOR UTILIZAR 2 METODOS ALTERAR O METHOD SEMELHANTE AO LOGIN-->
        {!! Form::open(['method'=> 'put','class'=> 'form-padrao'])!!}

            <h3>Inserir planeta ou estrela no sistema</h3>
            <br>
            <div class="row">
                <div class="col-xl-3" id="radios"  >

                    {!! Form:: radio('entidade','estrela',['class'=>'radioForm','type'=>'radio','id'=>'a'])!!}
                    <label class="form-check-label" for="a">Estrela</label>
                    <br>
                    {!! Form:: radio('entidade','planeta',['class'=>'radioForm','type'=>'radio','id'=>'b'])!!}
                    <label class="form-check-label" for="b">Planeta</label>

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
                        {!!Form::submit('Inserir entidade',['style'=>'margin-right:50px; clear:both','class'=>'botaoFormSist']) !!}
                </div>
            </div>

        {!! Form::close() !!}
        <div class="row" style="min-height:20px; margin-top:30px; margin-bottom:30px;background-color:black"  >
        </div>
        
        <div class="container" >
            <h3>Inserir Sistema</h3>
            {!! Form::open(['method'=> 'post','class'=> 'form-padrao'])!!}
            
                <div class="form-group" style="padding-left:60px;">     
                    <label class="labelFormsInserir" >Nome</label>
                    {!! Form:: text('nome',null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Nome do sistema"])!!}
                </div>

                <div class="form-group" style="padding-left:60px;">     
                    <label class="labelFormsInserir" >Idade</label>
                    {!! Form:: text('idade',null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Idade"])!!}
                </div>

                <div class="form-group" style="padding-left:60px;">     
                    <label class="labelFormsInserir" >ID galáxia</label>
                    {!! Form:: text('id_galaxia',null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Id galáxia"])!!}
                </div>


                {!!Form::submit('Inserir sistema',['style'=>'margin-right:50px; clear:both','class'=>'botaoForm']) !!}
            {!! Form::close() !!}
        </div>


</div>




@endsection


@section('js-view')
<script src="jquery-1.3.2.min.js" type="text/javascript"></script>   
@endsection