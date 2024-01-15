@extends('Layout.plantilla')
@section('titulo', isset($compra) ? 'Editar Compra' : 'Registrar Compra')

@section('contenido')
    <main>
        <div class="container py-4">
            @if(isset($compra))
                <h2>EDITAR COMPRA </h2>
                <form action="{{ url('compras/'.$compra->id) }}" method="post">
                        @method('PUT')
            @else
                <h2>REGISTRAR COMPRA </h2>
                <form action="{{ url('compras')}}" method="post">
            @endif
            @csrf
            @if ($errors->any())
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all ()  as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        

            <div class="mb-3 row">
                <label for="fecha_compra" class="col-sm-2 col-form-label">FECHA COMPRA:</label>
                <div class="col-sm-5">
                    <input type="date"  name="fecha_compra"  id="fecha_compra" class="form-control" value="{{ isset($compra) ? $compra->fecha_compra : old('fecha_compra') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="valor_compra" class="col-sm-2 col-form-label">VALOR COMPRA:</label>
                <div class="col-sm-5">
                    <input type="text"  name="valor_compra"  id="fecha_compra" class="form-control" value="{{ isset($compra) ? $compra->valor_compra : old('valor_compra') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="proveedors_id" class="col-sm-2 col-form-label">Proveedor ID:</label>
                <div class="col-sm-5">
                    <select name="proveedors_id" id="proveedors_id" class="form-control" required>
                        @foreach($proveedores as $proveedor)
                            <option value="{{ $proveedor->id }}" {{ isset($compra) && $compra->proveedors_id == $proveedor->id ? 'selected' : '' }}>
                                {{ $proveedor->id }} - {{ $proveedor->nombre }} {{-- Cambia a la columna que desees mostrar --}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            

            <a href="{{ url('compras') }}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">{{ isset($compra) ? 'Actualizar' : 'Guardar' }}</button>

            </form>
        </div>
    </main>

