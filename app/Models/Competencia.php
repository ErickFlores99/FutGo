<?php

namespace App\Models;

use App\Models\User;
use App\Models\Division;
use App\Models\Categoria;
use App\Models\TipoCompetencia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Competencia extends Model
{
    use HasFactory;

    /**
     * Estados de la competencia.
     */
    public const PENDIENTE  = 0;
    public const ACTIVA     = 1;
    public const SUSPENDIDA = 2;
    public const FINALIZADA = 3;
    public const CANCELADA  = 4;

    /**
     * Los atributos asignables masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'descripcion',
        'tipo_id',
        'division_id',
        'administrador_id',
        'fecha_inicio',
        'fecha_fin',
        'estatus',
    ];

    /**
     * Conversión automática de atributos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'fecha_inicio' => 'date',
        'fecha_fin'    => 'date',
        'estatus'      => 'integer',
    ];

    /**
     * Tipo de competencia.
     */
    public function tipo()
    {
        return $this->belongsTo(TipoCompetencia::class, 'tipo_id');
    }

    /**
     * División.
     */
    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id');
    }

    /**
     * Usuario administrador.
     */
    public function administrador()
    {
        return $this->belongsTo(User::class, 'administrador_id');
    }

    /**
     * Categorías asociadas.
     */
    public function categorias()
    {
        return $this->belongsToMany(
            Categoria::class,
            'categorias_competencia',
            'competencia_id',
            'categoria_id'
        )->withTimestamps();
    }

    /**
     * Dias asociadas.
     */
    public function dias()
    {
        return $this->belongsToMany(
            DiaCompetencia::class,
            'dia',
            'competencia_id',
        )->withTimestamps();
    }
}