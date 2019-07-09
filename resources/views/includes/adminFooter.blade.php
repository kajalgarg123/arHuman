<footer class="main-footer">
    <strong>Copyright &copy; 2019-2020 .</strong> All rights
    reserved.
</footer>
  
<!-- jQuery 3 -->
<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('admin/js/moment.min.js')}}"></script>
<script src="{{asset('admin/js/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('admin/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('admin/js/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/js/fastclick.js')}}"></script>\

<script src="{{asset('admin/js/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/css/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin/js/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/js/demo.js')}}"></script>
<script type="text/javascript">
	$(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
