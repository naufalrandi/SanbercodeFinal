@extends('partials.master')

@section('content')

<div class="container px-3 py-4" style="margin-top: 50px;">
<a href="/question/create">
<button type="submit" class="btn btn-primary button-right">Tambah Pertanyaan</button></a>
    <div class="media mx-3 my-5">
    <div class="media-body">
    @foreach ($data as $question)
    <div class="row">

    <div class="col-md-3 mt-5">
        <a class="like"><i class="fa fa-thumbs-o-up"></i>  
            Like <input class="qty1" name="qty1" readonly="readonly" type="text" value="0" />
        </a>
        <a class="dislike"><i class="fa fa-thumbs-o-down"></i> 
            Dislike <input class="qty2"  name="qty2" readonly="readonly" type="text" value="0" />
        </a>
    </div>

    <div class="col-md-6">
        <h5 class="mt-0 header-question">{{ $question->user->name }}</h5>
        <h5 class="mt-0 header-judul">{{ $question->title }}</h5>
        <p style="padding-right: 15px;">{!! $question->desc !!}</p>
        <em>{{$question->created_at->diffForHumans()}}</em><hr>
    </div>

    <div class="col-md-3 mb-5">
    <div class="btn-group mt-5" role="group" aria-label="Basic example">
        <a href="{{ route('question.show',$question->id) }}" class="btn btn-info">
        <i class="fa fa-pencil-square"></i> Komentar
        </a>
        <a href="{{ route('question.edit',$question->id) }}" class="btn btn-warning">
        <i class="fa fa-pencil-square"></i> Edit
        </a>
        <form action="{{ route('question.destroy', $question->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"> Hapus</i></button>
        </form>
    </div>
    </div>
    </div>
    @endforeach
    </div>
    </div>
</div>
@endsection