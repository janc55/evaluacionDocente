<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = [
        'user_id',
        'est_nombres',
        'est_paterno',
        'est_materno',
        'est_ci',
        'est_codigo',
        'est_celular',
        'est_email',
        // Otros campos según sea necesario
    ];

    // Relación con la tabla users
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function evaluacionesRealizadas()
    {
        return $this->belongsToMany(DesignacionMateria::class, 'evaluacion_estudiante')
            ->withPivot('evaluacion_realizada')
            ->withTimestamps();
    }
}
