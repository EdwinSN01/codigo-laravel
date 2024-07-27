@extends('layouts.master')

@section('title', 'Crear Servicio')

@section('content')
<div class="container">
    <h1>Crear nuevo servicio</h1>
@include('partials.validation-errors')
</form>
    <form action="{{ route('servicios.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo"  class="form-control" value="{{ old('titulo') }}" required><br> {{$errors->first('titulo') }}</td>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" id="descripcion" name="descripcion" class="form-control" value="{{ old('descripcion') }}" required><br> {{$errors->first('descripcion') }}</td>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>

        <div class="form-group">
            <label for="image">Imagen:</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
    </form>
</div>
@endsection
