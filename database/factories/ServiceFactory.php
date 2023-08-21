<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Service;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => $faker->string(20),
            'tags' => $faker->string(10),
            'description' => $faker->string(100),
            'sub_categories_id' => $faker->numberBetween(1,20),
            'user_id' => $faker->numberBetween(1,2),
            
        ];
    }
}
