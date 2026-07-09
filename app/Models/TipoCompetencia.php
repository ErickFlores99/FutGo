<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TipoCompetencia extends Model
{
    use HasFactory;

    /**
     * Los atributos que son asignables masivamente.
     *
     * @var array<int, string>
     */

    protected $table = 'tipos_competencia';
    
    protected $fillable = [
        'nombre',
    ];

    /**
     * Un tipo de competencia puede tener muchas competencias.
     */
    public function competencias()
    {
        return $this->hasMany(Competencia::class, 'tipo_id');
    }
}