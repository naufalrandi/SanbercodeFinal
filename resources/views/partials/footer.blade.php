<footer class="main-footer-fluid bg-dark px-5 py-3" style="position: fixed; left: 0; bottom: 0; width: 100%">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2020-2022 <a href="http://strikeover.com">StrikeOver.com</a>.</strong> All rights
    reserved.
</footer>

  </div>

  <script src="{{asset('/template/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('/template/js/popper.min.js')}}"></script>
  <script src="{{asset('/template/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/template/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('/template/js/jquery.sticky.js')}}"></script>
  <script src="{{asset('/template/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('/template/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('/template/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('/template/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('/template/js/aos.js')}}"></script>

  <script src="{{asset('/template/js/main.js')}}"></script>

  <!-- Select2 -->
  <script src="../../plugins/select2/js/select2.full.min.js"></script>

<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $(function () {
        // Summernote
        $('.textarea').summernote()

        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
        theme: 'bootstrap4'
        })
    })
  </script>
  </body>
</html>
