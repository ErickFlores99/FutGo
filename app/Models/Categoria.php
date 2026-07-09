<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    /**
     * Los atributos que son asignables masivamente.
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
     * Conversión automática de atributos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'edad_minima' => 'integer',
        'edad_maxima' => 'integer',
        'estatus'     => 'integer',
    ];

    /**
     * Una categoría puede pertenecer a múltiples competencias.
     */
    public function competencias()
    {
        return $this->belongsToMany(
            Competencia::class,
            'categorias_competencia',
            'categoria_id',
            'competencia_id'
        )->withTimestamps();
    }
}