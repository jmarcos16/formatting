<?php

namespace Database\Factories;

use App\Models\TypeFormatting;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TypeFormatting>
 */
class TypeFormattingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
        ];
    }
}
