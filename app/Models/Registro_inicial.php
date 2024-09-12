<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro_inicial extends Model
{
    use HasFactory;

    protected $fillable=['fecha_inicio','hora_inicio'];
}
