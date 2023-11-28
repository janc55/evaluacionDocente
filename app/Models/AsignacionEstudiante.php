<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignacionEstudiante extends Model
{
    protected $fillable = [
        'gestion_id',
        'designacion_materia_id',
        'estudiante_id',
        'fecha_asignacion',
        // Otros campos según sea necesario
    ];

    // Relaciones con otras tablas
    public function gestion()
    {
        return $this->belongsTo(Gestion::class);
    }

     public function designacionMateria()
    {
        return $this->belongsTo(DesignacionMateria::class);
    }

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }
}
