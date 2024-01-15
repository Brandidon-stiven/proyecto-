@extends('layout/plantilla')

@section('titulo', 'actualiza insumos|inventario')
    
@section('contenido')

        <main>
            <div class="container py-4">
                <h2>Actualiza un Insumo</h2>

                @if ($errors->any())
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors-->all() as $erro)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{route('insumos.update',$insumo->id)}}" method="post">
                @csrf
                @method('PUT')

                    <div class="mb-3 row">
                        <label for="Nombre" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-5">
                        <input type="char" name="Nombre" id="Nombre" class="form-control" value="{{($insumo->Nombre)}}" required>
                    </div>
                </div>

                    <div class="mb-3 row">
                        <label for="Marca" class="col-sm-2 col-form-label">Marca:</label>
                        <div class="col-sm-5">
                        <input type="char" name="Marca" id="Marca" class="form-control" value="{{($insumo->Marca)}}" required>
                    </div>
                </div>

                    <div class="mb-3 row">
                        <label for="Tipo" class="col-sm-2 col-form-label">Tipo:</label>
                        <div class="col-sm-5">
                        <input type="char" name="Tipo" id="Tipo" class="form-control" value="{{($insumo->Tipo)}}" required>
                    </div>
                </div>

                    <div class="mb-3 row">
                        <label for="Precio" class="col-sm-2 col-form-label">Precio:</label>
                        <div class="col-sm-5">
                        <input type="char" name="Precio" id="Precio" class="form-control" value="{{($insumo->Precio)}}" required>
                    </div>
                </div>

                <a href="{{url('insumos')}}" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>

                </form>
               
            </div>

        </main>


    