<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;

            //Relacion uno a muchos
public function detalle(){
    return $this->hasMany('App\Models\detalle');
}

        //relacion muchos a muchos
        public function Insumos(){
            return $this->belongsToMany('App\Models\Insumos');
        }
}
