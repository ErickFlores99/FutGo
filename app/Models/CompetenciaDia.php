<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetenciaDia extends Model
{
    use HasFactory;

    protected $table = 'competencia_dias';

    protected $fillable = [
        'competencia_id',
        'dia',
    ];

    public function competencia()
    {
        return $this->belongsTo(Competencia::class);
    }
}