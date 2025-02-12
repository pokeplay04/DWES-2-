<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 400px;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            font-weight: bold;
            color: #343a40;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .form-text {
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="text-center mb-4">Iniciar Sesión</h2>
        <form action="/mi-proyecto2/public/login" method="POST">
            @csrf
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" value="{{ $usuario ?? '' }}" class="form-control" placeholder="Ingresa tu usuario" required>
                <small id="errorusuario" class="form-text text-danger"></small>
            </div>

            <div class="form-group">
                <label for="contr">Contraseña</label>
                <input type="password" id="contr" name="password" class="form-control" placeholder="Ingresa tu contraseña" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>

            @if (isset($error))
                <div class="alert alert-danger mt-3" role="alert">
                    {{ $error }}
                </div>
            @endif
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>