<!DOCTYPE html>
<html lang="en">

<head>
  @include('inc.style')
  

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
        <a href="#" class="simple-text logo-normal">
            Jail Appeal
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="/dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="/appeals">
              <i class="material-icons">person</i>
              <p>Appeal List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/appealForm">
              <i class="material-icons">content_paste</i>
              <p>Appeal Now</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./typography.html">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item active ">
                <a class="nav-link" href="/editsettings">
                  <i class="material-icons">bubble_chart</i>
                  <p>Edit Settings</p>
                </a>
              </li>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Table List</a>
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
            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Edit Settings For Sentence Name</h4>
                  <p class="card-category"> Sentence Name Detials</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                        <table class="table table-hover">
                                <thead class="">
                                 
                                  <th>Name</th>
                                  <th>Country</th>
                                  <th>City</th>
                                  <th>Salary</th>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>Dakota Rice</td>
                                    <td>Niger</td>
                                    <td>Oud-Turnhout</td>
                                    <td>$36,738</td>
                                 
                                </tbody>
                              </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
                    <div class="card">
                      <div class="card-header card-header-primary">
                        <h4 class="card-title ">Edit Setting For Prison Name</h4>
                        <p class="card-category"> Prison Name Detials</p>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                              <table class="table table-hover table-light" id="dataTablex" width="100%" cellspacing="0">
                                      <thead class="text-primary">
                                        <th >ID </th>
                                        <th >Name</th>
                                        <th>Command</th>
                                       
                                      </thead>
                                      <tfoot class="text-primary">
                                          <th>ID </th>
                                          <th>Name</th>
                                          <th>Command</th>
                                          
                                      </tfoot>
                                      <tbody>
                                        <tr>
                                            @if(count($pname) > 1)
                                                @foreach ($pname as $data)
                                                   
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->name}}</td>
                                      
                                        <td><button type="button" rel="tooltip" title="Edit Record" class="btn btn-primary btn-link btn-sm" data-toggle="modal" data-target="#{{$data->id}}">
                                                <i class="material-icons">edit</i>
                                        <button type="button" rel="tooltip" title="Delete Record" class="btn btn-primary btn-link btn-sm" data-toggle="modal" data-target="#{{$data->id}}">
                                            <i class="material-icons">delete</i></td>
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
                  <div class="col-md-6">
                        <div class="card">
                          <div class="card-header card-header-primary">
                            <h4 class="card-title ">Edit Setting For Courts Name</h4>
                            <p class="card-category"> Court Name Detials</p>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                                  <table class="table table-hover">
                                          <thead class="">
                                            <th>ID </th>
                                            <th>Name</th>
                                            <th>Country</th>
                                            <th>City</th>
                                            <th>Salary</th>
                                          </thead>
                                          <tbody>
                                            <tr>
                                            <td>1</td>
                                            <td>Dakota Rice</td>
                                            <td>Niger</td>
                                            <td>Oud-Turnhout</td>
                                            <td>$36,738</td>
                                           
                                          </tbody>
                                        </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                            <div class="card">
                              <div class="card-header card-header-primary">
                                <h4 class="card-title ">Edit Setting For Status Name</h4>
                                <p class="card-category"> Status Name Detials</p>
                              </div>
                              <div class="card-body">
                                <div class="table-responsive">
                                      <table class="table table-hover" >
                                              <thead class="">
                                                <th>ID </th>
                                                <th>Name</th>
                                                <th>Country</th>
                                                <th>City</th>
                                                <th>Salary</th>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>Niger</td>
                                                <td>Oud-Turnhout</td>
                                                <td>$36,738</td>
                                               
                                              </tbody>
                                            </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                                <div class="card">
                                  <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Edit Setting For Offence Name</h4>
                                    <p class="card-category"> Offences Name Detials</p>
                                  </div>
                                  <div class="card-body">
                                    <div class="table-responsive">
                                          <table class="table table-hover">
                                                  <thead class="">
                                                    <th>ID </th>
                                                    <th>Name</th>
                                                    <th>Country</th>
                                                    <th>City</th>
                                                    <th>Salary</th>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                    <td>1</td>
                                                    <td>Dakota Rice</td>
                                                    <td>Niger</td>
                                                    <td>Oud-Turnhout</td>
                                                    <td>$36,738</td>
                                                   
                                                  </tbody>
                                                </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
        
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            {{-- <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web. --}}
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- JavaScripts Styles    -->
  @include('inc.scriptstyle')
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

</html>
