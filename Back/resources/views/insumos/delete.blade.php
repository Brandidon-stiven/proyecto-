@extends('layout/plantilla')

@section('titulo', 'eliminar insumos|inventario')
    
@section('contenido')
<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$insumo->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{route('insumos.destroy',$insumo->id)}}" method="post">
            @csrf
            @method('DELETE')
            
        
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminacion de Insumos</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Deseas eliminar el registro {{$insumo->Nombre." ".$insumo->Marca}}
        </div>
        <div class="modal-footer">
          <a href="{{url('insumos')}}" class="btn btn-secondary btn-sm">Cerrar</a>
          <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
        </div>
      </div>
    </form>
    </div>
  </div>

  