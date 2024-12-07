<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ["nombre", "apellido", "cedula", "telefono", "correo", "radicado"];

    //aca se especifica la misma relacion
    public function pqr(){
        return $this->hasMany(PQR::class, 'id_clientes');
    }
}
