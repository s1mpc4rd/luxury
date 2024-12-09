<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario Logueado</title>
</head>
<body>
    <h1>Bienvenido, {{ $usuario->nombre }} {{ $usuario->apellido }}</h1>

    <form action="{{ route('logout') }}" method="POST" style="margin-top: 20px;">
        @csrf
        <button type="submit">Cerrar Sesión</button>
    </form>
</body>
</html>
