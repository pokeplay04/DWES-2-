@extends('menu')
@section('content')



<?php
$provincias = [
    'Álava', 'Albacete', 'Alicante', 'Almería', 'Asturias', 'Ávila', 'Badajoz', 'Baleares', 'Barcelona', 'Burgos',
    'Cáceres', 'Cádiz', 'Cantabria', 'Castellón', 'Ciudad Real', 'Córdoba', 'Cuenca', 'Gerona', 'Granada', 'Guadalajara',
    'Guipúzcoa', 'Huelva', 'Huesca', 'Jaén', 'La Coruña', 'La Rioja', 'Las Palmas', 'León', 'Lérida', 'Lugo',
    'Madrid', 'Málaga', 'Murcia', 'Navarra', 'Orense', 'Palencia', 'Pontevedra', 'Salamanca', 'Santa Cruz de Tenerife', 'Segovia',
    'Sevilla', 'Soria', 'Tarragona', 'Teruel', 'Toledo', 'Valencia', 'Valladolid', 'Vizcaya', 'Zamora', 'Zaragoza'
];
?>
<style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        form div {
            margin-bottom: 15px;
        }
        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        form input, form select, form button {
            width: 100%;
            padding: 8px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form button {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<body>
    <div class="form-container">
        <h2>Formulario de Tareas</h2>
        @if($errors->any())
            {{ implode('', $errors->all(':message')) }}
        @endif
        <form action= "{{ url('tareas') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Persona de contacto -->
            <div class="form-group">
                <label for="contacto">Persona de Contacto</label>
                <input type="text" id="contacto" name="contacto" class="form-control" placeholder="Nombre y apellidos" required>
            </div>

            <!-- Teléfono -->
            <div class="form-group">
                <label for="telefono">Teléfono de Contacto</label>
                <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Número de teléfono" required>
            </div>

            <!-- Correo electrónico -->
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Correo electrónico" required>
            </div>

            <!-- Dirección -->
            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Dirección" required>
            </div>

            <!-- Población -->
            <div class="form-group">
                <label for="poblacion">Población</label>
                <input type="text" id="poblacion" name="poblacion" class="form-control" placeholder="Población" required>
            </div>

            <!-- Código postal -->
            <div class="form-group">
                <label for="codigo_postal">Código Postal</label>
                <input type="text" id="codigo_postal" name="codigo_postal" class="form-control" placeholder="Código postal" required>
            </div>

            <!-- Provincia -->
            <div class="form-group">
                <label for="provincia">Provincia</label>
                <select id="provincia" name="provincia" class="form-control" required>
                    <option value="" disabled selected>Seleccione una provincia</option>
                    @foreach ($provincias as $provincia)
                        <option value="{{ $provincia }}">{{ $provincia }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Descripción -->
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="form-control" rows="3" placeholder="Descripción de la tarea" required></textarea>
            </div>

            <!-- Estado -->
            <div class="form-group">
                <label for="estado">Estado</label>
                <select id="estado" name="estado" class="form-control" required>
                    <option value="P">Pendiente</option>
                    <option value="R">Realizada</option>
                    <option value="C">Cancelada</option>
                </select>
            </div>

            <!-- Fecha de realización -->
            <div class="form-group">
                <label for="fecha_realizacion">Fecha de Realización</label>
                <input type="date" id="fecha_realizacion" name="fecha_realizacion" class="form-control" required>
            </div>

            <!-- Cliente encargado -->
            <div class="form-group">
                <label for="cliente">Cliente Encargado</label>
                <select id="cliente" name="cliente" class="form-control" required>
                    <option value="" disabled selected>Seleccione un cliente</option>
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Operario encargado -->
            <div class="form-group">
                <label for="operario">Operario Encargado</label>
                <select id="operario" name="operario" class="form-control" required>
                    <option value="" disabled selected>Seleccione un operario</option>
                    @foreach ($operarios as $operario)
                        <option value="{{ $operario->id }}">{{ $operario->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Anotaciones anteriores -->
            <div class="form-group">
                <label for="anotaciones_anteriores">Anotaciones Anteriores</label>
                <textarea id="anotaciones_anteriores" name="anotaciones_anteriores" class="form-control" rows="3" placeholder="Notas antes de realizar la tarea"></textarea>
            </div>

            <!-- Anotaciones posteriores -->
            <div class="form-group">
                <label for="anotaciones_posteriores">Anotaciones Posteriores</label>
                <textarea id="anotaciones_posteriores" name="anotaciones_posteriores" class="form-control" rows="3" placeholder="Notas después de realizar la tarea"></textarea>
            </div>

            <!-- Fichero resumen -->
            <div class="form-group">
                <label for="fichero_resumen">Fichero Resumen</label>
                <input type="file" id="fichero_resumen" name="fichero_resumen" class="form-control-file">
            </div>

            <!-- Botón de envío -->
            <button type="submit" class="btn btn-primary btn-block">Guardar Tarea</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection