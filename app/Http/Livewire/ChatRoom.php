<?php

namespace App\Http\Livewire;

use App\Events\MessageSent;
use App\Models\Message;
use Illuminate\Support\Collection;
use Livewire\Component;

class ChatRoom extends Component
{
    public Message $currentMessage;

    public Collection $allMessages;

    protected $listeners = ['echo:messages,MessageSent' => 'handleMessageIncoming'];

    protected function rules(): array
    {
        return [
            'currentMessage.user_id' => 'required|int',
            'currentMessage.content' => 'required'
        ];
    }

    public function mount(): void
    {
        $this->emptyMessage();

        $this->fillMessages();
    }

    public function send(): void
    {
        $this->validate();

        $this->currentMessage->save();

        $this->showMessage($this->currentMessage);

        broadcast(new MessageSent($this->currentMessage))->toOthers();

        $this->emptyMessage();
    }

    public function handleMessageIncoming(array $response): void
    {
        $this->showMessage(Message::find($response['message']['id']));
    }

    private function showMessage(Message $message)
    {
        $this->allMessages->push($message);
    }

    private function fillMessages(): void
    {
        $this->allMessages = Message::with('user')->get();
    }

    private function emptyMessage(): void
    {
        $this->currentMessage = new Message;
        $this->currentMessage->user()->associate(auth()->user());
    }

    public function render()
    {
        return view('livewire.chat-room');
    }
}
