@extends('layouts.master')

@section('title', 'Servicio | ' . $servicio->titulo)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <!-- Imagen del Servicio -->
                @if($servicio->image)
                    <img src="{{ asset('storage/' . $servicio->image) }}" class="card-img-top" alt="{{ $servicio->titulo }}">
                @endif

                <div class="card-body">
                    <!-- Título y Botones -->
                    <h5 class="card-title">{{ $servicio->titulo }}</h5>
 
                    <!-- Descripción -->
                    <p class="card-text">{{ $servicio->descripcion }}</p>

                    <!-- Información adicional -->
                    <p class="card-text"><small class="text-muted">{{ $servicio->created_at->diffForHumans() }}</small></p>

                    <!-- Botones de acción -->
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('servicios.edit', $servicio) }}" class="btn btn-warning">Editar</a>

                        <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

