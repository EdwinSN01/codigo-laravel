@extends('layout')

@section('title', 'Servicios')

@section('content')
<h2>Servicios</h2>
<table>
    <tr>
    @if($servicios)
        @foreach($servicios as $item)
            <td>{{ $item->titulo }}<br>{{ $item->descripcion }}</td>
            
        @endforeach
    @else
        <li>No hay servicios disponibles</li>
    @endif
    </tr>
</table>
<!--
<tr>
    <td colspan="4"></td>
</tr> -->
@endsection