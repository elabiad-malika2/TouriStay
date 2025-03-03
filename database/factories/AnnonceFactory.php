<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use App\Models\Owner;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annonce>
 */
class AnnonceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(6),
            'description' => $this->faker->paragraph(3),
            'prix' => $this->faker->randomFloat(2, 500, 10000), // Prix entre 500 et 10 000
            'location' => $this->faker->city, // Ville aléatoire
            'disponible_du' => $this->faker->dateTimeBetween('now', '+1 month'), // Date optionnelle
            'disponible_jusquau' => $this->faker->dateTimeBetween('+2 months', '+5 months'), // Date optionnelle
            'chambres' => $this->faker->numberBetween(1, 7), // Chambres optionnelles (1 à 7)
            'salles_de_bain' => $this->faker->numberBetween(1, 4), // Salles de bain optionnelles (1 à 4)
            'image' => $this->faker->imageUrl(640, 480, 'real estate', true), // Image optionnelle
            'user_id' => User::where('role_id', 3)->inRandomOrder()->value('id') ?? User::factory()->create(['role_id' => 3])->id,
            'type' => Arr::random(['appartement', 'maison', 'villa', 'studio']), 
        ];
    }
}
