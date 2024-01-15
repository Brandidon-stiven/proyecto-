<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    use HasFactory;

     //Relacion uno a muchos
public function compras(){
    return $this->hasMany('App\Models\compras');
}
public function ofertas_insumos(){
    return $this->hasMany('App\Models\ofertas_insumos');
}
}
