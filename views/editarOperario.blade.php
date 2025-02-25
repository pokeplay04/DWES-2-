@extends('menu')
@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Editar Operario</h2>
    <form action="{{ route('operario.update', $operario->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group mb-3">
            <label for="dni">DNI:</label>
            <input type="text" class="form-control" id="dni" name="dni" value="{{ $operario->dni }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $operario->nombre }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="correo">Correo:</label>
            <input type="email" class="form-control" id="correo" name="correo" value="{{ $operario->correo }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="telefono">Teléfono:</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $operario->telefono }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="direccion">Dirección:</label>
            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $operario->direccion }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="fecha_alta">Fecha de Alta:</label>
            <input type="date" class="form-control" id="fecha_alta" name="fecha_alta" value="{{ $operario->fecha_alta }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="tipo">Tipo:</label>
            <input type="text" class="form-control" id="tipo" name="tipo" value="{{ $operario->tipo }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Operario</button>
        <a href="{{ route('operario.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

@endsection