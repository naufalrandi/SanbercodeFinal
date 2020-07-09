@extends('partials.master')
@section('title', 'Tanya Jawab')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tanya Jawab</h3>
            </div>
            <div class="card-body">
                  <b style="font-size: 20px;">{{ $question->title }}</b>
                  <br>
                  {!! $question->desc !!}
                  <br>

                  <label for="">Tag :</label>
                  @foreach ($tag as $tag)
                      <button class="btn btn-primary"> {{$tag->title}} </button>
                  @endforeach
                  <br>

                  {{$question->created_at->diffForHumans()}}
                  <hr/>
                    <b>Display Comments</b>

                    @include('question.commentsDisplay', ['answer' => $question->answer, 'question_id' => $question->id])

                    <hr />
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
@endsection
