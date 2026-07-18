<?php

namespace App\Models\Competencia;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompetenciaGrupo extends Model
{
    /**
     * Tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'competencia_grupos';

    /**
     * Atributos asignables masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'competencia_id',
        'genero_id',
        'categoria_id',
        'division_id',
        'estatus',
    ];

    /**
     * Conversión de atributos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'estatus' => 'integer',
    ];

    /**
     * Competencia a la que pertenece.
     */
    public function competencia(): BelongsTo
    {
        return $this->belongsTo(
            Competencia::class,
            'competencia_id'
        );
    }

    /**
     * Género del grupo.
     */
    public function genero(): BelongsTo
    {
        return $this->belongsTo(
            CompetenciaGenero::class,
            'genero_id'
        );
    }

    /**
     * Categoría del grupo.
     */
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(
            CompetenciaCategoria::class,
            'categoria_id'
        );
    }

    /**
     * División del grupo.
     */
    public function division(): BelongsTo
    {
        return $this->belongsTo(
            CompetenciaDivision::class,
            'division_id'
        );
    }
}