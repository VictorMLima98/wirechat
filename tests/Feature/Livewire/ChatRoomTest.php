<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\ChatRoom;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ChatRoomTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(ChatRoom::class);

        $component->assertStatus(200);
    }
}
