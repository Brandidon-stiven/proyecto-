<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layout.plantilla')
@section('titulo','compras ')

@section('contenido')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compras/Ventas</title>
    <link rel="stylesheet" href="{{ asset ('css/bienvenido.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
</head>
<body>
    <nav>
        <div class="row">
            <div class="col-md-3 col-ms-12"> <img src="{{ asset('img/Sin título-2.png') }}" alt="logo empresa"></div>
            <div class="col-md-3 col-ms-12"><p>INICIO</p></div>
            <div class="col-md-3 col-ms-12"><h2>BIENVENIDO</h2></div>
            <div class="col-md-3 col-ms-12"><button class="btn btn-success">Cerrar Sesión</button></div>
        </div>
    </nav>
    <div class="container py-4" style="float:right">
    <div class="">
        <div>
            <button class="btn btn-secondary boton" onclick="redirectToCompras()">Compras</button>
            <script>
                function redirectToCompras() {
                    window.location.href = "{{ route('compras') }}";
                }
                
            </script>
        </div>
    </div>

    <div class="">
        <div>
            <button class="btn btn-success boton" onclick="redirectToVentas()">Ventas</button>
            <script>
                function redirectToVentas() {
                    window.location.href = "{{ route('ventas') }}";
                }
                
            </script>
        </div>
    </div>
</div> 

<div class="row tamano">
    <div class="col-md-4 lista">
        <div class="row">
            <br>
        </div>
        <div class="row">
            <div>
                <button class="boton" onclick="redirectToProductos()">Agricola</button>
                <script>
                    function redirectToProductos() {
                        window.location.href = "{{ route('productos') }}";
                    }
                </script>
            </div>
        </div>
        <div class="row">
            <br>
        </div>
        <div class="row">
            <div>
                <button class="boton" onclick="redirectToInsumos()">Inventario</button>
                <script>
                    function redirectToInsumos() {
                        window.location.href = "{{ route('insumos') }}";
                    }
                    
                </script>
            </div>
        </div>
        <div class="row">
            <br>
        </div>
        <div class="row">
            <div>
                <button class="boton" onclick="redirectToMantenimiento()">Mantenimiento</button>
                <script>
                    function redirectToMantenimiento() {
                        window.location.href = "{{ route('Mantenimiento') }}";
                    }
                    
                </script>
            </div>
        </div>
        <div class="row">
            <br>
        </div>
        <div class="row">
            <div>
                <button class="boton" onclick="redirectToVistabotones()">Compra y Venta</button>
                <script>
                    function redirectToVistabotones() {
                        window.location.href = "{{ route('vistabotones') }}";
                    }
                    
                </script>
            </div>
        </div>
        <div class="row">
            <br>
        </div>
    </div>
</div>
</section>

<footer class="row" id="row-pie">
    <div class="container">
      <div class="row">

        

        <div class=" col grupo2 text-center">
          <a href="https://www.facebook.com/"><img src="{{ asset('img/icono-facebook.png') }}" alt="Facebook"></div>
          <a href="https://www.instagram.com/"><img src="{{ asset('img/icono-instagram.png') }}" alt="Instagram"></a>
          <a href="https://twitter.com/"><img src="{{ asset('img/tiwitter-icono.png') }}" alt="Twitter"></a>
          

        </div>

        


      </div> 




    </div>

    <div class="pie-bajo">
      <p class="text-center"> &copy; 2023 Copyright <a href="#row-contacto">Generado por: AGROLINE</a> </p>
    </div>


  </footer>
</main>

</body>
</html>