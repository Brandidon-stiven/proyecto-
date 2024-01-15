@extends('layout/plantilla')

@section('titulo', 'insumos|inventario')
    
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
                <section class="centro">
                <div class="container py-4" style="float:right">
                    <h2>Listado de Insumos</h2>
                    <a href="{{url('insumos/create')}}"class="btn btn-primary btn-sm">Nuevo</a>
                    
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Marca</th>
                                <th>Tipo</th>
                                <th>Precio</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($insumos as $insumo)
                                <tr>
                                    <td>{{$insumo->id}}</td>
                                    <td>{{$insumo->Nombre}}</td>
                                    <td>{{$insumo->Marca}}</td>
                                    <td>{{$insumo->Tipo}}</td>
                                    <td>{{$insumo->Precio}}</td>
                                    <td></td>
                                    <td><a href="{{route('insumos.edit',$insumo->id)}}"class="btn btn-warning btn-sm">Actualizar</a></td>
                                        <td>
                                      <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{$insumo->id}}">
                                     Eliminar
                                    </button>
      
                                        </td>
                                    </td>
                                </tr>
                                @include('insumos.delete')
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
        
        
       

