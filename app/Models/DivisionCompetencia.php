<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivisionCompetencia extends Model
{
    use HasFactory;

    /**
     * Tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'divisiones_competencia';

    /**
     * Los atributos asignables masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'division_id',
        'competencia_id',
    ];

    /**
     * Una diviion pertenece a una division.
     */
    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    /**
     * Una diviones de competencia pertenece a una competencia.
     */
    public function competencia()
    {
        return $this->belongsTo(Competencia::class);
    }
}