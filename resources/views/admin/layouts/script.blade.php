<script src="{{asset('/admin/plugins/jquery/jquery.min.js')}}"></script>
  
  <script type="text/javascript">
  $(document).ready(function(){
  function getBase64(file, selector) {
     var reader = new FileReader();
     reader.readAsDataURL(file);
     reader.onload = function () {
      $(selector).attr('src', reader.result);
     };
     reader.onerror = function (error) {
       console.log('Error: ', error);
     };
  }
  var img = document.querySelector('#image');
  img.onchange = function(){
    var file = this.files[0];
    if(file == undefined){
      $('#imageTarget').attr('src', "{{asset('/admin/dist/img/photo1.png')}}");
    }else{
      getBase64(file, '#imageTarget');
    }
  }
  });
</script>

  <script src="{{asset('/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('/admin/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>    
  <script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
  } );
  </script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('/admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{asset('/admin/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('/admin/plugins/sparklines/sparkline.js')}}"></script>
  <!-- JQVMap -->
  <!-- <script src="{{asset('/admin/plugins/jqvmap/jquery.vmap.min.js></s"')}}cript> -->
  <!-- <script src="{{asset('/admin/plugins/jqvmap/maps/jquery.vmap.usa.js></s"')}}cript> -->
  <!-- jQuery Knob Chart -->
  <script src="{{asset('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{asset('admin/plugins/moment/moment.min.js')}}"></script>
  <script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  <script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('admin/dist/js/adminlte.js')}}"></script>
 
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- <script src="./admin/dist/js/pages/dashboard.js"></script> -->
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('admin/dist/js/demo.js')}}"></script>
