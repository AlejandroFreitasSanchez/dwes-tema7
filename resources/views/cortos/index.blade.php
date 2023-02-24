@extends('plantilla')

@section('titulo', 'Listado de cortos')

@section('contenido')

<div class="row" style="padding: 20px;">
    @forelse ($cortos as $corto )
    <div class="col-3 my-3">
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Titulo: {{ $corto->titulo }}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Director: {{$corto->director->nombre}}  {{$corto->director->apellidos}}</li>
                <li class="list-group-item"><a class="btn btn-primary btn-rounded" href="{{ route('cortos.show', ['corto' => $corto->id]) }}">Ver corto</a></li>
            </ul>
        </div>
    </div>
    @empty
    No hay elementos que mostrar
    @endforelse
</div>

@endsection