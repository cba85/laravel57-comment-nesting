@foreach ($comments as $comment)
    <div class="comment">
        <p>
            <strong>{{ $comment->user->name }}</strong> — {{ $comment->created_at->diffForHumans() }}
            {{ $comment->body }}
            <br>
            <a href="{{ route('comment.create', [$video, $comment]) }}">Reply</a>
        </p>

        @include('partials.comment', ['comments' => $comment->replies])
    </div>
@endforeach
