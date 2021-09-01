<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sisof_VehiculoPropietario extends Model
{
    use HasFactory;

    protected $fillable = [
        'propietario',
        'vehiculo'
    ];

    public function propietario(){
        return $this->belongsTo('App\Model\sisof_Propietario');
    }
    public function vehiculo(){
        return $this->belongsTo('App\Model\sisof_Vehiculo');
    }
}
