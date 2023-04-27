<?php

namespace App\Http\Livewire\Conversations;

use Livewire\Component;
use Livewire\WithFileUploads;

class Replay extends Component
{


    use WithFileUploads;

    public $body = '';
    public $attachment = '';
    public $attachment_name = '';
    public $conversation;

    protected $rules = [
        'body' => 'required',
        'attachment' => 'nullable|file|mimes:png,jpg,jpeg,gif,wav,mp3,mp4|max:102400',
    ];


    public function replay(){

    }
    public function render()
    {
        return view('livewire.conversations.replay');
    }
}
