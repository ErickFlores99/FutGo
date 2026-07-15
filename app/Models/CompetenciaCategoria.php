<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetenciaCategoria extends Model
{
    use HasFactory;

    protected $table = 'competencia_categorias';

    protected $fillable = [
        'competencia_id',
        'categoria_id',
    ];

    public function competencia()
    {
        return $this->belongsTo(
            Competencia::class
        );
    }

    public function categoria()
    {
        return $this->belongsTo(
            Categoria::class
        );
    }

    public function divisiones()
    {
        return $this->hasMany(
            CompetenciaCategoriaDivision::class,
            'competencia_categoria_id'
        );
    }
}