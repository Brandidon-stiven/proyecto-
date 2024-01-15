<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mantenimiento extends Model
{
    use HasFactory;

           //relacion uno a muchos (inversa)
           public function usuarios(){
            $this->belongsTo('App\Models\usuarios');
        }

                   //relacion muchos a muchos
    public function Tecnico(){
        return $this->belongsToMany('App\Models\Tecnico');
    }
}
