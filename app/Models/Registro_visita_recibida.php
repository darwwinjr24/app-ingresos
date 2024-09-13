<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro_visita_recibida extends Model
{
    use HasFactory;

    protected $fillable=['numero_visita','clase_visita_id','registro_inicio_id','registro_fin_id','visitante_id','empleado_id'];

}
