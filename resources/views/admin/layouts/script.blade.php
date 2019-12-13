<script src="{{asset('/admin/plugins/jquery/jquery.min.js')}}"></script>

<script type="text/javascript">
$(document).ready(function() {
    function getBase64(file, selector) {
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function() {
            $(selector).attr('src', reader.result);
        };
        reader.onerror = function(error) {
            console.log('Error: ', error);
        };
    }
    var img = document.querySelector('#image');
    img.onchange = function() {
        var file = this.files[0];
        if (file == undefined) {
            $('#imageTarget').attr('src', "{{asset('/admin/dist/img/photo1.png')}}");
        } else {
            getBase64(file, '#imageTarget');
        }
    }

    var img = document.querySelector('#image1');
    img.onchange = function() {
        var file = this.files[0];
        if (file == undefined) {
            $('#imageTarget1').attr('src', "{{asset('/admin/dist/img/photo1.png')}}");
        } else {
            getBase64(file, '#imageTarget1');
        }
    }
});
</script>

  <script src="{{asset('/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('/admin/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
});
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
$('.btn-remove').on('click', function() {
    var removeUrl = $(this).attr('linkurl');
    swal({
            title: "Cảnh báo",
            text: "Bạn có chắc chắn muốn xoá không?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = removeUrl;
            }
        });
});
$('.hkd').on('click', function() {
    var removeUrl = $(this).attr('linkurl');
    swal({
            title: "Cảnh báo",
            text: "Bạn có chắc chắn muốn muốn ngừng kinh doanh không?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = removeUrl;
            }
        });
});
$('.kd').on('click', function() {
    var removeUrl = $(this).attr('linkurl');
    swal({
            title: "Cảnh báo",
            text: "Bạn có chắc chắn muốn kinh doanh sản phẩm này?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = removeUrl;
            }
        });
});
</script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js">
</script>
<script type="text/javascript">
$("#formDemo1").validate({
    rules: {
        content: {
            required: true,
            maxlength: 200
        },
    },
    messages: {
        content: {
            required: "Bạn phải nhập bình luận!",
            minlength: "Bạn không được nhập quá 200 kí tự!"
        },
    }
});
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

