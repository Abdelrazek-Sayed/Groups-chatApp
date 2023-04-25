<div>
    <ul class="list-unstyled chat-list mt-2 mb-0">
        @forelse ($conversations as $conversation)
            <a href="{{ route('conversation.show', $conversation) }}" class="d-flex align-items-center">
                <div class="flex-shrink-0">
                    <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                    <span class="active"></span>
                </div>
                <div class="flex-grow-1 ms-3">
                    <h3>{{ $conversation->name ?? '' }}</h3>
                    <p>front end developer</p>
                </div>
            </a>
        @empty
            <p>No Conversations Found</p>
        @endforelse
    </ul>
</div>
