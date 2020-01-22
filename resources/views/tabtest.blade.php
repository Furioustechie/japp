<!DOCTYPE html>
<html lang="en">

<head>
  @include('inc.style')
  
  
</head>

<body class="">
 {{-- @include('inc.navbar') --}}
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
            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Edit Settings For Sentence Name</h4>
                  <p class="card-category"> Sentence Name Detials</p>
                </div>
                <button type="button" class="btn btn-primary btn-link btn-sm pull-right" data-toggle="modal" data-target="#modalSentenceForm"><i class="material-icons">add</i>Add New Sentence Name</button>
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTableSentence" class="table table-hover table-light table-condensed"  width="100%" cellspacing="0">
                                <thead class="text-primary">
                                  <th >ID </th>
                                  <th >Name</th>
                                  <th class="text-right">Command</th>
                                 
                                </thead>
                                <tfoot class="text-primary">
                                    <th>ID </th>
                                    <th>Name</th>
                                    <th class="text-right">Command</th>
                                    
                                </tfoot>
                                <tbody>
                                 
                                      @if(count($sents_name) > 0)
                                          @foreach ($sents_name as $sentence_data)
                                <tr>          
                                  <td>{{$sentence_data->id}}</td>
                                  <td>{{$sentence_data->sentence_name}}</td>
                                
                                  <td class="text-right">
                                     
                                      <button type="button"  rel="tooltip" title="Edit Record" class="btn btn-primary btn-link btn-sm" data-toggle="modal" data-target="#sentence_{{$sentence_data->id}}"><i class="material-icons">edit</i></button>
                                      <a href="#" class="SentenceDelete delete" data-id="{{$sentence_data->id}}" data-token="{{ csrf_token() }}"><i class="material-icons">delete</i></button></a>
                                    
                                  </td>
                                      <div class="modal fade" id="sentence_{{$sentence_data->id}}" tabindex="-1"  role="dialog" aria-labelledby="ModalLabelSentence" aria-hidden="true" >
                                         
                                        <form action="editsettings/update_sentence/{{$sentence_data->id}}" method="POST" enctype="multipart/form-data">
                                          {{ csrf_field() }}
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header text-center" style="background-color:#00bcd4;">
                                        <h5 class="modal-title w-100 font-weight-bold" style="color:white">Modify Sentence Name</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                              <label class="bmd-label-floating">Adjust Sentence Name</label>
                                              <input type="text" name="rename_sentence" value="<?php echo $sentence_data->sentence_name?>" class="form-control" required>
                                            </div>
                                          </div>
                                          
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-primary" id="submit" value="submit" name="rename_sentence_submit">Save</button>
                                            </div>
                                      </div>
                                    </div>
                                    </div>
                                    
                                    </form>
                                    </div>
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
                        <h4 class="card-title ">Edit Setting For Prison Name</h4>
                        <p class="card-category"> Prison Name Detials</p>
                      </div>
                      <button type="button" class="btn btn-primary btn-link btn-sm pull-right" data-toggle="modal" data-target="#modalPrisonForm"><i class="material-icons">add</i>Add New Prison Name</button>
                      <div class="card-body">
                        <div class="table-responsive">
                              <table id="dataTablex" class="table table-hover table-light table-condensed"  width="100%" cellspacing="0">
                                      <thead class="text-primary">
                                        <th >ID </th>
                                        <th >Name</th>
                                        <th class="text-right">Command</th>
                                       
                                      </thead>
                                      <tfoot class="text-primary">
                                          <th>ID </th>
                                          <th>Name</th>
                                          <th class="text-right">Command</th>
                                          
                                      </tfoot>
                                      <tbody>
                                       
                                            @if(count($pname) > 0)
                                                @foreach ($pname as $data)
                                      <tr>          
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->name}}</td>
                                      
                                        <td class="text-right"><button type="button" rel="tooltip" title="Edit Record" class="btn btn-primary btn-link btn-sm" data-toggle="modal" data-target="#prison_{{$data->id}}">
                                                <i class="material-icons">edit</i>
                                        <a href="#" class="PrisonDelete delete" data-id="{{$data->id}}" data-token="{{ csrf_token() }}"><button type="button" rel="tooltip" title="Delete Record" class="btn btn-primary btn-link btn-sm" >
                                            <i class="material-icons">delete</i></a>
                                          
                                        </td>
                                            <div class="modal fade" id="prison_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabelPrison" aria-hidden="true">
                                               
                                              <form action="editsettings/update/{{$data->id}})" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                              <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                              <div class="modal-header text-center" style="background-color:#00bcd4;">
                                              <h5 class="modal-title w-100 font-weight-bold" style="color:white">Modify Prison Name</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                              </button>
                                              </div>
                                              <br>
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                    <label class="bmd-label-floating">Adjust Prison Name</label>
                                                    <input type="text" name="rename_prison" value="<?php echo $data->name?>" class="form-control" required>
                                                  </div>
                                                </div>
                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" id="submit" value="submit" name="rename_prison_submit">Save</button>
                                                  </div>
                                            </div>
                                          </div>
                                          </div>
                                          
                                          </form>
                                          </div>
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
                                  <h4 class="card-title ">Edit Setting For Offence Name</h4>
                                  <p class="card-category"> Offence Name Detials</p>
                                </div>
                                <button type="button" class="btn btn-primary btn-link btn-sm pull-right" data-toggle="modal" data-target="#modalOffenceForm"><i class="material-icons">add</i>Add New Offence Name</button>
                                <div class="card-body">
                                  <div class="table-responsive">
                                      <table id="dataTableOffence" class="table table-hover table-light table-condensed"  width="100%" cellspacing="0">
                                          <thead class="text-primary">
                                            <th >ID </th>
                                            <th >Name</th>
                                            <th class="text-right">Command</th>
                                           
                                          </thead>
                                          <tfoot class="text-primary">
                                              <th>ID </th>
                                              <th>Name</th>
                                              <th class="text-right">Command</th>
                                              
                                          </tfoot>
                                          <tbody>
                                           
                                                @if(count($offence_name) > 0)
                                                    @foreach ($offence_name as $offence_data)
                                          <tr>          
                                            <td>{{$offence_data->id}}</td>
                                            <td>{{$offence_data->name}}</td>
                                          
                                            <td class="text-right"><button type="button" rel="tooltip" title="Edit Record" class="btn btn-primary btn-link btn-sm" data-toggle="modal" data-target="#offence_{{$offence_data->id}}">
                                                    <i class="material-icons">edit</i>
                                            <a href="#" class="OffenceDelete delete" data-id="{{$offence_data->id}}" data-token="{{ csrf_token() }}"><button type="button" rel="tooltip" title="Delete Record" class="btn btn-primary btn-link btn-sm" >
                                                <i class="material-icons">delete</i></a>
                                              
                                            </td>
                                                <div class="modal fade" id="offence_{{$offence_data->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabelOffence" aria-hidden="true">
                                                   
                                                  <form action="editsettings/update_offence/{{$offence_data->id}}" method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                  <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                  <div class="modal-header text-center" style="background-color:#00bcd4;">
                                                  <h5 class="modal-title w-100 font-weight-bold" style="color:white">Modify Offence Name</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                  </button>
                                                  </div>
                                                  <br>
                                                  <div class="col-md-12">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">Adjust Offence Name</label>
                                                        <input type="text" name="rename_offence" value="<?php echo $offence_data->name?>" class="form-control" required>
                                                      </div>
                                                    </div>
                                                    
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" id="submit" value="submit" name="rename_offence_submit">Save</button>
                                                      </div>
                                                </div>
                                              </div>
                                              </div>
                                              
                                              </form>
                                              </div>
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
                                      <h4 class="card-title ">Edit Setting For Status Name</h4>
                                      <p class="card-category"> Status Detials</p>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-link btn-sm pull-right" data-toggle="modal" data-target="#modalStatusForm"><i class="material-icons">add</i>Add New Status Name</button>
                                    <div class="card-body">
                                      <div class="table-responsive">
                                          <table id="dataTableStatus" class="table table-hover table-light table-condensed"  width="100%" cellspacing="0">
                                              <thead class="text-primary">
                                                <th >ID </th>
                                                <th >Name</th>
                                                <th class="text-right">Command</th>
                                               
                                              </thead>
                                              <tfoot class="text-primary">
                                                  <th>ID </th>
                                                  <th>Name</th>
                                                  <th class="text-right">Command</th>
                                                  
                                              </tfoot>
                                              <tbody>
                                               
                                                    @if(count($status_name) > 0)
                                                        @foreach ($status_name as $status_data)
                                              <tr>          
                                                <td>{{$status_data->id}}</td>
                                                <td>{{$status_data->status_name}}</td>
                                              
                                                <td class="text-right"><button type="button" rel="tooltip" title="Edit Record" class="btn btn-primary btn-link btn-sm" data-toggle="modal" data-target="#status_{{$status_data->id}}">
                                                        <i class="material-icons">edit</i>
                                                <a href="#" class="StatusDelete delete" data-id="{{$status_data->id}}" data-token="{{ csrf_token() }}"><button type="button" rel="tooltip" title="Delete Record" class="btn btn-primary btn-link btn-sm" >
                                                    <i class="material-icons">delete</i></a>
                                                  
                                                </td>
                                                    <div class="modal fade" id="status_{{$status_data->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabelOffence" aria-hidden="true">
                                                       
                                                      <form action="editsettings/update_status/{{$status_data->id}}" method="POST" enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                                                      <div class="modal-dialog" role="document">
                                                      <div class="modal-content">
                                                      <div class="modal-header text-center" style="background-color:#00bcd4;">
                                                      <h5 class="modal-title w-100 font-weight-bold" style="color:white">Modify Status Name</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                      </button>
                                                      </div>
                                                      <br>
                                                      <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label class="bmd-label-floating">Adjust Status Name</label>
                                                            <input type="text" name="rename_status" value="<?php echo $status_data->status_name?>" class="form-control" required>
                                                          </div>
                                                        </div>
                                                        
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary" id="submit" value="submit" name="rename_status_submit">Save</button>
                                                          </div>
                                                    </div>
                                                  </div>
                                                  </div>
                                                  
                                                  </form>
                                                  </div>
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
                                        <div class="card">
                                          <div class="card-header card-header-primary">
                                            <h4 class="card-title ">Edit Setting For Courts Name</h4>
                                            <p class="card-category"> Court Name Detials</p>
                                          </div>
                                          <button type="button" class="btn btn-primary btn-link btn-sm pull-right" data-toggle="modal" data-target="#modalCourtForm"><i class="material-icons">add</i>Add New Court Name</button>
                                        <table id="dataTableCourts" class="table table-hover table-light table-condensed" style="width:100%">
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
                                                    <td class="text-right"><button type="button" rel="tooltip" title="Edit Record" class="btn btn-primary btn-link btn-sm" data-toggle="modal" data-target="#court_{{$court_data->id}}">
                                                        <i class="material-icons">edit</i>
                                                    <a href="editsettings/court_name_destroy/{{$court_data->id}}" onclick="if(!confirm('Are you Sure to DELETE?')){return false;}"><button type="button" rel="tooltip" title="Delete Record" class="btn btn-primary btn-link btn-sm" >
                                                    <i class="material-icons">delete</i></a>
                                                  
                                                </td>
                                                {{--
                                                <div class="modal fade" id="court_{{$court_data->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCourt" aria-hidden="true">
                                                    <form action="editsettings/update_court/{{$court_data->id}}" method="POST" enctype="multipart/form-data">
                                                      {{ csrf_field() }}
                                                    <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header text-center" style="background-color:#00bcd4;">
                                                    <h5 class="modal-title w-100 font-weight-bold" style="color:white">Modify Court Name</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
        
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                          <label class="bmd-label-floating">Adjust Court Name</label>
                                                          <input type="text" name="rename_Court" value="<//?php echo $court_data->name?>" class="form-control" required>
                                                        </div>
                                                      </div>
                                                      
                                                      <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                          <button type="submit" class="btn btn-primary" id="submit" value="submit" name="rename_court_submit">Save</button>
                                                        </div>
                                                  </div>
                                                </div>
                                                </div>
                                                
                                                </form>
                                                </div> --}}
                                                   
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
   
</script>
   
{{-- <!-- // window.location.href = "editsettings/sentence_name_destroy/{{$sentence_data->id}}"; --> --}}
</html>
