<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>login</title>
 <link rel="stylesheet" href="{{ asset ('css/login.css') }}">
 <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
</head>
<body>
    <div class="login-box">
        <img src="{{ asset('img/Sin título-2.png') }}" class="avatar" alt="Avatar Image">
        <h1>Ingresar ahora</h1>
        <form action="{{route('login')}}" method="post">
            @csrf
          <!-- USERNAME INPUT -->
          <label for="Nombre de usuario">Nombre</label>
          <input type="text" placeholder="Ingresa tu nombre">
          <!-- PASSWORD INPUT -->
          <label for="Contraseña">Contraseña</label>
          <input type="password" placeholder="Ingresa tu Contraseña">
          <input type="submit" value="Iniciar">
         
          <a href="{{route('registro')}}">Registrate ahora</a>
        </form>
      </div>
    
</body>
</html>