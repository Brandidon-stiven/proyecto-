<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    use HasFactory;

      //relacion muchos a muchos
      public function mantenimiento(){
        return $this->belongsToMany('App\Models\mantenimiento');
    }
}
