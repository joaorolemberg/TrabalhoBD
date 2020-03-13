@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')
    <div class="container overflow-auto" id="containerConsultar">
        <h1>Remover Sistema</h1>

        <div class="row" style="display:block; padding:30px 0px 0px 0px; text-align:center;">
            <ul>
                @forelse ($data as $sistema)
                    <dd>
                        <label class="labelFormsInserir" >ID Sistema: </label>
                        <label class="labelFormsConsulta" >{{$sistema->idsistema_planetario ?? null}}</label>
                    </dd>
                    <dd>
                        <label class="labelFormsInserir" >ID Galáxia: </label>
                        <label class="labelFormsConsulta" >{{$sistema->galaxia_idgalaxia ?? null}}</label>
                    </dd>
                    <dd>
                        <label class="labelFormsInserir" >Nome: </label>
                        <label class="labelFormsConsulta" >{{$sistema->nome_sis ?? null}}</label>
                    </dd>

                    <dd>
                        <label class="labelFormsInserir" >Idade: </label>
                        <label class="labelFormsConsulta" >{{$sistema->sis_idade ?? null}} Anos</label>
                    </dd>
                        
                    <dd>
                        <label class="labelFormsInserir" >Quantidade de planetas: </label>
                        <label class="labelFormsConsulta" >{{$sistema->qtd_planetas ?? null}} </label>
                        
                    </dd>

                    <dd>
                        <label class="labelFormsInserir" >Quantidade de estrelas: </label>
                        <label class="labelFormsConsulta" >{{$sistema->qtd_estrelas ?? null}}</label>
                    </dd>
            </ul>
                {!! Form::open(['method'=> 'put','action'=>'sistemaController@removerSistema','class'=> 'form-padrao'])!!}
                        {!! Form:: hidden('id',$sistema->idsistema_planetario ?? null)!!}
                        {!! Form:: hidden('id_galaxia',$sistema->galaxia_idgalaxia ?? null)!!}
                    {!!Form::submit('Remover',['style'=>'margin-right:50px; clear:both','class'=>'botaoForm']) !!}
  
                {!! Form::close() !!}
                @empty
                    <label class="labelFormsConsulta" >Sistema não encontrado, tente novamente</label>

                @endforelse

            </ul>
            

        </div>
    </div>
@endsection
