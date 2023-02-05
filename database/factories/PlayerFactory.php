<?php

namespace Database\Factories;

use Faker\Provider\it_IT\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake() -> firstNameMale(),
            'surname' => fake() -> lastName(), 
            'img' => fake() -> imageUrl(100,100,'people',true) ,   
            'date_of_birth' => fake() -> date('d-m-Y'),
            'market_value' => fake() -> numberBetween(1000000,300000000),
            'has_a_team' => fake() -> boolean()
        ];
    }
}
