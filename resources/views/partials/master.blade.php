@include('partials.header')
@include('partials.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @include('partials.wrapper')

    <!-- Main content -->
    @section('content')

    @show
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('partials.footer')
