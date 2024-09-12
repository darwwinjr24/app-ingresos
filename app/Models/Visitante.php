<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    use HasFactory;

    protected $fillable=['foto','empresa','tipo_documento_id','autorizado_id','datos_personales_id'];
}
