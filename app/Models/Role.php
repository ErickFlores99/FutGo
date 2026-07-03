<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    // Si tu tabla en la base de datos se llama 'roles', Laravel la detecta automáticamente 
    // por el plural del modelo. No hace falta declarar protected $table = 'roles';

    /**
     * Los usuarios que pertenecen a este rol.
     */
    public function users(): BelongsToMany
    {
        // Especificamos 'rol_user' como la tabla pivote y 'rol_id' como la llave foránea
        // debido a que mezclamos español e inglés en la migración.
        return $this->belongsToMany(User::class, 'rol_user', 'rol_id', 'user_id')
                    ->withTimestamps(); // Guarda automáticamente las fechas en la tabla pivote
    }
}
