<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CompetenciaDivision extends Model
{
    /**
     * Tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'competencia_divisiones';

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
     * Conversión de atributos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'estatus' => 'integer',
    ];

    /**
     * Una división puede pertenecer a muchos grupos de competencia.
     */
    public function grupos(): HasMany
    {
        return $this->hasMany(CompetenciaGrupo::class, 'division_id');
    }
}