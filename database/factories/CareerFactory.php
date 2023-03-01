<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Career>
 */
class CareerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(1),
            'description' => $this->faker->paragraph(5),
            'location' => $this->faker->city(),
            'tags' => $this->faker->word(),
            'salary' => 1000,
            'company_name' => $this->faker->company(),
            'job_type' => "Full-Time",
            'website' => $this->faker->url(),
        ];
    }
}
