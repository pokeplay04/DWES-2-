@extends('menu')
@section('content')

<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
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

    form input,
    form select,
    form button {
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

<body>
    <div class="form-container">
        <h2>Formulario de Cliente</h2>
        <form action="{{ url('operario') }}" method="POST">
            @csrf
            <!-- CIF -->
            <div class="form-group">
                <label for="cif">CIF</label>
                <input type="text" id="cif" name="cif" class="form-control" placeholder="CIF del cliente" required>
            </div>

            <!-- Nombre -->
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre del cliente" required>
            </div>

            <!-- Correo -->
            <div class="form-group">
                <label for="correo">Correo Electrónico</label>
                <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo electrónico" required>
            </div>

            <!-- Teléfono -->
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Número de teléfono" required>
            </div>

            <!-- Direccion -->
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Número de Direccion" required>
            </div>

            <!-- Fecha de alta -->
            <div class="form-group">
                <label for="fecha_alta">Fecha de Alta</label>
                <input type="text" id="fecha_alta" name="fecha_alta" class="form-control" placeholder="Fecha" required>
            </div>

             <!-- Tipo -->
             <div class="form-group">
                <label for="operario">Tipo de operario</label>
                <select id="operario" name="operario" class="form-control" required>
                    <option value="Administrador">Administrador</option>
                    <option value="Operario">Operario</option>
                </select>
            </div>


            <!-- Botón de envío -->
            <button type="submit" class="btn btn-primary btn-block">Guardar Cliente</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

@endsection