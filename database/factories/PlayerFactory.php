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
            'name' => fake() -> name(null,'male'),
            'surname' => fake() -> lastName(), 
            'img' => fake() -> imageUrl(100,100,'people',true) ,   
            'date_of_birth' => fake() -> date(),
            'market_value' => fake() -> numberBetween(0,1000000000),
            'have_a_team' => fake() -> boolean()
        ];
    }
}
