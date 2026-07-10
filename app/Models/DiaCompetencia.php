<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaCompetencia extends Model
{
    use HasFactory;

    /**
     * Tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'dias_competencia';

    /**
     * Los atributos asignables masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'dias',
        'competencia_id',
    ];

    /**
     * Una categoría de competencia pertenece a una competencia.
     */
    public function competencia()
    {
        return $this->belongsTo(Competencia::class);
    }
}