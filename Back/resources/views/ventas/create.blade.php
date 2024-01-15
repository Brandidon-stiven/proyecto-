@extends('Layout.plantilla')
@section('titulo', isset($venta) ? 'Editar Venta' : 'Registrar Venta')

@section('contenido')
    <main>
        <div class="container py-4">
            @if(isset($venta))
                <h2>EDITAR VENTA </h2>
                <form action="{{ url('ventas/'.$venta->id) }}" method="post">
                    @method('PUT')
            @else
                <h2>REGISTRAR VENTA </h2>
                <form action="{{ url('ventas')}}" method="post">
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
                <label for="fecha_venta" class="col-sm-2 col-form-label">FECHA VENTA:</label>
                <div class="col-sm-5">
                    <input type="date"  name="fecha_venta"  id="fecha_venta" class="form-control" value="{{ isset($venta) ? $venta->fecha_venta : old('fecha_venta') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="valor_total" class="col-sm-2 col-form-label">VALOR TOTAL:</label>
                <div class="col-sm-5">
                    <input type="text"  name="valor_total"  id="valor_total" class="form-control" value="{{ isset($venta) ? $venta->valor_total : old('valor_total') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="empresas_aliadas_id" class="col-sm-2 col-form-label">ID EMPRESA ALIADA:</label>
                <div class="col-sm-5">
                    <select name="empresas_aliadas_id" id="empresas_aliadas_id" class="form-control" required>
                        @foreach($empresasAliadas as $empresaAliada)
                            <option value="{{ $empresaAliada->id }}" {{ isset($venta) && $venta->empresas_aliadas_id == $empresaAliada->id ? 'selected' : '' }}>
                                {{ $empresaAliada->id }} - {{ $empresaAliada->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            

            <div class="mb-3 row">
                <label for="usuarios_id" class="col-sm-2 col-form-label">ID USUARIO:</label>
                <div class="col-sm-5">
                    <select name="usuarios_id" id="usuarios_id" class="form-control" required>
                        @foreach($usuarios as $usuario)
                            <option value="{{ $usuario->id }}" {{ isset($venta) && $venta->usuarios_id == $usuario->id ? 'selected' : '' }}>
                                {{ $usuario->id }} - {{ $usuario->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <a href="{{ url('ventas') }}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">{{ isset($venta) ? 'Actualizar' : 'Guardar' }}</button>

            </form>
        </div>
    </main>

