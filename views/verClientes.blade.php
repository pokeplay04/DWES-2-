@extends('menu')
@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Lista de Clientes</h2>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>CIF</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Cuenta Corriente</th>
                <th>País</th>
                <th>Moneda</th>
                <th>Importe Cuota Mensual</th>
                <th> Acciones </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->cif }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>{{ $cliente->correo }}</td>
                    <td>{{ $cliente->cuenta_corriente }}</td>
                    <td>{{ $cliente->pais }}</td>
                    <td>{{ $cliente->moneda }}</td>
                    <td>{{ $cliente->importe_cuota_mensual }}</td>
                    <td>
                        <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                        <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-primary">Modificar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $clientes->links() }}
    </div>
</div>

@endsection    