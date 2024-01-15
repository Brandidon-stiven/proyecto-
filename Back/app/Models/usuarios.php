<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    use HasFactory;

     //relacion uno a muchos (inversa)
     public function Rol(){
        $this->belongsTo('App\Models\Rol');
    }

        //relacion uno a muchos
        public function mantenimiento(){
            return $this->hasMany('App\Models\mantenimiento');
        }
        public function ventas(){
            return $this->hasMany('App\Models\ventas');
        }

}
