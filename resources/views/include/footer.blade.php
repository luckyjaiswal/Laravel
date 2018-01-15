
<!-- jQuery 3 -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('js/bootstrap.min.js')}}"></script>
<!-- DataTables -->


<!-- SlimScroll -->
<script src="{{ url('js/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<!-- AdminLTE App -->
<script src="{{ url('js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('js/demo.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
   // $('#example1').DataTable()
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
</body>
</html>