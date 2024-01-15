@extends('layout.plantilla')
@section('titulo', isset($mantenimiento) ? 'Editar Mantenimiento' : 'Registrar Mantenimiento')

@section('contenido')
    <main>
        <div class="container py-4">
            @if(isset($mantenimiento))
                <h2>EDITAR MANTENIMIENTO</h2>
                <form action="{{ url('Mantenimiento/'.$mantenimiento->id) }}" method="post">
                        @method('PUT')
            @else
                <h2>REGISTRAR MANTENIMIENTO</h2>
                <form action="{{ url('Mantenimiento')}}" method="post">
            @endif
            @csrf
            @if ($errors->any())
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3 row">
                <label for="precio" class="col-sm-2 col-form-label">Precio:</label>
                <div class="col-sm-5">
                    <input type="number" name="precio" id="precio" class="form-control" value="{{ isset($mantenimiento) ? $mantenimiento->precio : old('precio') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="hora" class="col-sm-2 col-form-label">Hora:</label>
                <div class="col-sm-5">
                    <input type="time" name="hora" id="hora" class="form-control" value="{{ isset($mantenimiento) ? $mantenimiento->hora : old('hora') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="fecha" class="col-sm-2 col-form-label">Fecha:</label>
                <div class="col-sm-5">
                    <input type="date" name="fecha" id="fecha" class="form-control" value="{{ isset($mantenimiento) ? $mantenimiento->fecha : old('fecha') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="tipo" class="col-sm-2 col-form-label">Tipo:</label>
                <div class="col-sm-5">
                    <input type="text" name="tipo" id="tipo" class="form-control" value="{{ isset($mantenimiento) ? $mantenimiento->tipo : old('tipo') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="usuarios_id" class="col-sm-2 col-form-label">ID USUARIO:</label>
                <div class="col-sm-5">
                    <select name="usuarios_id" id="usuarios_id" class="form-control" required>
                        @foreach($usuarios as $usuario)
                            <option value="{{ $usuario->id }}" {{ isset($mantenimiento) && $mantenimiento->usuarios_id == $usuario->id ? 'selected' : '' }}>
                                {{ $usuario->id }} - {{ $usuario->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <a href="{{ url('Mantenimiento') }}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">{{ isset($mantenimiento) ? 'Actualizar' : 'Guardar' }}</button>

            </form>
        </div>
    </main>

