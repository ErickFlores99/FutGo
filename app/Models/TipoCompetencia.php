<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TipoCompetencia extends Model
{
    use HasFactory;

    protected $table = 'tipo_competencias';

    protected $fillable = [
        'nombre',
    ];

    public function competencias()
    {
        return $this->hasMany(Competencia::class, 'tipo_id');
    }
}