@extends('layout.plantilla')
@section('titulo','compras ')

@section('contenido')
    <main>
            <div class="container py-4">
                    <h2>{{$msg}}</h2>
                    <a href="{{url('compras')}}" class="btn btn-secondary">Regresar</a>
            </div>
    </main>

