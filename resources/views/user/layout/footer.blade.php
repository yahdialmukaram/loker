
        <!-- footer content -->
        <footer>
            <div class="pull-right">
              Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
          </footer>
          <!-- /footer content -->
        </div>
      </div>

      <!-- jQuery -->
      <script src="{{ asset('assets_admin/vendors/jquery/dist/jquery.min.js') }}"></script>
      <!-- Bootstrap -->
      <script src="{{ asset('assets_admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
      <!-- FastClick -->
      <script src="{{ asset('assets_admin/vendors/fastclick/lib/fastclick.js') }}"></script>
      <!-- NProgress -->
      <script src="{{ asset('assets_admin/vendors/nprogress/nprogress.js') }}"></script>
      <!-- Chart.js -->
      <script src="{{ asset('assets_admin/vendors/Chart.js/dist/Chart.min.js') }}"></script>
      <!-- gauge.js -->
      <script src="{{ asset('assets_admin/vendors/gauge.js/dist/gauge.min.js') }}"></script>
      <!-- bootstrap-progressbar -->
      <script src="{{ asset('assets_admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
      <!-- iCheck -->
      <script src="{{ asset('assets_admin/vendors/iCheck/icheck.min.js') }}"></script>
      <!-- Skycons -->
      <script src="{{ asset('assets_admin/vendors/skycons/skycons.js') }}"></script>
      <!-- Flot -->
      <script src="{{ asset('assets_admin/vendors/Flot/jquery.flot.js') }}"></script>
      <script src="{{ asset('assets_admin/vendors/Flot/jquery.flot.pie.js') }}"></script>
      <script src="{{ asset('assets_admin/vendors/Flot/jquery.flot.time.js') }}"></script>
      <script src="{{ asset('assets_admin/vendors/Flot/jquery.flot.stack.js') }}"></script>
      <script src="{{ asset('assets_admin/vendors/Flot/jquery.flot.resize.js') }}"></script>
      <!-- Flot plugins -->
      <script src="{{ asset('assets_admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
      <script src="{{ asset('assets_admin/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
      <script src="{{ asset('assets_admin/vendors/flot.curvedlines/curvedLines.js') }}"></script>
      <!-- DateJS -->
      <script src="{{ asset('assets_admin/vendors/DateJS/build/date.js') }}"></script>
      <!-- JQVMap -->
      <script src="{{ asset('assets_admin/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
      <script src="{{ asset('assets_admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
      <script src="{{ asset('assets_admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
      <!-- bootstrap-daterangepicker -->
      <script src="{{ asset('assets_admin/vendors/moment/min/moment.min.js') }}"></script>
      <script src="{{ asset('assets_admin/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

      <!-- Custom Theme Scripts -->
      <script src="{{ asset('assets_admin/build/js/custom.min.js') }}"></script>

      {{-- notif simpan data --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script>
    //message with toastr
    @if(session()->has('success'))

    toastr.success('{{ session(' success ') }}', '{{session('success')}}');

    @elseif(session()->has('error'))

    toastr.error('{{ session(' error ') }}', '{{session('error')}}');

    @endif
</script>


    </body>
  </html>
