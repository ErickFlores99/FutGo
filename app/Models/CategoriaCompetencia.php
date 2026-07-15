<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaCompetencia extends Model
{
    use HasFactory;

    protected $table = 'categorias_competencia';

    protected $fillable = [
        'competencia_id',
        'categoria_id',
    ];

    public function competencia()
    {
        return $this->belongsTo(Competencia::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function divisiones()
    {
        return $this->hasMany(CategoriaCompetenciaDivision::class);
    }
}