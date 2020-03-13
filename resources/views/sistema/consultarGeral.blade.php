@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')

    <div class="container overflow-auto" id="containerConsultar">

        <h1>Consultar Sistema</h1>  
        <!-- CASO FOR UTILIZAR 2 METODOS ALTERAR O METHOD SEMELHANTE AO LOGIN-->
        {!! Form::open(['method'=> 'post','class'=> 'form-padrao'])!!}

        <div class="row"  >
            <div class="col-xl-3" id="radios" >

                {!! Form:: radio('consulta','esp',['class'=>'radioForm','type'=>'radio','id'=>'a'])!!}
                <label class="form-check-label" for="a">Consulta específica</label>
                <br>
                {!! Form:: radio('consulta','geral',['class'=>'radioForm','type'=>'radio','id'=>'b'])!!}
                <label class="form-check-label" for="b">Consulta total</label>

            </div>

            <div class="col-xl-7" style="display:flex; aling-items: center; ">

                    <label class="labelFormsInserir" >ID:</label>
                    {!! Form:: text('id',null,['id'=>'consultarText','class'=>'form-control','placeholder'=>"ID do planeta"])!!}
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
                <th scope="col">#id</th>
                <th scope="col">#idGalaxia</th>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                <th scope="col">Qtde Planetas</th>
                <th scope="col">Qtde Estrelas</th> 
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $sistema)
                      <tr>
                        <td>{{$sistema->idsistema_planetario}}</td>
                        <td>{{$sistema->galaxia_idgalaxia}}</td>
                        <td>{{$sistema->nome_sis}}</td>
                        <td>{{$sistema->sis_idade ?? null}}</td>
                        <td>{{$sistema->qtd_planetas ?? null}}</td>
                        <td>{{$sistema->qtd_estrelas ?? null}}</td>
                        
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>


    </div>
@endsection


@section('js-view')

@endsection











