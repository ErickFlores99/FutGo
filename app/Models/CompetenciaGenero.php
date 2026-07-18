<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CompetenciaGenero extends Model
{
    /**
     * Tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'competencia_generos';

    /**
     * Atributos asignables masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'descripcion',
        'estatus',
    ];

    /**
     * Un género puede pertenecer a muchos grupos de competencia.
     */
    public function grupos(): HasMany
    {
        return $this->hasMany(CompetenciaGrupo::class, 'genero_id');
    }
}
