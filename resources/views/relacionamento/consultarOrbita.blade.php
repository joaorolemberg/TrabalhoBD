@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')

    <div class="container overflow-auto" id="containerConsultar">

        <h1>Listar órbitas</h1>

        <div class="row overflow-auto" id="tabelaPlaneta" >
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#idOrbita</th>
                <th scope="col">#idSatelite</th>
                <th scope="col">#idPlaneta</th>
                <th scope="col">#idEstrela</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $orbita)
                    <tr>
                        <td>{{$orbita->idorbitar}}</td>
                        <td>{{$orbita->satelite_natural_idsn}}</td>
                        <td>{{$orbita->planeta_idplaneta}}</td>
                        <td>{{$orbita->estrela_idestrela}}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>


    </div>
@endsection


@section('js-view')

@endsection











