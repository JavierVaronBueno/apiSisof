<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sisof_Propietario extends Model
{
    use HasFactory;
    protected $fillable = [
    'cedula',
    'nombres',
    'apellidos'
    ];

    public function vehiculoPropietario(){
        return $this->hasMany('App\Model\sisof_VehiculoPropietario');
    }
}
