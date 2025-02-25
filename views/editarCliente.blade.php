@extends('menu')
@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Editar Cliente</h2>
    <form action="{{ route('cliente.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="cif">CIF</label>
            <input type="text" class="form-control" id="cif" name="cif" value="{{ $cliente->cif }}" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $cliente->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $cliente->telefono }}" required>
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" value="{{ $cliente->correo }}" required>
        </div>
        <div class="form-group">
            <label for="cuenta_corriente">Cuenta Corriente</label>
            <input type="text" class="form-control" id="cuenta_corriente" name="cuenta_corriente" value="{{ $cliente->cuenta_corriente }}" required>
        </div>
        <div class="form-group">
            <label for="pais">País</label>
            <input type="text" class="form-control" id="pais" name="pais" value="{{ $cliente->pais }}" required>
        </div>
        <div class="form-group">
            <label for="moneda">Moneda</label>
            <input type="text" class="form-control" id="moneda" name="moneda" value="{{ $cliente->moneda }}" required>
        </div>
        <div class="form-group">
            <label for="cuota_mensual">Importe Cuota Mensual</label>
            <input type="number" class="form-control" id="cuota_mensual" name="cuota_mensual" value="{{ $cliente->importe_cuota_mensual }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('cliente.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

@endsection