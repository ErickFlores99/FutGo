<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaCompetencia extends Model
{
    use HasFactory;

    /**
     * Tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'categorias_competencia';

    /**
     * Los atributos asignables masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'categoria_id',
        'competencia_id',
    ];

    /**
     * Una categoría de competencia pertenece a una categoría.
     */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    /**
     * Una categoría de competencia pertenece a una competencia.
     */
    public function competencia()
    {
        return $this->belongsTo(Competencia::class);
    }
}