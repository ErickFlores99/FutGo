<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'edad_minima',
        'edad_maxima',
    ];

    public function competencias()
    {
        return $this->hasMany(CategoriaCompetencia::class);
    }
}