@extends('menu')
@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Lista de Tareas</h2>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Persona de Contacto</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Dirección</th>
                <th>Población</th>
                <th>Código Postal</th>
                <th>Provincia</th>
                <th>Estado</th>
                <th>Fecha Creación</th>
                <th>Fecha Realización</th>x
                <th>Descripción</th>
                <th>Anotaciones Anteriores</th>
                <th>Anotaciones Posteriores</th>
                <th>Fichero Resumen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tareas as $tarea)
                <tr>
                    <td>{{ $tarea->id }}</td>
                    <td>{{ $tarea->persona_contacto }}</td>
                    <td>{{ $tarea->telefono_contacto }}</td>
                    <td>{{ $tarea->correo_contacto }}</td>
                    <td>{{ $tarea->direccion }}</td>
                    <td>{{ $tarea->poblacion }}</td>
                    <td>{{ $tarea->codigo_postal }}</td>
                    <td>{{ $tarea->provincia }}</td>
                    <td>{{ $tarea->descripcion }}</td>
                    <td>{{ $tarea->estado }}</td>
                    <td>{{ $tarea->fecha_creacion }}</td>
                    <td>{{ $tarea->fecha_realizacion }}</td>
                    <td>{{ $tarea->anotaciones_anteriores }}</td>
                    <td>{{ $tarea->anotaciones_posteriores }}</td>
                    <td>{{ $tarea->fichero_resumen }}</td>
                    <td>
                        @if ($tarea->fichero_resumen)
                            <a href="{{ asset('storage/' . $tarea->fichero_resumen) }}" target="_blank">Ver archivo</a>
                        @else
                            No disponible
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $tareas->links() }}
    </div>
</div>

@endsection    