<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompetenciaCategoriaDivision extends Model
{
    use HasFactory;

    protected $table = 'competencia_div_cats';

    protected $fillable = [
        'competencia_categoria_id',
        'division_id',
    ];

    public function categoriaCompetencia()
    {
        return $this->belongsTo(CategoriaCompetencia::class);
    }

    public function division()
    {
        return $this->belongsTo(
            Division::class
        );
    }
}
