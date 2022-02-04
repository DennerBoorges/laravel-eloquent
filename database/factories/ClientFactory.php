<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->create()->name,
            'email' => $this->faker->create()->email,
            'phone' => $this->faker->create()->phone,
            'id_number' => $this->faker->create()->id_number
        ];
    }
}
