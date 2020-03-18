@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')

    <div class="container overflow-auto" id="containerConsultar">

        <h1>Listar buracos negros</h1>

        <div class="row overflow-auto" id="tabelaPlaneta" >
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#idBuraco(Estrela)</th>
                <th scope="col">Nome da estrela</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $buraco)
                    <tr>
                        <td>{{$buraco->id_buraconegro}}</td>
                        <td>{{$buraco->nome}}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>


    </div>
@endsection


@section('js-view')

@endsection











