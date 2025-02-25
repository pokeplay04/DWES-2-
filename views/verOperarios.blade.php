@extends('menu')
@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Lista de Operarios</h2>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Fecha de Alta</th>
                <th>Tipo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($operarios as $operario)
                <tr>
                    <td>{{ $operario->id }}</td>
                    <td>{{ $operario->dni }}</td>
                    <td>{{ $operario->nombre }}</td>
                    <td>{{ $operario->correo }}</td>
                    <td>{{ $operario->telefono }}</td>
                    <td>{{ $operario->direccion }}</td>
                    <td>{{ $operario->fecha_alta }}</td>
                    <td>{{ $operario->tipo }}</td>
                    <td>
                        <form action="{{ route('operario.destroy', $operario->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                        <a href="{{ route('operario.edit', $operario->id) }}" class="btn btn-primary">Modificar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $operarios->links() }}
    </div>
</div>

@endsection