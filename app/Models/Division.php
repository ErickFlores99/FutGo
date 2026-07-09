<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    /**
     * Los atributos que son asignables masivamente.
     *
     * @var array<int, string>
     */
    protected $table = 'divisiones';
    
    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    /**
     * Una división puede pertenecer a muchas competencias.
     */
    public function competencias()
    {
        return $this->hasMany(Competencia::class, 'division_id');
    }
}