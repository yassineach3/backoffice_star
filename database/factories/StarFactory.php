<?php

namespace Database\Factories;

use App\Models\Star;
use Illuminate\Database\Eloquent\Factories\Factory;

class StarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Star::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'image' => $this->faker->imageUrl(800, 400, 'cats', true, 'Faker', true),
            'description' => $this->faker->text,
        ];
    }
}
