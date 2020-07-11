@extends('partials.master')
@section('title', 'Tanya Jawab')

@section('content')
    <div class="container px-3 py-4">
        <div class="media mx-5 my-5">
            <div class="media-body">
                <h5 class="mt-0" style="font-weight: bold;">Pertanyaan</h5>
                <h5 class="mt-0 header-judul">{{ $question->title }}</h5>
                <p class="px-5">{!! $question->desc !!}</p>
                <em>{{$question->created_at->diffForHumans()}}</em><br>
                <label for="">Tag : </label>
                @foreach ($tag as $tag)
                      <button class="btn btn-link"> {{$tag->title}} </button>
                @endforeach

                <div class="media mt-5">
                    <a class="mr-5" href="#"></a>
                <div class="media-body">
                    <h5 class="mt-0 header-jawaban">Jawaban</h5>

                @include('question.commentsDisplay', ['answer' => $question->answer, 'question_id' => $question->id])
                <hr/>
                <b>Add comment</b>
                    <form method="post" action="{{ route('answer.store') }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="textarea" placeholder="Tulis pertanyaan disini" name="desc"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            <input type="hidden" name="question_id" value="{{ $question->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Add Comment" />
                        </div>
                    </form>
                  <hr/>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
