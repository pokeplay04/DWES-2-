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
<body>
    <div class="form-container">
        <h2>Formulario de Cliente</h2>
        <form action="{{ url('cliente') }}" method="POST">
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

            <!-- Teléfono -->
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Número de teléfono" required>
            </div>

            <!-- Correo -->
            <div class="form-group">
                <label for="correo">Correo Electrónico</label>
                <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo electrónico" required>
            </div>

            <!-- Cuenta corriente -->
            <div class="form-group">
                <label for="cuenta_corriente">Cuenta Corriente</label>
                <input type="text" id="cuenta_corriente" name="cuenta_corriente" class="form-control" placeholder="Número de cuenta corriente" required>
            </div>

            <!-- País -->
            <div class="form-group">
                <label for="pais">País</label>
                <select id="pais" name="pais" class="form-control" required>
                    <option value="" disabled selected>Seleccione un país</option>
                    <option value="ES">España</option>
                    <option value="FR">Francia</option>
                    <option value="DE">Alemania</option>
                    <option value="IT">Italia</option>
                    <option value="US">Estados Unidos</option>
                    <!-- Agregar más países según sea necesario -->
                </select>
            </div>

            <!-- Moneda -->
            <div class="form-group">
                <label for="moneda">Moneda</label>
                <select id="moneda" name="moneda" class="form-control" required>
                    <option value="" disabled selected>Seleccione una moneda</option>
                    <option value="EUR">Euro (€)</option>
                    <option value="USD">Dólar estadounidense ($)</option>
                    <option value="GBP">Libra esterlina (£)</option>
                    <option value="JPY">Yen japonés (¥)</option>
                    <!-- Agregar más monedas si es necesario -->
                </select>
            </div>

            <!-- Importe cuota mensual -->
            <div class="form-group">
                <label for="cuota_mensual">Importe de la Cuota Mensual</label>
                <input type="number" id="cuota_mensual" name="cuota_mensual" class="form-control" placeholder="Cuota mensual (€)" step="0.01" required>
            </div>

            <!-- Botón de envío -->
            <button type="submit" class="btn btn-primary btn-block">Guardar Cliente</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

@endsection