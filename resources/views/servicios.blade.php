@extends('layout')

@section('title', 'Servicios')

@section('content')
<tr>
    <td colspan="4">
        <a href="{{ route('servicios.create') }}"><strong>Nuevo Servicio</strong></a><br>
    </td>
</tr>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $errors }}</li>
        @endforeach
    </ul>
@endif
<tr>
    <th colspan="4">Listado de Servicio</th>
</tr>
<table>
    <tr>

    @if($servicios)
        @foreach($servicios as $servicio)
        <tr>
            <td colspan="4">
            <a href="{{ route('servicios.show',$servicio) }}">{{ $servicio->titulo }}</a>
            </td>
        </tr>
        @endforeach
    @else
        <td colspan="4">No hay servicios que mostrar</td>
    @endif
    </tr>
</table>

<tr>
    <td colspan="4">
        <div class="pagination-wrapper">
            {{ $servicios->links('vendor.pagination.bootstrap-4') }}
        </div>
    </td>
</tr>

@endsection
