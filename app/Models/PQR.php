<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PQR extends Model
{
    use HasFactory;

    protected $fillable = ["Fecha_radicacion","Descripcion","id_clientes","id_tipo_solicituds"];

// aca se define la relacion con clientes la llave foranea que es id clientes
public function cliente(){
    return $this->belongsTo(Cliente::class,'id_clientes');
}

}