@extends('layout')

@section('title','Servicio | ' . $servicio->titulo)

@section('content')
<tr>
    <td colspan="4">{{ $servicio->titulo }}
    <a href="{{ route('servicios.edit',$servicio) }}">Editar</a>
    </td> 
    <td colspan="2">
    <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" style="display:inline;">
        @csrf @method('DELETE')
        <button>Eliminar</button>
    </form>
</tr>
<tr>
    <td colspan="4">{{ $servicio->titulo }}</td>
</tr>
<tr>
    <td colspan="4">{{ $servicio->descripcion }}</td>
</tr>
<tr>
    <td colspan="4">{{ $servicio->created_at->diffForHumans() }}</td>
</tr>
@endsection