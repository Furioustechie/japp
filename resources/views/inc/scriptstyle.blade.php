<!--   Core JS Files   -->
<!-- <script src="assets/js/core/jquery.min.js" type="text/javascript"></script> -->

<script src="{{URL::asset('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>

<!-- Plugin for the Perfect Scrollbar -->
<script src="{{URL::asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>

<!-- Plugin for the momentJs  -->
<script src="{{URL::asset('assets/js/plugins/moment.min.js')}}"></script>


<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>


<!-- Forms Validations Plugin -->
<script src="{{URL::asset('assets/js/plugins/jquery.validate.min.js')}}"></script>

<!--  Notifications Plugin    -->
<script src="{{URL::asset('assets/js/plugins/bootstrap-notify.js')}}"></script>

<!--  Google Maps Plugin    -->

<!-- Chartist JS -->
<script src="{{URL::asset('assets/js/plugins/chartist.min.js')}}"></script>

<!-- Toastr JS -->
<script src="{{URL::asset('assets/js/plugins/toastr.min.js')}}"></script>

<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{URL::asset('assets/js/material-dashboard.min.js?v=2.1.1')}}" type="text/javascript"></script>

 <!-- Chart JS CDN Library for test chart -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
 
 <script type="text/javascript" src="{{URL::asset('assets/DataTablesx/datatables.min.js')}}"></script>
 <script src="{{URL::asset('js/select2.min.js')}}"></script>
 <script src="{{URL::asset('js/sweetalert2.min.js')}}"></script>
 <script src="{{URL::asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
<script src="{{URL::asset('js/confirm.js')}}"></script>
<script src="{{URL::asset('js/editsettings.js')}}"></script>
<script src="http://malsup.github.com/jquery.form.js"></script> 

<!--Javascript for active nav-ink  not tested-->
 <script>
 //  javascript here
 $(document).ready(function() {
  $(document).on('click', '.nav .nav-item a', function (e) {
        $(this).parent().addClass('active').siblings().removeClass('active');
    });
  
});
</script>

<!-- Javascript for active nav-ink -->
<script>
        var url = window.location;
        $('ul.treeview-menu a').filter(function () {
           return this.href == url;
        }).parents('li').addClass('active');
</script>
        