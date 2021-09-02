<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sisof_Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'placa',
        'marca',
        'linea',
        'precio'
    ];

    public function vehiculoPropietario(){
        return $this->hasMany('App\Model\sisof_VehiculoPropietario');
    }
}
