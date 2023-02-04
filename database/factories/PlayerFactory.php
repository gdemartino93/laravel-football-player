<?php

namespace Database\Factories;

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
            'name' => fake() -> name(),
            'surname' => fake() -> surname(),
            'img' => fake() -> img(),   
            'date_of_birth' => fake() -> date_of_birth(),
            'market_value' => fake() -> market_value(),
            'have_a_team' => fake() -> have_a_team()
        ];
    }
}
