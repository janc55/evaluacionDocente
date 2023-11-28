<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignacionMateria extends Model
{
    protected $fillable = ['materia_id', 'gestion_id', 'docente_id', 'turno', 'paralelo', 'fecha_inicio', 'fecha_fin'];

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }

    public function gestion()
    {
        return $this->belongsTo(Gestion::class);
    }

    public function docente()
    {
        return $this->belongsTo(Docente::class);
    }
}
