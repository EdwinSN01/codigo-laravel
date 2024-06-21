@extends('layout')

@section('title', 'Servicios')

@section('content')
<div class="container">
    <h1>Listado de Servicios</h1>

    <a href="{{ route('servicios.create') }}" class="btn btn-primary mb-3"><strong>Nuevo Servicio</strong></a>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Título</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($servicios as $servicio)
                <tr>
                    <td>
                        <a href="{{ route('servicios.show', $servicio) }}">{{ $servicio->titulo }}</a>
                    </td>
                    <td>
                        <a href="{{ route('servicios.edit', $servicio) }}" class="btn btn-secondary btn-sm">Editar</a>
                        <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">No hay servicios que mostrar</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>



<tr>
    <td colspan="4">
        <div class="pagination-wrapper">
            {{ $servicios->links('vendor.pagination.bootstrap-4') }}
        </div>
    </td>
</tr>

@endsection
