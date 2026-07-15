<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaCompetencia extends Model
{
    use HasFactory;

    protected $table = 'dias_competencia';

    protected $fillable = [
        'competencia_id',
        'dia',
    ];

    public function competencia()
    {
        return $this->belongsTo(Competencia::class);
    }
}