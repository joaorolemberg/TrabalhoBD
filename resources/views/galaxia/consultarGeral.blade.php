@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')

    <div class="container overflow-auto" id="containerConsultar">

        <h1>Consultar galáxia</h1>  
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
                    {!! Form:: text('id',null,['id'=>'consultarText','class'=>'form-control','placeholder'=>"ID da galáxia"])!!}
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
                <th scope="col">Nome</th>
                <th scope="col">Distância da terra</th>
                <th scope="col">Quantidade de Sistemas</th> 
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $galaxia)
                      <tr>
                        <td>{{$galaxia->idgalaxia ?? null}}</td>
                        <td>{{$galaxia->nome_galaxia ?? null}}</td>
                        <td>{{$galaxia->dist_terra ?? null}}</td>
                        <td>{{$galaxia->qt_sistema ?? null}}</td>                        
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>


    </div>
@endsection


@section('js-view')

@endsection











