<?php

namespace App\Http\Livewire\Conversations;

use Livewire\Component;

class Reciever extends Component
{
    public $message;

    public function render()
    {
        return view('livewire.conversations.reciever');
    }
}
