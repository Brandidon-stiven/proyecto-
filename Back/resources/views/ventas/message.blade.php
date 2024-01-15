@extends('Layout.plantilla')
@section('titulo',' Ventas')

@section('contenido')
    <main>
            <div class="container py-4">
                    <h2>{{$msg}}</h2>
                    <a href="{{url('ventas')}}" class="btn btn-secondary">Regresar</a>
            </div>
    </main>
