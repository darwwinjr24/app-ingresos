<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro_ingreso_visitante extends Model
{
    use HasFactory;

    protected $fillable=['visitante_id','registro_inicio_id','registro_fin_id','area_a_visitar_id','datos_personales_id'];

}
