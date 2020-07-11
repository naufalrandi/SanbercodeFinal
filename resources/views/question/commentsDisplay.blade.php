@foreach($answer as $answer)
    <div class="display-answer">
        <b>{{ $answer->user->name }}</b>
        <div class="container">
            {!! $answer->desc !!}

            <div class="container">
                <h5 class="mt-0 header-jawaban">Komentar</h5>
                @foreach ($reply as $reply)
                    <b>{{ $reply->user->name }}</b>
                    <div class="container">
                        {!! $reply->desc !!}
                    </div>
                @endforeach

                <hr>
                <b>Add reply</b>
                <a href="" id="reply"></a>
                <form method="post" action="{{ route('reply.store') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="desc" class="form-control" />
                        <input type="hidden" name="answer_id" value="{{ $question_id }}" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-warning" value="Reply" />
                    </div>
                </form>
            </div>
        </div>

    </div>
@endforeach
