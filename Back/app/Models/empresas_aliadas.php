<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresas_aliadas extends Model
{
    use HasFactory;

    // relacion uno a muchos
    public function ventas(){
        return $this->hasMany('App\Models\ventas');
    }
}
