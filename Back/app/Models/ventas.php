<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    use HasFactory;

      //relacion uno a muchos (inversa)
      public function usuarios(){
        $this->belongsTo('App\Models\usuarios');
    }
public function empresas_aliadas(){
    $this->belongsTo('App\Models\empresas_aliadas');
}

        //Relacion uno a muchos
        public function detalle(){
            return $this->hasMany('App\Models\detalle');
        }
}
