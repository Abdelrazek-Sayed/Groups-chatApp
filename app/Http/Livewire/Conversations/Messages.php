<?php

namespace App\Http\Livewire\Conversations;

use Livewire\Component;

class Messages extends Component
{
    public $conversation;

    public function render()
    {
        return view('livewire.conversations.messages');
    }
}
