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
    <div class="container" style="margin-top: 80px;">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambahkan Tag</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('tag.store') }}" method="POST">
                    @csrf
                    <label for="title"> Tag</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Tulis tag disini">
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
