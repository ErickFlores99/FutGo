<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompetenciaCategoriaDivision extends Model
{
    use HasFactory;

    protected $table = 'competencia_div_cats';

    protected $fillable = [
        'categoria_competencia_id',
        'division_id',
    ];

    public function categoriaCompetencia()
    {
        return $this->belongsTo(CategoriaCompetencia::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
