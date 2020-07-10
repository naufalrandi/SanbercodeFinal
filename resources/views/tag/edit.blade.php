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
                <h3 class="card-title">Edit Pertanyaan</h3>
            </div>
            <div class="card-body">
                {!! Form::model($pertanyaan, ['method' => 'PATCH','route' => ['pertanyaan.update', $pertanyaan->id]]) !!}
                    @csrf
                    <label for="title"> Name :</label>
                    {!! Form::text('title', null, array('placeholder' => 'title','class' => 'form-control')) !!}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
