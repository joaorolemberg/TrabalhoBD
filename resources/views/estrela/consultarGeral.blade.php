@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')

    <div class="container overflow-auto" id="containerConsultar">

        <h1>Consultar Estrela</h1>  
        <!-- CASO FOR UTILIZAR 2 METODOS ALTERAR O METHOD SEMELHANTE AO LOGIN-->
        {!! Form::open(['method'=> 'post','class'=> 'form-padrao'])!!}

        <div class="row"  >
            <div class="col-xl-3" id="radios" >

                {!! Form:: radio('consulta','esp',['class'=>'radioForm','type'=>'radio','id'=>'a'])!!}
                <label class="form-check-label" for="a">Consulta específica</label>
                <br>
                {!! Form:: radio('consulta','geral',['class'=>'radioForm','type'=>'radio','id'=>'b'])!!}
                <label class="form-check-label" for="b">Consulta geral</label>

            </div>

            <div class="col-xl-7" style="display:flex; aling-items: center; ">

                    <label class="labelFormsInserir" >ID:</label>
                    {!! Form:: text('id',null,['id'=>'consultarText','class'=>'form-control','placeholder'=>"ID da estrela"])!!}
            </div>
            <div class="col-xl-2" >
                    {!!Form::submit('Consultar',['style'=>'margin-right:50px; clear:both','class'=>'botaoForm']) !!}
            </div>
        </div>

        {!! Form::close() !!}

        <div class="row overflow-auto" id="tabelaPlaneta" >
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Tamanho</th>
                <th scope="col">Idade</th>
                <th scope="col">Distância</th>
                <th scope="col">Possui SN</th>
                <th scope="col">Tipo</th> 
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $estrela)
                      <tr>
                        <td>{{$estrela->idestrela ?? null}}</td>
                        <td>{{$estrela->nome ?? null}}</td>
                        <td>{{$estrela->tamanho ?? null}}</td>
                        <td>{{$estrela->idade ?? null}}</td>
                        <td>{{$estrela->dist_terra ?? null}}</td>
                        <td>{{$estrela->psnestrela ?? null}}</td>
                        <td>{{$estrela->tipo ?? null}}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>


    </div>
@endsection


@section('js-view')

@endsection











