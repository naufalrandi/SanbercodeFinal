@extends('partials.master')
@section('title', 'Tag')

@section('content')
    <div class="container" style="margin-top: 80px;">
    <a href="/tag/create">
    <button type="submit" class="btn btn-primary button-right">Tambah Tag</button></a><hr style="margin-top: 50px;">
        <div class="card mt-5">
            <div class="card-header">
                <h3 class="card-title">Tag</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="semester">
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        @auth
                            <th>Options</th>
                        @endauth
                      </tr>

                      @foreach ($data as $key => $tag)
                      <tr>
                        <td>
                          {{ ++$i }}
                        </td>
                        <td>{{ $tag->title }}
                      </td>
                      <td>
                          @auth
                            <div class="table-links">
                                <form action="{{ route('tag.destroy', $tag->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </div>
                          @endauth
                      </td>
                  </tr>
                  @endforeach
                </table>

                  <div class="float-right">
                      {{ $data->links() }}
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
