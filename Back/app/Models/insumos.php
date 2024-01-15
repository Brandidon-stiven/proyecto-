<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insumos extends Model
{
    use HasFactory;

        // relacion uno a muchos
        public function ofertas_insumos(){
            return $this->hasMany('App\Models\ofertas_insumos');
        }

            //relacion muchos a muchos
    public function compras(){
        return $this->belongsToMany('App\Models\compras');
    }

    public function productos(){
        return $this->belongsToMany('App\Models\productos');
            }
}
