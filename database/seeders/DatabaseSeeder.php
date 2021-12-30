<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Leti',
            'email' => 'negotin.letitia@gmail.com'
        ]);

        User::factory(19)->create();
        Category::factory()->create(['name' => 'Category 1']);
        Category::factory()->create(['name' => 'Category 2']);
        Category::factory()->create(['name' => 'Category 3']);
        Category::factory()->create(['name' => 'Category 4']);

        Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200 text-white']);
        Status::factory()->create(['name' => 'Considering', 'classes' => 'bg-purple text-white']);
        Status::factory()->create(['name' => 'In Progress', 'classes' => 'bg-yellow text-white']);
        Status::factory()->create(['name' => 'Implemented', 'classes' => 'bg-green text-white']);
        Status::factory()->create(['name' => 'Closed', 'classes' => 'bg-red text-white']);

        Idea::factory(100)->create();

        //Generate unique votes . Ensure idea_id and user_id are unique for each row
        foreach(User::all() as $user) {
            foreach (Idea::all() as $idea) {
                if($idea->id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user->id,
                        'idea_id' => $idea->id
                    ]);
                }
            }
        }

        //Generate comments for ideas
        foreach(Idea::all() as $idea) {
            Comment::factory(5)->create(['idea_id' => $idea->id]);
        }

    }
}
