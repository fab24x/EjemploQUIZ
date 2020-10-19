@extends('layouts.ejemplolayout')

@section('titulo', 'Página02 del proyecto')


@section('barralateral')
    @parent
    <p> Esta parte está en la barra lateral</p>
@endsection



@section('contenido')

    <h3>Esto está en el body de la página 02</h3>

    <a href="{{ url('/') }}" class="=btn btn-xs btn-info pull-rigth">página 01 </a>
    
@endsection