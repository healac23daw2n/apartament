<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $options = [
            '54321678C',
            'David Martínez',
            '40',
            '654321987',
            'Plaza Principal, 789',
            'Valencia',
            'España',
            'david@example.com',
            'Crédito',
            '5678 9012 3456 7890',
        ];
        return [
            'name' => Arr::random($options),
        ];
    }
}
