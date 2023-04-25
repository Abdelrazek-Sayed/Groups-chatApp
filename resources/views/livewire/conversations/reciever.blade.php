<div>

    <li class="repaly">
        <p> {{ $message->body }}</p>
        <span class="time"> {{ $message->created_at->diffForHumans() }}</span>
    </li>
</div>
