@extends('layout.plantilla')
@section('titulo',' Mantenimiento')

@section('contenido')
    <main>
            <div class="container py-4">
                    <h2>{{$msg}}</h2>
                    <a href="{{url('mantenimiento')}}" class="btn btn-secondary">Regresar</a>
            </div>
    </main>
