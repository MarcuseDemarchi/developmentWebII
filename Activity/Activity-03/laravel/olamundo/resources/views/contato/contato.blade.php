@extends('layouts.app')
@section('title',$title)
@section('content')
    <h1>{{$cabecalho}}</h1>
    <a href="mailto:marcus.demarchi@unidavi.edu.br">marcus.demarchi@unidavi.edu.br</a>
    <br>
    <p>Nome Script: {{$script}} executado em {{$data}}</p>
    <hr>
    <p>Obrigado por visitar {{$title}} - {{$cabecalho}}</p>
    <br>
    <a href="/">Voltar home</a>
@endsection