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
            margin: 20px;
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
    <form action="/guardar-datos" method="POST">
        <div>
            <label for="cif">CIF</label>
            <input type="text" id="cif" name="cif" placeholder="Introduce el CIF" required>
        </div>
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Introduce el nombre" required>
        </div>
        <div>
            <label for="telefono">Teléfono</label>
            <input type="tel" id="telefono" name="telefono" placeholder="Introduce el teléfono" required>
        </div>
        <div>
            <label for="correo">Correo</label>
            <input type="email" id="correo" name="correo" placeholder="Introduce el correo" required>
        </div>
        <div>
            <label for="cuenta">Cuenta Corriente</label>
            <input type="text" id="cuenta" name="cuenta" placeholder="Introduce la cuenta corriente" required>
        </div>
        <div>
            <label for="pais">País</label>
            <select id="pais" name="pais" required>
                <option value="" disabled selected>Selecciona un país</option>
                <option value="España">España</option>
                <option value="México">México</option>
                <option value="Argentina">Argentina</option>
                <option value="Estados Unidos">Estados Unidos</option>
                <option value="Reino Unido">Reino Unido</option>
                <!-- Agrega más países según tus necesidades -->
            </select>
        </div>
        <div>
            <label for="moneda">Moneda</label>
            <select id="moneda" name="moneda" required>
                <option value="" disabled selected>Selecciona una moneda</option>
                <option value="EUR">Euro (EUR)</option>
                <option value="USD">Dólar (USD)</option>
                <option value="MXN">Peso Mexicano (MXN)</option>
                <option value="ARS">Peso Argentino (ARS)</option>
                <option value="GBP">Libra Esterlina (GBP)</option>
                <!-- Agrega más monedas según tus necesidades -->
            </select>
        </div>
        <div>
            <label for="importe">Importe Cuota Mensual</label>
            <input type="number" id="importe" name="importe" placeholder="Introduce el importe" step="0.01" required>
        </div>
        <button type="submit">Guardar</button>
    </form>