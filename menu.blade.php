<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Ortodoncias MasticaLadrillos S.L</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/menu.css') }}">
</head>
<body>
    <!-- Header -->
    <header class="bg-primary text-white p-3 d-flex justify-content-between align-items-center shadow-sm">
        <h1 class="h4 mb-0">Ortodoncias MasticaLadrillos S.L</h1>
        <a href="{{ url('login') }}" class="btn btn-light btn-sm">Cerrar sesión</a>
    </header>

    <!-- Menú de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav w-100 justify-content-around">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('inicio') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('tarea') }}">Ver lista de tareas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('tarea/create') }}">Añadir tarea</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('tarea/') }}">Añadir cliente</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container my-4">
        <div>
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center p-3 shadow-sm">
        <p class="mb-0">Derechos reservados a Ortodoncias MasticaLadrillos S.L</p>
    </footer>

    <!-- Bootstrap JS (opcional, solo si necesitas funcionalidades JS de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>