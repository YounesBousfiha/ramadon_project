<?php

namespace Database\Factories;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recette>
 */
class RecetteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'prenom' => $this->faker->name(),
            'nom' => $this->faker->name(),
            'ingredient' => $this->faker->sentence(10),
            'instruction' => $this->faker->text(),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
            'categorie_id' => $this->faker->randomElement(Categorie::pluck('id')->toArray())
        ];
    }
}
