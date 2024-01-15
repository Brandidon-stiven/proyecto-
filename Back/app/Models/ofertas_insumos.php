<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ofertas_insumos extends Model
{
    use HasFactory;

         //relacion uno a muchos (inversa)
         public function proveedor(){
            $this->belongsTo('App\Models\proveedor');
        }
         //relacion uno a muchos (inversa)
         public function Insumos(){
            $this->belongsTo('App\Models\Insumos');
        }
}
