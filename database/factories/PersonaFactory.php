<?php

namespace Database\Factories;

use App\Models\TipoDocumento;
use Illuminate\Database\Eloquent\Factories\Factory;


class PersonaFactory extends Factory
{
    protected $model = \App\Models\Persona::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'telefono' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'direccion_id' => $this->faker->address(),
            'fecha_nacimiento' => $this->faker->date(),
            'nro_documento' => $this->faker->unique()->numberBetween(10000000, 99999999), // 8 digits
            'tipo_documento_id' => TipoDocumento::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
