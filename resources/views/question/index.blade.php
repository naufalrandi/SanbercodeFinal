@extends('partials.master')
@section('title', 'Tanya Jawab')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tanya Jawab</h3>
            </div>
            <div class="card-body">
                @foreach ($data as $question)
                <b style="font-size: 23px">{{ $question->user->name }}</b>
                <br>
                {{$question->created_at->diffForHumans()}}
                <hr>
                  <b style="font-size: 20px;">{{ $question->title }}</b>
                  <br>
                  {!! $question->desc !!}
                  <hr>
                  <a class="btn btn-info btn-sm" href="{{ route('question.show',$question->id) }}">Add Comments</a>
                  <a class="btn btn-info btn-sm" href="{{ route('question.edit',$question->id) }}">Edit</a>
                  <form action="{{ route('question.destroy', $question->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
                  <hr/>

                @endforeach
            </div>
        </div>
    </div>
@endsection
