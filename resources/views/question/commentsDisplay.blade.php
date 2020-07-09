@foreach($answer as $answer)
    <div class="display-comment">
        <b>{{ $answer->user->name }}</b>
        <div class="container">
            {!! $answer->desc !!}
        </div>
    </div>
@endforeach
