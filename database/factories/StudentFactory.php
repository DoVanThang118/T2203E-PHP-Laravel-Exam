<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name,
            "age"=> random_int(18,27),
            "address"=> $this->faker->address(),
            "telephone"=>$this->faker->phoneNumber,
        ];
    }
}
