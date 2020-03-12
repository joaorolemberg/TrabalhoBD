@extends('templates.master')

@section('css-view')
<link rel="stylesheet" href="{{asset('css/stylesheetPlaneta.css')}}">

@endsection




@section('conteudo-view')

    <div class="container overflow-auto" id="containerConsultar" style="text-align:center;" >

        <h1>Aviso</h1>  

        <label class="labelFormsConsulta" style="font-size:3.5em;" >{{$mensagem ?? null}}</label>
    </div>

@endsection