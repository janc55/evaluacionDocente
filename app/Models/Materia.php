<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = [
        'mat_sigla',
        'mat_nombre',
        'carrera_id',
        'semestre',
        'prerequisito_id',
        // Otros campos según sea necesario
    ];

    // Relación con la carrera
    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }

    // Relación con las materias que tienen esta materia como prerequisito
    public function materiasPrerequisito()
    {
        return $this->hasMany(Materia::class, 'prerequisito_id');
    }

    // Relación con la materia que es prerequisito para esta materia
    public function materiaPrerequisito()
    {
        return $this->belongsTo(Materia::class, 'prerequisito_id');
    }

    public function designaciones()
    {
        return $this->hasMany(DesignacionMateria::class);
    }
}
