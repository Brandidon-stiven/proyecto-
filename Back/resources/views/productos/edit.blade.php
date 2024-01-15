@extends('layout/plantilla')

@section('titulo', 'actualiza productos|inventario')
    
@section('contenido')
<link rel="stylesheet" href="{{ asset ('css/bienvenido.css') }}">
<link rel="stylesheet" href="{{ asset ('css/app.css') }}">

        <main>
            

                @if ($errors->any())
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors-->all() as $erro)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{route('productos.update',$producto->id)}}" method="post">
                @csrf
                @method('PUT')

                <nav>
                    <div class="row">
                        <div class="col-md-3 col-ms-12"> <img src="{{ asset('img/Sin titulo-2.png') }}" alt="logo empresa"></div>
                        <div class="col-md-3 col-ms-12"><p>INICIO</p></div>
                        <div class="col-md-3 col-ms-12"><h2>BIENVENIDO</h2></div>
                        <div class="col-md-3 col-ms-12"><button class="btn btn-success">Cerrar Sesión</button></div>
                    </div>
                </nav>
                <section class="centro">

                    <div class="container py-4">
                        <h2>Actualiza un Producto</h2></div>
               
    
                   <!--codigo producto -->
                   

                    <div class="mb-3 row">
                        <label for="Nombre" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-5">
                        <input type="char" name="Nombre" id="Nombre" class="form-control" value="{{($producto->Nombre)}}" required>
                    </div>
                </div>


                    <div class="mb-3 row">
                        <label for="Tipo" class="col-sm-2 col-form-label">Tipo:</label>
                        <div class="col-sm-5">
                        <input type="char" name="Tipo" id="Tipo" class="form-control" value="{{($producto->Tipo)}}" required>
                    </div>
                </div>

                    <div class="mb-3 row">
                        <label for="Precio" class="col-sm-2 col-form-label">Precio:</label>
                        <div class="col-sm-5">
                        <input type="char" name="Precio" id="Precio" class="form-control" value="{{($producto->Precio)}}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="Stock" class="col-sm-2 col-form-label">Stock:</label>
                    <div class="col-sm-5">
                    <input type="char" name="Stock" id="Stock" class="form-control" value="{{($producto->Stock)}}" required>
                </div>
            </div>

                <a href="{{url('productos')}}" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>

                </form>
               
            </div>

        
        </div>
        
    </section>

    
