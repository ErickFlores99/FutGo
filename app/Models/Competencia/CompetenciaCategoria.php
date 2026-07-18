<?php

namespace App\Models\Competencia;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CompetenciaCategoria extends Model
{
    /**
     * Tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'competencia_categorias';

    /**
     * Atributos asignables masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'descripcion',
        'edad_minima',
        'edad_maxima',
        'estatus',
    ];

    /**
     * Conversión de atributos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'edad_minima' => 'integer',
        'edad_maxima' => 'integer',
        'estatus' => 'integer',
    ];

    /**
     * Una categoría puede pertenecer a muchos grupos de competencia.
     */
    public function grupos(): HasMany
    {
        return $this->hasMany(CompetenciaGrupo::class, 'categoria_id');
    }
}