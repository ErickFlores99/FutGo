<?php

namespace App\Models\Competencia;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CompetenciaGrupoDia extends Model
{
    /**
     * Tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'competencia_grupo_dias';

    /**
     * Atributos asignables masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'competencia_grupo_id',
        'dia',
    ];

    /**
     * Conversión de atributos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'dia' => 'integer',
    ];

    /**
     * Competencia a la que pertenece el día.
     */
    public function competencia(): BelongsTo
    {
        return $this->belongsTo(
            Competencia::class,
            'competencia_grupo_id'
        );
    }

    /**
     * Grupo al que pertenece el día.
     */
    public function grupo(): BelongsTo
    {
        return $this->belongsTo(
            CompetenciaGrupo::class,
            'competencia_grupo_id'
        );
    }
}