@extends('plantilla')

@section('titulo', 'Listado de cortos')

@section('contenido')

<ul>
    @forelse($cortos as $corto)
        <li>Titulo: {{ $corto['titulo'] }}</br>
            Autor: {{$corto['autor']}}
        </li>
    @empty
        <li>No hay elementos que mostrar</li>
    @endforelse
</ul>

@endsection