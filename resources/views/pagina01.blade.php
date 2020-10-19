@extends('layouts.ejemplolayout')

@section('titulo', 'Página01 del proyecto')


@section('barralateral')

    <p> Esta parte está en la barra lateral</p>
@endsection



@section('contenido')

    <p> Este está en el body</p>

    <a href="{{ url('pagina02') }}" class="=btn btn-xs btn-info pull-rigth">página 02 </a>

@endsection