<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(15),
            'direction' => $this->faker->word(10),
            'cellphone' => $this->faker->randomNumber(),
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
