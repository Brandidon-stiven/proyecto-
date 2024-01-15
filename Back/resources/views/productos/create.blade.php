@extends('layout/plantilla')

@section('titulo', 'crear productos|agricola')
    
@section('contenido')

        <main>
            <div class="container py-4">
                <h2>Agrega un Producto</h2>

                @if ($errors->any())
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors-->all() as $erro)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{url('productos')}}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="Codigo_Producto" class="col-sm-2 col-form-label">Codigo_Producto:</label>
                        <div class="col-sm-5">
                        <input type="char" name="Codigo_Producto" id="Codigo_Producto" class="form-control" value="{{old('Codigo_Producto')}}" required>
                    </div>
                </div>

                    <div class="mb-3 row">
                        <label for="Nombre" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-5">
                        <input type="char" name="Nombre" id="Nombre" class="form-control" value="{{old('Nombre')}}" required>
                    </div>
                </div>

                    <div class="mb-3 row">
                        <label for="Tipo" class="col-sm-2 col-form-label">Tipo:</label>
                        <div class="col-sm-5">
                        <input type="char" name="Tipo" id="Tipo" class="form-control" value="{{old('Tipo')}}" required>
                    </div>
                </div>

                    <div class="mb-3 row">
                        <label for="Precio" class="col-sm-2 col-form-label">Precio:</label>
                        <div class="col-sm-5">
                        <input type="char" name="Precio" id="Precio" class="form-control" value="{{old('Precio')}}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="Stock" class="col-sm-2 col-form-label">Stock:</label>
                    <div class="col-sm-5">
                    <input type="char" name="Stock" id="Stock" class="form-control" value="{{old('Stock')}}" required>
                </div>
            </div>

                <a href="{{url('productos')}}" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>

                </form>
               
            </div>

        </main>
