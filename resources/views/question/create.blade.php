@extends('partials.master')
@section('title', 'Tanya Jawab')

@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create Question</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('question.store') }}" method="POST">
                    @csrf
                    <label for="title"> Judul</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Tulis judul disini">
                    <label for="isi">Isi</label>
                    <div class="mb-3" id="isi">
                        <textarea class="textarea" placeholder="Tulis pertanyaan disini" name="desc"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Multiple</label>
                        <select class="select2bs4" multiple="multiple" data-placeholder="Select a tag"
                                style="width: 40%;" name="tag_id">
                                @foreach ($tag as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                            @endforeach
                        </select>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
