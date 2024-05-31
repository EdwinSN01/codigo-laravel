@extends('layout')
@section('title', 'Servicio')
@section('content')
<h2>Servicios</h2>
<ul>
@foreach($servicios as $item)
<li>{{ $item['titulo'] }}</li>
@endforeach
</ul>
@endsection