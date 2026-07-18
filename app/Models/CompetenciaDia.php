<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompetenciaDia extends Model
{
    /**
     * Tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'competencia_dias';

    /**
     * Atributos asignables masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'competencia_id',
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
            'competencia_id'
        );
    }
}