<?php

namespace Database\Seeders;

use Illuminate\Support\Str;

use App\Models\Producto;
use App\Models\Cliente;
use App\Models\User;
use App\Models\File;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(ProductoSeeder::class);
        // $this->call(ClienteSeeder::class);
        User::create([
            'name' => 'Fabian',
            'email' => 'fabian@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$1zNA/yd0TUWgzk027ltB6uxk/sSyUpDvz1co2ywinaxsLUf.scqjW', // password: 12345678
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => 1,
            'current_team_id' =>    1,
        ]);

        Cliente::factory()->times(15)->create();
        //Se crean 8 cursos
        Producto::factory()->times(10)->create()->each(function ($prod) {
            $prod->clientes()->sync(
                //Cada curso es tomado por 3 estudiantes
                Cliente::all()->random(6)
            );
        });
    }
}
