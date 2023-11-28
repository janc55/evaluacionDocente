<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    protected $fillable = [
        'nombre',
        'fecha_inicio',
        'fecha_fin',
        // Otros campos según sea necesario
    ];

    // Relación con otras tablas, por ejemplo, con materias o actividades académicas
    // public function materias()
    // {
    //     return $this->hasMany(Materia::class);
    // }

    public function designaciones()
    {
        return $this->hasMany(DesignacionMateria::class);
    }
}
