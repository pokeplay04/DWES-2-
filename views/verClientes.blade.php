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
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $clientes->links() }}
    </div>
</div>

@endsection    