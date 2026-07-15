<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $table = 'divisiones';

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public function categoriasCompetencia()
    {
        return $this->hasMany(CategoriaCompetenciaDivision::class);
    }
}