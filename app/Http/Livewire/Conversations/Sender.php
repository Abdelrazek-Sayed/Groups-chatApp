<?php

namespace App\Http\Livewire\Conversations;

use Livewire\Component;

class Sender extends Component
{
    public $message;
    public function render()
    {
        return view('livewire.conversations.sender');
    }
}
