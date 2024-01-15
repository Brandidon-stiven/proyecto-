@extends('layout/plantilla')

@section('titulo', 'insumos|inventario')
    
@section('contenido')

        <main>
            <div class="container py-4">
                <h2>{{$msg}}</h2>
                <a href="{{url('insumos/create')}}"class="btn btn-scondary btn-sm">Nuevo</a>
            </div>
        </main>




    