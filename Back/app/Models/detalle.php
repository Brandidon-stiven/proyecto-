<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle extends Model
{
    use HasFactory;

              //relacion uno a muchos (inversa)
              public function ventas(){
                $this->belongsTo('App\Models\ventas');
    }
    public function productos(){
        $this->belongsTo('App\Models\productos');
    }
}
