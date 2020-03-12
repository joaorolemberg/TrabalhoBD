@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection



@section('conteudo-view')

<div class="container overflow-auto" id="containerInserir">

    <h1>Inserir Estrela</h1>  
    
    <!-- CASO FOR UTILIZAR 2 METODOS ALTERAR O METHOD SEMELHANTE AO LOGIN-->
    {!! Form::open(['method'=> 'post','class'=> 'form-padrao'])!!}
       
        <div class="form-group" style="padding-left:60px;">     
            <label class="labelFormsInserir" >Nome</label>
            {!! Form:: text('nome',null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Nome da estrela"])!!}
        </div>

        <div class="form-group" style="padding-left:60px;" >     
            <label class="labelFormsInserir" >Tamanho</label>
            {!! Form:: text('tamanho',null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Tamanho em km"])!!}
        </div>

        <div class="form-group" style="padding-left:60px;" >     
            <label class="labelFormsInserir" >Idade</label>
            {!! Form:: text('idade',null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Idade da estrela"])!!}
        </div>

        <div class="form-group" style="padding-left:60px;" >     
            <label class="labelFormsInserir" >Distância da terra</label>
            {!! Form:: text('dist_terra',null,['id'=>'inserirForms','class'=>'form-control','placeholder'=>"Distância da terra em km"])!!}
        </div>

        <br>
        

        <label class="labelFormsInserir" style="padding:0px 30px 0px 60px;" >Tipo de estrela</label>
            {!!Form::select('tipo', [  '1' => 'Anã Vermelha', 
                                            '2' => 'Anã Branca',
                                            '3' => 'Estrela Binária',
                                            '4' => 'Gigante Azul',
                                            '5' => 'Gigante Vermelha', 
            ])!!}

        <br>         
            {!!Form::submit('Inserir',['style'=>'margin-right:50px;','class'=>'botaoForm']) !!}
        
        {!! Form::close() !!}


</div>




@endsection


@section('js-view')

@endsection