<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $fillable = [
        'carrera_sigla',
        'carrera_nombre',
        'descripcion',
        'facultad',
        'nivel_estudios',
        'plan_estudios',
        'duracion',
        'coordinador_id',
        'fecha_creacion',
        // Otros campos según sea necesario
    ];

    // Relación con la tabla users para el coordinador
    public function coordinador()
    {
        return $this->belongsTo(User::class, 'coordinador_id');
    }

    // Relaciones con otras tablas, por ejemplo, con materias o estudiantes
    // public function materias()
    // {
    //     return $this->hasMany(Materia::class);
    // }

    // public function estudiantes()
    // {
    //     return $this->hasMany(Estudiante::class);
    // }
}
