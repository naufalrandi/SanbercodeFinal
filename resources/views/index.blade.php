@extends('partials.master')
@section('title', 'Welcome')

@section('content')
    <div class="container" style="margin-top: 80px;">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Welcome</h3>
            </div>
            <div class="card-body">
                <h1>Selamat datang {{ Auth::user()->name }}</h1>
            </div>
        </div>
    </div>
@endsection
