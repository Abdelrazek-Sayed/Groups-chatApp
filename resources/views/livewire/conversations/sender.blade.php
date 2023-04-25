<div>

    <li class="sender">
        <p> {{ $message->body }}</p>
        <span class="time"> {{ $message->created_at->diffForHumans() }}</span>
    </li>
    reciever
</div>
