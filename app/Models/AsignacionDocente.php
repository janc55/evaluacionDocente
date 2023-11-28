<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignacionDocente extends Model
{
    protected $fillable = [
        'gestion_id',
        'materia_id',
        'docente_id',
        'fecha_asignacion',
        // Otros campos según sea necesario
    ];

    // Relaciones con otras tablas
    public function gestion()
    {
        return $this->belongsTo(Gestion::class);
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }

    public function docente()
    {
        return $this->belongsTo(Docente::class);
    }
}
