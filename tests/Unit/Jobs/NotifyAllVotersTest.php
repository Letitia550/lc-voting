<?php

namespace Tests\Unit\Jobs;

use App\Jobs\NotifyAllVoters;
use App\Mail\IdeaStatusUpdateMailable;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class NotifyAllVotersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */

    public function it_sends_an_email_to_all_voters() {

        $user = User::factory()->create([
            'email' => 'negotin.letitia@gmail.com',
        ]);

        $userB = User::factory()->create([
            'email' => 'user@user.com',
        ]);

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);

        $statusConidering = Status::factory()->create(['name' => 'Considering']);

        $idea = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusConidering->id,
            'title' => 'My First Idea',
            'description' => 'Description for my first idea.',
        ]);

        Vote::factory()->create([
            'idea_id' => $idea->id,
            'user_id' => $user->id,
        ]);

        Vote::factory()->create([
            'idea_id' => $idea->id,
            'user_id' => $userB->id,
        ]);

        Mail::fake();

        NotifyAllVoters::dispatch($idea);

        Mail::assertQueued(IdeaStatusUpdateMailable::class, function ($mail) {
            return $mail->hasTo('negotin.letitia@gmail.com')
                && $mail->build()->subject === 'An idea you voted for has a new status';
        });

        Mail::assertQueued(IdeaStatusUpdateMailable::class, function ($mail) {
            return $mail->hasTo('user@user.com')
                && $mail->build()->subject === 'An idea you voted for has a new status';
        });
    }

}
