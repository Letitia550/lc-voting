<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class IdeaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Idea::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::count() > 0 ? User::all()->random()->id : User::factory(),
            'category_id' => Category::count() > 0 ? Category::all()->random()->id : Category::factory(),
            'status_id' => Status::count() > 0 ? Status::all()->random()->id : Status::factory(),
            'title' => ucwords($this->faker->words(4, true)),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
