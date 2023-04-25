    <ul>
        @forelse  ($conversation->messages as $message)
            @if ($message->isOwn())
                @livewire('conversations.reciever', ['message' => $message])
            @else
                @livewire('conversations.sender', ['message' => $message])
            @endif
            <li>
                <div class="divider">
                    <h6>Today</h6>
                </div>
            </li>
        @empty
            <li class="text-center align-content-center">
                <h3 class="text-danger">No Messages</h3>
            </li>
        @endforelse
    </ul>
