@extends('layout')

@section('title', 'Crear Servicio')

@section('content')
<div class="container">
    <h1>Editar servicio</h1>
@include('partials.validation-errors')
    <form action="{{ route('servicios.update',$servicio) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo"  class="form-control" value="{{ old('titulo') }}" required><br> {{$errors->first('titulo') }} <value="{{'titulo','$servicio->titulo'}}"></td> 
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" id="descripcion" name="descripcion" class="form-control" value="{{ old('descripcion') }}" required><br> {{$errors->first('descripcion') }} <value="{{$servicio->descripcion}}"></td>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
<form action="{{ route('servicios.update', $servicio) }}" method="POST">
    @csrf
    @method('PATCH') {{-- O 'PATCH' --}}
    
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo', $servicio->titulo) }}" required>
    </div>
    
    <div class="form-group">
        <label for="descripcion">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion">{{ old('descripcion', $servicio->descripcion) }}</textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
</form>
@endsection
