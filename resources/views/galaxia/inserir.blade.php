@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">


@endsection



@section('conteudo-view')

<div class="container overflow-auto" id="containerInserir">

    <h1>Inserir</h1>  
        <!-- CASO FOR UTILIZAR 2 METODOS ALTERAR O METHOD SEMELHANTE AO LOGIN-->
        <!-- 
        {!! Form::open(['method'=> 'put','class'=> 'form-padrao'])!!}

            <h3>Inserir sistema na galáxia</h3>
            <br>
            <div class="row">

                <div class="col-xl-7" style="display:block; aling-items: center; padding-left:100px;">
                        <div class="row">
                            <label class="labelFormsInserir" style="aling-items: center;" >ID Sistema:</label>
                            {!! Form:: text('idSistema',null,['id'=>'consultarText','class'=>'form-control','style'=>'max-width:40%','placeholder'=>"ID do sistema"])!!}
                        </div>
                        <div class="row">
                            <label class="labelFormsInserir" style="aling-items: center;" >ID Galáxia:</label>
                            {!! Form:: text('idGalaxia',null,['id'=>'consultarText','class'=>'form-control','style'=>'max-width:35%','placeholder'=>"ID da galáxia"])!!}
                        </div>
                </div>
                <div class="col-xl-2 " style="margin-left:80px;" >
                        {!!Form::submit('Inserir sistema',['style'=>'margin-right:50px; clear:both','class'=>'botaoFormSist']) !!}
                </div>
            </div>

        {!! Form::close() !!}
        
        <div class="row" style="min-height:20px; margin-top:30px; margin-bottom:30px;background-color:black"  >
        </div>
        -->
        <div class="container" >
            <h3>Inserir Galáxia</h3>
            {!! Form::open(['method'=> 'post','class'=> 'form-padrao'])!!}
            
                <div class="form-group" style="padding-left:60px;">     
                    <label class="labelFormsInserir" >Nome</label>
                    {!! Form:: text('nome',null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Nome da galáxia"])!!}
                </div>

                <div class="form-group" style="padding-left:60px;">     
                    <label class="labelFormsInserir" >Distância da terra</label>
                    {!! Form:: text('dist_terra',null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"DIstância da terra"])!!}
                </div>

                {!!Form::submit('Inserir galáxia',['style'=>'margin-right:50px; clear:both','class'=>'botaoForm']) !!}
            {!! Form::close() !!}
        </div>


</div>




@endsection


@section('js-view')
<script src="jquery-1.3.2.min.js" type="text/javascript"></script>   
@endsection