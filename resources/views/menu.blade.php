<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/menu.css') }}" >
    <title>Inicio</title>
</head>
<body>
    <header>
        Proyecto PHP Alejandro García 2ºDaw <a href=""><p>Cerrar sesión</p></a>
    </header>
    <div class="menu" id="sidebar">
        <a href=""><p>· Inicio</p></a>
        <a href=""><p>· Ver lista de tareas</p></a>
        <a href=""><p>· Añadir tarea</p></a>
    </div>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>