@extends('layout.plantilla')
@section('titulo','Ventas ')

@section('contenido')
<link rel="stylesheet" href="{{ asset ('css/bienvenido.css') }}">
<link rel="stylesheet" href="{{ asset ('css/app.css') }}">
    <main>
        <nav>
            <div class="row">
                <div class="col-md-3 col-ms-12"> <img src="{{ asset('img/Sin título-2.png') }}" alt="logo empresa"></div>
                <div class="col-md-3 col-ms-12"><p>INICIO</p></div>
                <div class="col-md-3 col-ms-12"><h2>BIENVENIDO</h2></div>
                <div class="col-md-3 col-ms-12"><button class="btn btn-success">Cerrar Sesión</button></div>
            </div>
        </nav>
        <div class="container py-4" style="float:right">
            <h2>BIENVENIDO A LA SECCIÓN DE VENTAS </h2>
            <a href="{{ url('ventas/create') }}" class="btn btn-primary btn-sm">Nuevo</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha Venta</th>
                        <th>Valor Total</th>
                        <th>Empresas Aliadas ID</th>
                        <th>Usuarios ID</th>
                        <th>Acciones</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ventas as $venta)
                        <tr>
                            <td>{{ $venta->id }}</td>
                            <td>{{ $venta->fecha_venta }}</td>
                            <td>{{ $venta->valor_total }}</td>
                            <td>{{ $venta->empresas_aliadas_id }}</td>
                            <td>{{ $venta->usuarios_id }}</td>
                            <td>
                                <a href="{{ url('ventas/'.$venta->id.'/edit') }}" class="btn btn-warning btn-sm">Actualizar</a>
                            </td>
                            <td>
                                <!-- Formulario para el botón de eliminar -->
                                <form action="{{ url('ventas/'.$venta->id) }}" method="post" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta venta?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
                        <button class="boton" onclick="redirectInsumos()">Inventario</button>
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

