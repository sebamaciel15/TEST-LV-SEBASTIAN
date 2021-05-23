<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Menu;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(15),
            'description' => $this->faker->word(50),
            'price' => $this->faker->randomNumber(),
            'client_id' => Client::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'menu_id' => Menu::all()->random()->id,
        ];
    }
}
