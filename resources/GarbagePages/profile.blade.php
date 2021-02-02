
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS Files -->
 <!--     Fonts and icons     -->
 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

 <!-- Material Dashboard CSS -->
 <link rel="stylesheet" href="/assets/css/material-dashboard.css">
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />

</head>
<body>
    <h1>{{$user->name}}'s Profile</h1>

{{-- {{$user->appeals}} --}}


@foreach ($user->appeals as $appeal)
<h1>

{{$appeal->prisonid}}

</h1>
@endforeach



{{-- <h3>caseNo: {{$user->user_id}} created by {{$user->user->name}}</h3> --}}
<!--Default date and time picker -->
<div class="form-group pmd-textfield pmd-textfield-floating-label">
	<label class="control-label" for="datetimepicker-default">Select Date and Time</label>
	<input type="text" id="datetimepicker-default" class="form-control" />
</div>
<div class="col-md-4">
    <button class="btn btn-primary" onclick="showNotification()">Top Right Notification</button>
  </div>
<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>
<script>


function showNotification(from, align){

  $.notify({
      icon: "add_alert",
      message: "Welcome to  - a beautiful freebie for every web developer."

  },{
      type: 'success',
      timer: 4000,
      placement: {
          from: from,
          align: align
      }
  });
}

</script>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/bootstrap-material-design.js"></script>

  <!-- Library for adding dinamically elements -->
  <script src="assets/js/core/arrive.min.js" type="text/javascript"></script>

  <!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>

  <!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
  <script src="assets/js/core/chartist.min.js"></script>

  <!-- Plugin for Scrollbar documentation here: https://github.com/utatti/perfect-scrollbar -->
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>


  <!-- Demo init -->
  <script src="assets/js/plugins/demo.js"></script>

  <!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
  <script src="assets/js/material-dashboard.js?v=2.1.0"></script>
</body>
</html>
