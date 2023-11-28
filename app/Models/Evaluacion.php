<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $fillable = ['designacion_materia_id', 'pregunta1', 'pregunta2', 
    'pregunta3', 'pregunta4', 'pregunta5', 'pregunta6', 'pregunta7', 'pregunta8', 'pregunta9','pregunta10'];

    public function designacionMateria()
    {
        return $this->belongsTo(DesignacionMateria::class);
    }
}
