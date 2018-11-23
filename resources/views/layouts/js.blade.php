<!-- plugins:js -->
<script src="{{ asset('backend/nodemod/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('backend/nodemod/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('backend/nodemod/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/nodemod/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{ asset('backend/nodemod/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('backend/nodemod/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('backend/nodemod/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('backend/nodemod/morris.js/morris.min.js') }}"></script>
<script src="{{ asset('backend/nodemod/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('backend/js/off-canvas.js') }}"></script>
<script src="{{ asset('backend/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('backend/js/misc.js') }}"></script>
<script src="{{ asset('backend/js/settings.js') }}"></script>
<script src="{{ asset('backend/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('backend/js/dashboard.js') }}"></script>
<!-- End custom js for this page-->

@yield('jsforpage')