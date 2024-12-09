<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form action="{{ route('login') }}" method="POST">
    @csrf
    <label for="email">Correo Electrónico:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit">Iniciar Sesión</button>
</form>


    @if (session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif
</body>
</html>
