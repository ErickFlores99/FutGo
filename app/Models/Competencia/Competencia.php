<?php

namespace App\Models\Competencia;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Competencia extends Model
{
    /**
     * Tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'competencias';

    /**
     * Atributos asignables masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tipo_competencia_id',
        'administrador_id',
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'es_nocturna',
        'estatus',
    ];

    /**
     * Conversión de atributos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'fecha_inicio' => 'date',
        'fecha_fin'    => 'date',
        'es_nocturna'  => 'boolean',
        'estatus'      => 'integer',
    ];

    /**
     * Tipo de competencia.
     */
    public function tipo(): BelongsTo
    {
        return $this->belongsTo(
            CompetenciaTipo::class,
            'tipo_competencia_id'
        );
    }

    /**
     * Administrador de la competencia.
     */
    public function administrador(): BelongsTo
    {
        return $this->belongsTo(
            User::class,
            'administrador_id'
        );
    }

    /**
     * Días en que se juega la competencia.
     */
    public function dias(): HasMany
    {
        return $this->hasMany(
            CompetenciaGrupoDia::class,
            'competencia_grupo_id'
        );
    }

    /**
     * Grupos de la competencia.
     */
    public function grupos(): HasMany
    {
        return $this->hasMany(
            CompetenciaGrupo::class,
            'competencia_id'
        );
    }
}