<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompetenciaTipo extends Model
{
    use HasFactory;

    protected $table = 'competencia_tipos';

    protected $fillable = [
        'nombre',
    ];

    public function competencias()
    {
        return $this->hasMany(Competencia::class, 'tipo_id');
    }
}