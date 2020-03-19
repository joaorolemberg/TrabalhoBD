@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')

    <div class="container overflow-auto" id="containerConsultar">

        <h1>Listar todo sistema</h1>
        <h3 class='labelGeral' style=''>Planetas</h3>
        <div class="row overflow-auto" id="tabelaPlanetaGeral" >
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Nome</th>
                <th scope="col">Tamanho</th>
                <th scope="col">Peso</th>
                <th scope="col">Velocidade</th>
                <th scope="col">Possui SN</th>
                <th scope="col">Composicao</th> 
              </tr>
            </thead>
            <tbody>
                @foreach ($data1 as $planeta)
                      <tr>
                        <td>{{$planeta->idplaneta}}</td>
                        <td>{{$planeta->nome}}</td>
                        <td>{{$planeta->tamanho ?? null}}</td>
                        <td>{{$planeta->peso ?? null}}</td>
                        <td>{{$planeta->vel_rotacao ?? null}}</td>
                        <td>{{$planeta->psn_planeta ?? null}}</td>
                        <td>{{$planeta->comp_planeta ?? null}}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>

        <h3 class='labelGeral' style=''>Estrelas</h3>
        <div class="row overflow-auto" id="tabelaEstrela" >
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
                <th scope="col">Morte</th> 
              </tr>
            </thead>
            <tbody>
                @foreach ($data2 as $estrela)
                      <tr>
                        <td>{{$estrela->idestrela ?? null}}</td>
                        <td>{{$estrela->nome ?? null}}</td>
                        <td>{{$estrela->tamanho ?? null}}</td>
                        <td>{{$estrela->idade ?? null}}</td>
                        <td>{{$estrela->dist_terra ?? null}}</td>
                        <td>{{$estrela->psnestrela ?? null}}</td>
                        <td>{{$estrela->tipo ?? null}}</td>
                        <td>{{$estrela->morte ?? null}}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>

        <h3 class='labelGeral' style=''>Satélite</h3>
        <div class="row overflow-auto" id="tabelaPlanetaGeral" >
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Nome</th>
                <th scope="col">Tamanho</th>
                <th scope="col">Peso</th>
                <th scope="col">Composicao</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($data3 as $satelite)
                      <tr>
                        <td>{{$satelite->idsn}}</td>
                        <td>{{$satelite->nome}}</td>
                        <td>{{$satelite->tamanho ?? null}}</td>
                        <td>{{$satelite->peso ?? null}}</td>
                        <td>{{$satelite->comp_sn ?? null}}</td>
                        
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>

        <h3 class='labelGeral'>Galáxia</h3>
        <div class="row overflow-auto" id="tabelaPlanetaGeral" >
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Nome</th>
                <th scope="col">Distância da terra</th>
                <th scope="col">Quantidade de Sistemas</th> 
                <th scope="col">#idSistema</th>
                <th scope="col">Nome sistemas</th> 
              </tr>
            </thead>
            <tbody>
                @foreach ($data4 as $galaxia)
                      <tr>
                        <td>{{$galaxia->idgalaxia ?? null}}</td>
                        <td>{{$galaxia->nome_galaxia ?? null}}</td>
                        <td>{{$galaxia->dist_terra ?? null}}</td>
                        <td>{{$galaxia->qt_sistema ?? null}}</td>
                        <td>{{$galaxia->nome_sis ?? null}}</td>
                        <td>{{$galaxia->idsistema_planetario ?? null}}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>

        <h3 class='labelGeral'>Sistemas e planetas</h3>
        <div class="row overflow-auto" id="tabelaPlanetaGeral" >
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#idSistema</th>
                <th scope="col">#idGalaxia</th>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                <th scope="col">Qtde Planetas</th>
                <th scope="col">Nome planeta</th>
                <th scope="col">#idPlaneta</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($data5 as $sistema)
                      <tr>
                        <td>{{$sistema->idsistema_planetario}}</td>
                        <td>{{$sistema->galaxia_idgalaxia}}</td>
                        <td>{{$sistema->nome_sis}}</td>
                        <td>{{$sistema->sis_idade ?? null}}</td>
                        <td>{{$sistema->qtd_planetas ?? null}}</td>
                        <td>{{$sistema->nome_planeta ?? null}}</td>
                        <td>{{$sistema->idplaneta ?? null}}</td>
                        
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>

        <h3 class='labelGeral'>Sistemas e estrelas</h3>
        <div class="row overflow-auto" id="tabelaPlanetaGeral" >
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#idSistema</th>
                <th scope="col">#idGalaxia</th>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                <th scope="col">Qtde Estrelas</th>
                <th scope="col">Nome estrela</th>
                <th scope="col">#idEstrela</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($data6 as $sistema)
                      <tr>
                        <td>{{$sistema->idsistema_planetario}}</td>
                        <td>{{$sistema->galaxia_idgalaxia}}</td>
                        <td>{{$sistema->nome_sis}}</td>
                        <td>{{$sistema->sis_idade ?? null}}</td>
                        <td>{{$sistema->qtd_planetas ?? null}}</td>
                        <td>{{$sistema->nome_estrela ?? null}}</td>
                        <td>{{$sistema->idestrela ?? null}}</td>
                        
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>

    </div>
@endsection


@section('js-view')

@endsection











