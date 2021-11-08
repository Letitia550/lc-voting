<?php

namespace Database\Factories;

use App\Models\Idea;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::count() > 0 ? User::all()->random()->id : User::factory()->create(),
            'idea_id' => Idea::count() > 0 ? Idea::all()->random()->id : Idea::factory()->create(),
        ];
    }
}
