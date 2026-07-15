<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Competencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'temporada',
        'tipo_id',
        'administrador_id',
        'fecha_inicio',
        'fecha_fin',
        'es_nocturna',
        'estatus'
    ];

    protected $casts = [
        'fecha_inicio' => 'date',
        'fecha_fin'    => 'date',
        'es_nocturna'  => 'boolean',
        'estatus'      => 'integer',
    ];

    public function tipo()
    {
        return $this->belongsTo(CompetenciaTipo::class, 'tipo_id');
    }

    public function administrador()
    {
        return $this->belongsTo(User::class, 'administrador_id');
    }

    public function categorias()
    {
        return $this->hasMany(CompetenciaCategoria::class);
    }

    public function dias()
    {
        return $this->hasMany(CompetenciaDia::class);
    }
}