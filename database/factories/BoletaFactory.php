<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Boleta>
 */
class BoletaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(20),
            'oficina' => $this->faker->sentence(20),
            'fecha' => $this->faker->sentence(10),
            'hora_inicio' => $this->faker->sentence(10),
            'hora_final' => $this->faker->sentence(10),
            'motivo' => $this->faker->sentence(20),
            'mensaje' =>$this->faker->sentence(20),
            'user_id' => $this->faker->randomElement([1, 2, 3])
        ];
    }
}
