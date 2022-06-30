<?php

namespace App\Http\Livewire;

use Illuminate\Routing\Redirector;
use Illuminate\Support\MessageBag;
use Livewire\Component;

class Login extends Component
{
    public string $email = '';

    public string $password = '';

    public bool $remember = false;

    protected array $rules = [
        'email' => 'required|exists:users',
        'password' => 'required',
    ];

    public function authenticate(): Redirector | MessageBag
    {
        $credentials = $this->validate();

        if (!auth()->attempt($credentials, $this->remember)) {
            return $this->addError('email', 'Credentials does not match.');
        }

        return to_route('chat-room');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
