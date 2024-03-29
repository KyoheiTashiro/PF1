<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class DeleteMylistEventTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test__DeleteMylistEventController()
    {
        
        $user = User::find(2);
        $response = $this->actingAs($user)
        ->postJson('api/event/delete-mylist',['event' => 282]);

        $response->assertStatus(200);
    }
}
