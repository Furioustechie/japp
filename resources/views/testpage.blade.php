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
        <a href="#" class="simple-text logo-normal"><img src="assets/img/logo.png">Jail Appeal</a> 
        
          
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
                          <button type="button" class="btn btn-primary btn-link btn-sm pull-right" data-toggle="modal" data-target="#modalCourtForm"><i class="material-icons">add</i>Add New Court Name</button>
                          <table id="example" class="table table-hover table-light table-condensed" style="width:100%">
                            <div class="card-body">
                                    <div class="table-responsive">
                            <thead class="text-primary">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name in English</th>
                                        <th>Name in Bangla</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                        @if(count($courts_name) > 0)
                                        @foreach ($courts_name as $court_data)
                              <tr>          
                                <td>{{$court_data->id}}</td>
                                <td>{{$court_data->name_en}}</td>
                                <td>{{$court_data->name_bn}}</td>
                                <td class="text-right"><a href="/testedit/{{$court_data->id}}"><i class="material-icons">edit</i></a>
                                  <a href="#" class="CourtsDelete delete" data-id="{{$court_data->id}}" data-token="{{ csrf_token() }}"><i class="material-icons">delete</i></a>
                            
                                  
                            </td>
                            
                               
                                    </tr>
                                    @endforeach
                                  @else
                      <p>Nothing Found</p>
                      @endif
                                </tbody>
                    </table> 
                    </div>
                </div>
            </div>
        </div>
          </div>
        </div>
      </div>
      @include('inc.modals')
      <footer class="footer">
        @include('inc.footer')
      </footer>
    </div>
  </div>
  <!-- JavaScripts Styles    -->
  @include('inc.scriptstyle')
  @include('sweet::alert')
</body>


<script>
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#dataTablex tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#dataTablex').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );
</script>

<script>
$('#dataTablex').dataTable( {
  "pageLength": 5
} );
  </script>


<script>
    $(document).ready(function() {
        // Setup - add a text input to each footer cell
        $('#dataTableSentence tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
        } );
     
        // DataTable
        var table = $('#dataTableSentence').DataTable();
     
        // Apply the search
        table.columns().every( function () {
            var that = this;
     
            $( 'input', this.footer() ).on( 'keyup change', function () {
                if ( that.search() !== this.value ) {
                    that
                        .search( this.value )
                        .draw();
                }
            } );
        } );
    } );
    </script>
    <script>
    $('#dataTableSentence').dataTable( {
      "pageLength": 5
    } );
      </script>


<script>
    $(document).ready(function() {
      
        // Setup - add a text input to each footer cell
        $('#dataTableCourts tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
        } );
     
        // DataTable
        var table = $('#dataTableCourts').DataTable();
     
        // Apply the search
        table.columns().every( function () {
            var that = this;
     
            $( 'input', this.footer() ).on( 'keyup change', function () {
                if ( that.search() !== this.value ) {
                    that
                        .search( this.value )
                        .draw();
                }
            } );
        } );
    } );
    </script>
    <script>
    $('#dataTableCourts').dataTable( {
      "pageLength": 5
    } );
      </script>


<script>
    $(document).ready(function() {
        // Setup - add a text input to each footer cell
        $('#dataTableOffence tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
        } );
     
        // DataTable
        var table = $('#dataTableOffence').DataTable();
     
        // Apply the search
        table.columns().every( function () {
            var that = this;
     
            $( 'input', this.footer() ).on( 'keyup change', function () {
                if ( that.search() !== this.value ) {
                    that
                        .search( this.value )
                        .draw();
                }
            } );
        } );
    } );
    </script>
    <script>
    $('#dataTableOffence').dataTable( {
      "pageLength": 5
    } );
      </script>

<script>
  $(document).ready(function() {
      // Setup - add a text input to each footer cell
      $('#dataTableStatus tfoot th').each( function () {
          var title = $(this).text();
          $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
      } );
   
      // DataTable
      var table = $('#dataTableStatus').DataTable();
   
      // Apply the search
      table.columns().every( function () {
          var that = this;
   
          $( 'input', this.footer() ).on( 'keyup change', function () {
              if ( that.search() !== this.value ) {
                  that
                      .search( this.value )
                      .draw();
              }
          } );
      } );
  } );
  </script>
  <script>
  $('#dataTableStatus').dataTable( {
    "pageLength": 5
  } );
    </script>

<script>
    $('.removeItem').click(function (event) {
          var id = $(this).data("id");
          var token = $(this).data("token");
          swal({
              title: "Are you sure ??",
              text: "Your file has been deleted.", 
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
        $.ajax(
            {
              url: "editsettings/sentence_name_destroy/"+id,
              type: 'GET',
              dataType: "JSON",
              data: {
                    "id": id,
                    "_method": 'DELETE',
                    "_token": token,               
                    }
            });
            $(document).ajaxStop(function(){
                      window.location.reload();
                    });
            } else {
                Swal({
              title:'Canceled!',
              text:'Your file is safe.',
              type:'error',
              timer:5000,
              }) 
            }
      });
   });
</script>
   <script>
  
   </script>
   <script>
   $(document).ready(function() {
    $('#example').DataTable( {
               "deferRender": true
    } );
} );
   </script>
{{-- <!-- // window.location.href = "editsettings/sentence_name_destroy/{{$sentence_data->id}}"; --> --}}
</html>
