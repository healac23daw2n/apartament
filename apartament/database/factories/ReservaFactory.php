<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserva>
 */
class ReservaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $options = [
            'Hoteles',
            'Hostales y pensiones',
            'Paradores',
            'Alojamientos singulares',
            'Campings túristicos',
            'Albergues',
            'Apartamentos turísticos',
        ];
        return [
            'name' => Arr::random($options),
        ];
    }
}
