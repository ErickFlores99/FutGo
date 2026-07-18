<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $roles = [
            ['nombre' => 'Administrador'],
            ['nombre' => 'Coordinador de Liga'],
            ['nombre' => 'Representante de Equipo'],
            ['nombre' => 'Árbitro'],
        ];

        foreach ($roles as $role) {
            Role::create([
                'nombre' => $role['nombre'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        User::factory()->create([
            'name' => 'FutGo',
            'email' => 'admin@futgo.com',
            'password' => bcrypt('admin'), 
            'estatus' => 1, // Activo
            'created_at' => now(),
            'updated_at' => now(),

        ])->roles()->attach(Role::where('nombre', 'Administrador')->first()->id);
    }
}
