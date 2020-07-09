@extends('partials.master')
@section('title', 'Tanya Jawab')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tanya Jawab</h3>
            </div>
            <div class="card-body">
                  <b style="font-size: 20px;">{{ $pertanyaan->judul }}</b>
                  <br>
                  {{ $pertanyaan->isi }}
                  <br><br>
                  <hr/>
                    <b>Display Comments</b>

                    @include('pertanyaan.commentsDisplay', ['jawaban' => $pertanyaan->jawaban, 'pertanyaan_id' => $pertanyaan->id])

                    <hr />
                    <b>Add comment</b>
                    <form method="post" action="{{ route('jawaban.store') }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="isi"></textarea>
                            <input type="hidden" name="pertanyaan_id" value="{{ $pertanyaan->id }}" />
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
