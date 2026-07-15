<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaCompetenciaDivision extends Model
{
    use HasFactory;

    protected $table = 'categorias_competencia_division';

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
