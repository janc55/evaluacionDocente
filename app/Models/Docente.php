<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $fillable = [
        'user_id',
        'doc_nombres',
        'doc_apellido_paterno',
        'doc_apellido_materno',
        'doc_cedula_identidad',
        'doc_codigo',
        'doc_celular',
        'doc_email',
        // Otros campos según sea necesario
    ];

    // Relación con la tabla users
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function designaciones()
    {
        return $this->hasMany(DesignacionMateria::class);
    }
}
