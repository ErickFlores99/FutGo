<?php

namespace App\Models\Competencia;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CompetenciaTipo extends Model
{
    /**
     * Tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'competencia_tipos';

    /**
     * Atributos asignables masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    /**
     * Una competencia de tipo puede pertenecer a muchas competencias.
     */
    public function competencias(): HasMany
    {
        return $this->hasMany(Competencia::class, 'tipo_competencia_id');
    }
}