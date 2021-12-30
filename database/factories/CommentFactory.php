<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::count() > 0 ? User::all()->random()->id : User::factory(),
            'idea_id' => Idea::count() > 0 ? Idea::all()->random()->id : Idea::factory(),
            'body' => $this->faker->paragraph(5),
        ];
    }
}
