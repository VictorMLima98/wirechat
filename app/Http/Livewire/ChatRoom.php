<?php

namespace App\Http\Livewire;

use App\Events\MessageSent;
use Livewire\Component;

class ChatRoom extends Component
{
    public string $message = 'test';

    protected $listeners = ['echo:messages,MessageSent' => 'showMessage'];

    public function send()
    {
        event(new MessageSent);
        $this->message = 'sending msg';
    }

    public function showMessage()
    {
        $this->message = 'changed by broadcast';
    }

    public function render()
    {
        return view('livewire.chat-room');
    }
}
