<!DOCTYPE html>
<html lang="en">

<head>
  @include('inc.style')
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body class="">
 @include('inc.navbar')
 @include('inc.messages')
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal"><img src="{{URL::asset('assets/img/logo.png')}}">Jail Appeal</a> 
        
          
      </div>
      <div class="sidebar-wrapper">
          @include('inc.sidenav')
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">All Settings</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
                <div class="col-md-10">
                        <div class="card">
                          <div class="card-header card-header-primary">
                            <h4 class="card-title ">Edit Setting For Courts Name</h4>
                            <p class="card-category"> Court Name Detials</p>
                          </div>
                          <table id="dataTableCourts" class="table table-hover table-light table-condensed" style="width:100%">
                                <div class="card-body">
                                        <div class="table-responsive">
                                <thead class="text-primary">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name_en</th>
                                            <th>Name_bn</th>
                                            <th>Action</th>
                                            
                                           
                                            
                                        </tr>
                                    </thead>
                                    
                               </table> 
                    
                    </div>
                </div>
            </div>
        </div>
          </div>
        </div>
      </div>
      
      <footer class="footer">
        @include('inc.footer')
      </footer>
    </div>
  </div>
  <!-- JavaScripts Styles    -->
 
  <script>

        $(function() {

            $('#dataTableCourts').DataTable({

                processing: true,

                serverSide: true,

                ajax: '{!! route('get.data') !!}',

                columns: [

                    { data: 'id', name: 'id' },

                    { data: 'name_en', name: 'name_en' },

                    { data: 'name_bn', name: 'name_bn' },
                    
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                    
                ]

            });

        });
                  
        </script>
        <script>
        $('#dataTableCourts').on('click', '.CourtDelete', function (e) { 
                        var id = $(this).attr('data-id');
                       
                      e.preventDefault();
                      $.ajaxSetup({
                      headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        
                      }
                      });

                      swal({
                      title: "Are you sure ??",
                      text: "You won't be able to revert this!", 
                      icon: "warning",
                      buttons: true,
                      dangerMode: true,
                      })
                      .then((willDelete) => {
                      if (willDelete) {
                      
                      $.ajax({

                      url: "my-datatables/court_name_destroy/"+id,
                      type: 'GET',
                      dataType: "HTML",
                      data: {
                          "id": id,
                          "_method": 'DELETE',
                                      
                          },
                          success: function (data) {
                              swal("Done!","It was succesfully deleted!","success");
                            },
                          error: function (xhr, ajaxOptions, thrownError) {
                              swal("Error deleting!", "Name being used", "error");
                          }
                      })
                      .always(function (data) {
                      $('#dataTableCourts').DataTable().draw(false);
                      });
                      
                      } else {
                      Swal({
                      title:'Dismissed!',
                      text:'Your record is safe.',
                      type:'error',
                      timer:5000,
                      }) 
                      }
                      });
                      });
        </script>
         @stack('scripts')
         @include('inc.scriptstyle')
         @include('sweet::alert')

</body>

<script>
//---------Script for Sweetalrt action on editsettingPage-------Courts Name Deleted---------

</script>


  
{{-- <!-- // window.location.href = "editsettings/sentence_name_destroy/{{$sentence_data->id}}"; --> --}}
</html>
{{-- $('#dataTableCourts').on('click', '.btn-delete[data-remote]', function (e) { 
  var id = $(this).data("id");
e.preventDefault();
$.ajaxSetup({
headers: {
  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});

swal({
title: "Are you sure ??",
text: "You won't be able to revert this!", 
icon: "warning",
buttons: true,
dangerMode: true,
})
.then((willDelete) => {
if (willDelete) {
Swal({
title:'Deleted!',
text:'Your file has been deleted successfully.',
type:'success',
timer:5000,

}) 
$.ajax({

url: "mydatatables/dRemove/"+id,
type: 'GET',
dataType: "JSON",
data: {
    "id": id,
    "_method": 'DELETE',
                
    }
}).always(function (data) {
$('#users-table').DataTable().draw(false);
});
$(document).ajaxStop(function(){
      window.location.reload();
    });
} else {
Swal({
title:'Dismissed!',
text:'Your file is safe.',
type:'error',
timer:5000,
}) 
}
});
}); --}}