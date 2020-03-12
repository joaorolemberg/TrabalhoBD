@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')
    <div class="container overflow-auto" id="containerConsultar">
        <h1>Remover Satélite</h1>

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
            
            </ul>
                {!! Form::open(['method'=> 'put','action'=>'sateliteController@removerSatelite','class'=> 'form-padrao'])!!}
                    {!! Form:: hidden('id',$satelite->idsn ?? null)!!}
                    {!!Form::submit('Remover',['style'=>'margin-right:50px; clear:both','class'=>'botaoForm']) !!}
  
                {!! Form::close() !!}
                @empty
                    <label class="labelFormsConsulta" >Satélite não encontrado, tente novamente</label>

                @endforelse

            </ul>
            

        </div>
    </div>
@endsection
