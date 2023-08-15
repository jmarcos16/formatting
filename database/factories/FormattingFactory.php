<?php

namespace Database\Factories;

use App\Models\{Formatting, GroupFormatting, Type, TypeFormatting};
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Formatting>
 */
class FormattingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'        => fake()->name(),
            'description' => fake()->text(),
            'status'      => fake()->randomElement(['pending', 'progress', 'finished']),
            'type_id'     => Type::factory()->create()->id,
        ];
    }
}
