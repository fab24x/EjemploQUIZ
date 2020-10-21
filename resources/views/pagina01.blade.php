@extends('layouts.ejemplolayout')

@section('titulo', 'Página01 del proyecto')


@section('barralateral')

    <p> Esta parte está en la barra lateral</p>
@endsection



@section('contenido')

    <p> Este está en el body</p>

    <a href="{{ url('pagina02/Historia') }}" class="=btn btn-xs btn-info pull-rigth">HISTORIA</a>
    <a href="{{ url('pagina02/Economia') }}" class="=btn btn-xs btn-info pull-rigth">ECONOMIA</a>
    <a href="{{ url('pagina02/Ingles') }}" class="=btn btn-xs btn-info pull-rigth">INGLES</a>
    <a href="{{ url('api/preguntas', ['Historia']) }}" class="btn btn-xs btn-info pull-rigth">Historia pero un json solo </a>

@endsection