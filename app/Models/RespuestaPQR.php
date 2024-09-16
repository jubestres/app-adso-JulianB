<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespuestaPQR extends Model
{
    use HasFactory;

    protected $fillable = ["respuestacliente","id_clientes","id_radicado_p_q_r_s","id_area_respuestas"];
}
