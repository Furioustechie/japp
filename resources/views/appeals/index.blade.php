<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="../assets/DataTablesx/datatables.min.css"/>
  

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
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="./dashboard.html">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./user.html">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="./tables.html">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./typography.html">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Appeal Records</h4>
                  <p class="card-category"> Details Appeal Information</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
				            <table class="table table-hover table-light" id="dataTable" width="100%" cellspacing="0">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Case No</th>
                        <th>Sentence Type </th>
                        <th>Prison Name</th>
                        <th>Appealed On</th>
                        <th>Remarks</th>
                        <th>Command</th>
                      </thead>
					  <tfoot class="text-primary">
						<th>ID</th>
                        <th>Case No</th>
                        <th>Sentence Type </th>
                        <th>Prison Name</th>
                        <th>Appealed On</th>
                        <th>Remarks</th>
                        <th>Command</th>
					  </tfoot>
                      <tbody>
                                @if(count($appeals) > 1)
                                @foreach($appeals as $appeal)
                        <tr>
                          <td>{{$appeal->id}}</td>
                          <td>{{$appeal->caseno}}</td>
                          <td>{{$appeal->sentencetype}}</td>
                          <td>{{$appeal->prisonname}}</td>
                          <td>{{$appeal->created_at}}</td>
                          <td>{{$appeal->remarks}}</td>
						  
                          <td class="td-actions text-center">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm" data-toggle="modal" data-target="#{{$appeal->id}}">
                              <i class="material-icons">edit</i>
                            </button>
                             <!-- Modal -->
                             
                             <?php 
                              $appId = $appeal->id;
                              $url = "appeals/update/".$appId; 
                             ?>
                                  <div class="modal fade" id="{{$appeal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <!--<form action="{{url($url)}}" method="POST" enctype="multipart/form-data">-->
                                      <form action="appeals/update/{{$appeal->id}})" method="POST" enctype="multipart/form-data">
                                  <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                  <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Appeal Details</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                  </button>
                                  </div>

                                  <div class="modal-body text-left">
                                  <div class="md-form mb-12">
                                  <label for="id" class="form-control validate">ID : {{$appeal->id}}</label><br>
                                  <label for="caseno" class="form-control validate">Case No : {{$appeal->caseno}}</label>
                                  <label for="sentencetype" class="btn btn-success  col-md-6">Sentence Type </label><span class = "label label-default  col-md-6">{{$appeal->sentencetype}}</span><br><br>
                                  <label class="btn btn-success  col-md-6">Prison Name </label><span class = "label label-default col-md-6">{{$appeal->prisonname}}</span><br><br>
                                  <label class="btn btn-success  col-md-6">Appealed On </label><span class = "label label-default col-md-6">{{$appeal->created_at}}</span><br><br>
                                  <hr class="style10"> <br>
                                  <label class="btn btn-info  col-md-4">Attached CC </label><span class = "label label-default col-md-8">{{$appeal->options}}</span><br><br>
                                  <label class="btn btn-info  col-md-4">Jail Application </label><a href="{{ asset('/storage/jail_app') }}/{{$appeal->file_app}}" target="_blank"> <span class = "label label-default col-md-6">{{$appeal->file_app}}</span></a><br><br>
                                  <label class="btn btn-info  col-md-4">BJ Application </label><a href="{{ asset('/storage/bj_app') }}/{{$appeal->file_bj}}" target="_blank"> <span class = "label label-default col-md-6">{{$appeal->file_bj}}</span></a><br><br>
                                  <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox"  name="options1" checked>
                                      {{-- <input class="form-check-input" type="checkbox" id="checkgrant" name="checkgrant"  unchecked onclick=" if($(this).is(':checked'))
                                                                                                                            alert('Checked! Confirming that CC Reached at Court');
                                                                                                                        else
                                                                                                                            alert('Unchecked!! Write your remarks below');"> --}}
                                      <span class="form-check-sign">
                                        <span class="check" name="check"></span>
                                      </span>
                                      <h5>Application has been granted for hearing</h5>
                                    </label>
                                  
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Remarks- If not grant</label>
                                        <input type="text" name="rejectgrant" class="form-control">
                                      </div>
                                    </div>
                                   
                                  </div>

                                  </div>

                                  </div>
                                  <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  {{ csrf_field() }}
                                  <button type="submit" class="btn btn-primary pull-right" name="submit" value="submit">Save changes</button>
                                  </div>
                                  </div>
                                  </div>
                                  </form>
                                  </div>

                                  <!-- End Modal -->
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                          <i class="material-icons">close</i>
                                        </button>
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
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Table on Plain Background</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Country
                        </th>
                        <th>
                          City
                        </th>
                        <th>
                          Salary
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
                          </td>
                          <td>
                            $36,738
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td>
                            $23,789
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            Netherlands
                          </td>
                          <td>
                            Baileux
                          </td>
                          <td>
                            $56,142
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Philip Chaney
                          </td>
                          <td>
                            Korea, South
                          </td>
                          <td>
                            Overland Park
                          </td>
                          <td>
                            $38,735
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Doris Greene
                          </td>
                          <td>
                            Malawi
                          </td>
                          <td>
                            Feldkirchen in Kärnten
                          </td>
                          <td>
                            $63,542
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            Mason Porter
                          </td>
                          <td>
                            Chile
                          </td>
                          <td>
                            Gloucester
                          </td>
                          <td>
                            $78,615
                          </td>
                        </tr>
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
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!-- Datatables JS -->
  <script src="../assets/datatables/dataTables.bootstrap4.js"></script>
   <script src="../assets/datatables/jquery.dataTables.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script type="text/javascript" src="../assets/DataTablesx/datatables.min.js"></script>
</body>


<script>
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#dataTable tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#dataTable').DataTable();
 
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
