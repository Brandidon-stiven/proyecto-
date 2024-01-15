<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset ('css/registro.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
    <title>Registro</title>
</head>
<body>
    <div class="container">
        <img src="{{ asset('img/Sin título-2.png') }}" class="avatar" alt="Avatar Image">
        <form action="{{route('login')}}" method="post">
            @csrf
            <h2>Registro de Usuario</h2>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>

            <label for="confirmar_contrasena">Confirmar Contraseña:</label>
            <input type="password" id="confirmar_contrasena" name="confirmar_contrasena" required>

            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>