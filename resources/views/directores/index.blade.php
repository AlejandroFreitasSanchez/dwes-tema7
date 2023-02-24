@extends('plantilla')

@section('titulo', 'Listado de directores')

@section('contenido')

<div class="row" style="padding: 20px;">
    @forelse ($directores as $director )
    <div class="col-3 my-3">
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Nombre: {{ $director->nombre}} {{$director->apellidos }}
            </div>
            <ul class="list-group list-group-flush">
                @forelse ($director->cortos as $corto)
                    <li class="list-group-item">Corto: {{ $corto->titulo }}</li>
                @empty
                No tiene ningun corto
                @endforelse
            </ul>
        </div>
    </div>
    @empty
    No hay elementos que mostrar
    @endforelse
</div>

@endsection