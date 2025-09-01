<?php

namespace Database\Seeders;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //Registramos seeder User
        $this->call(UserSeeder::class);
        //Registramos seeder TipoDocumento
        $this->call(TipoDocumentoSeeder::class);
        //Registramos seeder Persona
        $this->call(PersonaSeeder::class);
    }
}
