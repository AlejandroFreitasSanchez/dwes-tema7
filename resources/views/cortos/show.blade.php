@extends('plantilla')

@section('titulo', 'Detalle de corto')

@section('contenido')

@isset($corto)
<div class="card">
    <div class="card-header">
        <h1>Titulo: {{ $corto->titulo }}</h1>
    </div>
    <div>
        <h3>Dirigido por: {{ $corto->director->nombre}} {{$corto->director->apellidos }}</h3>
        <h3>Subido por: {{ $corto->usuario->name}}</h3>
        <p>Sinapsis: {{ $corto->sinopsis }}</p>
        <a class="btn btn-primary btn-rounded" href="{{ route('cortos.index') }}">Volver atrás</a>
    </div>
</div>
@else
El corto no existe
@endisset

@endsection