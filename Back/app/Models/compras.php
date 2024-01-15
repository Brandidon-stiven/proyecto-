<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compras extends Model
{
    use HasFactory;

        //relacion uno a muchos (inversa)
        public function proveedor(){
            $this->belongsTo('App\Models\proveedor');
        }

              //relacion muchos a muchos
       public function Insumos(){
        return $this->belongsToMany('App\Models\Insumos');
    }
}
