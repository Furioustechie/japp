<!DOCTYPE html>
<html lang="en">

<head>
  @include('inc.style')
 
</head>

<body class="">
 @include('inc.navbar')
 @include('inc.messages')
 @include('inc.modals')
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
				            <table class="table table-hover table-light display nowrap" id="dataTable" width="100%" cellspacing="0">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Case No</th>
                        <th>Sentence Type </th>
                        <th>Prison Name</th>
                        <th>Appealed On</th>
                        <th>Status</th>
                        <th>Command</th>
                      </thead>
					  <tfoot class="text-primary">
					            	<th>ID</th>
                        <th>Case No</th>
                        <th>Sentence Type </th>
                        <th>Prison Name</th>
                        <th>Appealed On</th>
                        <th>Status</th>
                        <th>Command</th>
					  </tfoot>
                      <tbody>
                                @if(count($appDetails) > 0)
                                @foreach($appDetails as $appeal)
                        <tr>
                          <td>{{$appeal->id}}</td>
                          <td>{{$appeal->prison_name}}</td>
                          <td>{{$appeal->prisoner_name}}</td>
                          <td>{{$appeal->case_no}}</td>
                          <td>{{$appeal->offence_name}}</td>
                          <td>
                          <ol class="etapier">
                        <li class="done" data-toggle="tooltip" data-placement="top" title="App.Submitted"><a href="" >App. Submitted</a></li>
                        <li class="done" data-toggle="tooltip" data-placement="top" title="BJ Form Attached"><a href="">BJ Form Attached</a></li>
                        @if($appeal->privacy == 1)   
                        <li class="done" data-toggle="tooltip" data-placement="top" title="CC Found"><a href="">CC Found</a></li>    
                                      @else
                                      <li class="todo" data-toggle="tooltip" data-placement="top" title="CC Found"><a href="">CC Not Found</a></li>       
                                              
                                      @endif
                        
                        <li class="todo" data-toggle="tooltip" data-placement="top" title="Review in Progress"><a href="">Review in Progress</a></li>
                        <li class="todo" data-toggle="tooltip" data-placement="top" title="Appeal Resolved"><a href="">Appeal Resolved</a></li>
                    </ol>  
                          </td>
						  
                          <td class="td-actions text-center">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm" data-toggle="modal" data-target="#{{$appeal->id}}">
                              <i class="material-icons">edit</i>
                            </button>
                             <!-- Modal -->
                             
                             <?php 
                              $appId = $appeal->id;
                              $url = "appeals/update/".$appId; 
                              $ddd = DB::select('SELECT doctype.docname, documents.filename
                                                        FROM newappeals na
                                                        
                                                          INNER JOIN documents ON na.id = documents.appealid
                                                          INNER JOIN doctype ON doctype.id = documents.doctypeid
                                                         
                                                          WHERE na.id="'.$appId.'"');
                                                         // print_r($ddd);
                                                        

                             ?>
                                  <div class="modal fade " id="{{$appeal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <!-- <form action="{{url($url)}}" method="POST" enctype="multipart/form-data">-->
                           <form action="appeals/update/{{$appeal->id}})" method="POST" enctype="multipart/form-data">
                                  <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content">
                                  <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Appeal Details</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                  </button>
                                  </div>

                                  <div class="modal-body text-left">
                                  <div class="md-form mb-12">
                                      <div class="row">  
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                <label class="bmd-label-floating text-info" style="font-size: 14px;">Appeal ID</label>
                                                <input type="text" name="appeal_id" value="{{$appeal->id}}" class="form-control" readonly>
                                              </div>
                                            </div>
                                            <div class="col-md-4">
                                                  <div class="form-group">
                                                    <label class="bmd-label-floating text-info" style="font-size: 14px;">Case NO</label>
                                                    <input type="text" name="case_no" value="{{$appeal->case_no}}" class="form-control" disabled>
                                                  </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                      <label class="bmd-label-floating text-info" style="font-size: 14px;">Prison Name</label>
                                                      <input type="text" name="prison_name" value="{{$appeal->prison_name}}" class="form-control" disabled>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating text-info" style="font-size: 14px;">Offence Name</label>
                                                        <input type="text" name="offence_name" value="{{$appeal->offence_name}}" class="form-control" disabled>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                          <label class="bmd-label-floating text-info" style="font-size: 14px;">Prisoner Name</label>
                                                          <input type="text" name="prisoner_name" value="{{$appeal->prisoner_name}}" class="form-control" disabled>
                                                        </div>
                                                      </div>
                                                      
                                                      <div class="col-md-4">
                                                          <div class="form-group">
                                                            <label class="bmd-label-floating text-info" style="font-size: 14px;">Checked Privacy Agreement</label>
                                                            @if($appeal->privacy == 1)
                                                            <input type="text" name="prisoner_name" value="YES" class="form-control" disabled>
                                                            @else
                                                            <input type="text" name="prisoner_name" value="NO" class="form-control" disabled>
                                                            @endif
                                                          </div>
                                                        </div>
                                              </div>
                                  {{-- <label for="id" class="form-control col-md-6 ">ID : {{$appeal->id}}</label><br>
                                  <label for="caseno" class="form-control col-md-6">Case No : {{$appeal->case_no}}</label>
                                  <label for="sentencetype" class="btn btn-success  col-md-6">Offence Name </label><span class = "label label-default  col-md-6">{{$appeal->offence_name}}</span><br><br>
                                  <label class="btn btn-success  col-md-6">Prison Name </label><span class = "label label-default col-md-6">{{$appeal->prison_name}}</span><br><br>
                                  <label class="btn btn-success  col-md-6">Prisoner Name </label><span class = "label label-default col-md-6">{{$appeal->prisoner_name}}</span><br><br>
                                  <hr class="style10"> <br> 
                                  <label class="btn btn-info  col-md-4">Signed Privacy </label><span class = "label label-default col-md-8">{{$appeal->privacy}}</span><br><br>--}}
                                  <hr class="style5" data-content="Attachments"><br>
                                  <label class="bmd-label-floating text-info" style="font-size: 14px;">Attachments :</label><br>
                                       @foreach($ddd as $d)
                                      {{-- <label class="btn btn-info  col-md-4">BJ Form </label><a href="{{ asset('/files/') }}/{{$d->filename}}" target="_blank"> <span class = "label label-default col-md-6">{{$d->filename}}</span></a><br><br>
                                    @endforeach  --}}
                                  @if($d->docname == 'BJ_Form')
                                  <label class="btn btn-info  col-md-3">BJ Form </label><a href="{{ asset('/files/') }}/{{$d->filename}}" target="_blank"> <span class = "label label-default col-md-6">{{$d->filename}}</span></a><br><br>
                                  @endif
                                  @if($d->docname == 'APP_Form')
                                  <label class="btn btn-info  col-md-3">Letter From Prison </label><a href="{{ asset('/files/') }}/{{$d->filename}}" target="_blank"> <span class = "label label-default col-md-6">{{$d->filename}}</span></a><br><br>
                                  @endif
                                  @if($d->docname == 'ACK Letter')
                                  <label class="btn btn-info  col-md-3">Application Form </label><a href="{{ asset('/files/') }}/{{$d->filename}}" target="_blank"> <span class = "label label-default col-md-6">{{$d->filename}}</span></a><br><br>
                                  @endif
                                  @endforeach
                                 {{-- <!-- <div class="md-form mb-5">
                                      <label data-error="wrong" data-success="right" for="inputAge">Prison</label>
                                      <input type="text" id="inputAge" value="<?=$appeal->prison_name;?>" class="form-control validate">
                                    
                                  </div> --> --}}
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating text-info" style="font-size: 14px;">Update Status</label><br>
                                        <select class="browser-default custom-select" name="status_id">
                                            <option>Please Select..</option>
                                                @foreach ($status_name as $sdata)
                                                          
                                              <option value="{{$sdata->id}}">{{$sdata->status_name}} </option>
                                                  @endforeach
                                          </select>
                                    </div>
                                  </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Remarks- If not grant</label>
                                    <input type="text" name="rejectgrant" class="form-control">
                                  </div>
                                </div>
                                  <div class="form-check">
                                    <label class="form-check-label">
                                        {{-- <input class="form-check-input" type="checkbox"  name="options1" checked> --}}
                                      <input class="form-check-input" type="checkbox" id="checkgrant" name="checkgrant"  unchecked onclick=" if($(this).is(':checked'))
                                                                                                                            alert('Checked! Confirming that CC Reached at Court');
                                                                                                                        else
                                                                                                                            alert('Unchecked!! Write your remarks below');">
                                      <span class="form-check-sign">
                                        <span class="check" name="check"></span>
                                      </span>
                                      <h5 >Application has been granted</h5>
                                    </label>
                                                                      
                                  </div>

                                  </div>

                                  </div>
                                  <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  {{ csrf_field() }}
                                  <button type="submit" class="btn btn-primary pull-right" name="courts_submit" value="submit">Save changes</button>
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
                      <table id="dataTable_Details" class="display nowrap dtr-inline" style="width:100%">
                      <thead class="text-primary">
                          <th>ID</th>
                          <th>Case No</th>
                          <th>Prisoner Name </th>
                          <th>Prison Name</th>
                          <th>Offence Name</th>
                          <th>View in Detail</th>
                      </thead>
                      <tbody>
                                             
                            @if(count($appDetails) > 0)
                            @foreach($appDetails as $appeal_stat)
                        <tr>
                          <td>{{$appeal_stat->id}}</td>
                          <td>{{$appeal_stat->case_no}}</td>
                          <td>{{$appeal_stat->prisoner_name}}</td>
                          <td>{{$appeal_stat->prison_name}}</td>
                          <td>{{$appeal_stat->offence_name}}</td>
                          <td><button type="button" rel="tooltip" title="Details" class="btn btn-primary btn-link btn-sm" data-toggle="modal" data-target="#abc_{{$appeal_stat->id}}">
                              <i class="material-icons">description</i>
                            </button></td>
                            <!--Deatils Modal Start -->

                            <div class="modal fade " id="abc_{{$appeal_stat->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalStatus"
                            aria-hidden="true" >
                            <?php 
                            $applId = $appeal_stat->id;
                            $url = "appeals/update/".$applId; 
                            $dd = DB::select('SELECT doctype.docname, documents.filename
                                                      FROM newappeals na
                                                      
                                                        INNER JOIN documents ON na.id = documents.appealid
                                                        INNER JOIN doctype ON doctype.id = documents.doctypeid
                                                       
                                                        WHERE na.id="'.$applId.'"');
                                                       // print_r($ddd);
                                                      
                              $apStatus = DB::select('SELECT status.status_name, appealstatus.statusid
                                                      FROM newappeals na
                                                                                                            
                                                      INNER JOIN appealstatus ON na.id = appealstatus.newappeals_id
                                                      INNER JOIN status ON appealstatus.statusid = status.id

                                                      WHERE na.id="'.$applId.'"');
                           ?>
                            <form action="appeals/add_status" method="POST">
                                {{ csrf_field() }}
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content ">
                                <div class="modal-header text-center" style="background-color:#00bcd4;">
                                  <h4 class="modal-title w-100 font-weight-bold" style="color:white">Appeal Status</h4>
                                 
                                </div>
                                <br>
                                <div class="row"> 
                                    <span class="col-md-5 offset-sm-1 border border-primary"><legend>Application Details</legend><br>
                                    <!-- Material input -->
                                    <div class="md-form form-group mt-2">
                                        <input type="text" class="form-control" id="" value="{{$appeal_stat->id}}" disabled>
                                        <label class="label text-success font-weight-bold" for="">Appeal ID</label>
                                      </div>
                                      <div class="md-form form-group mt-2">
                                          <input type="text" class="form-control" id="" value="{{$appeal_stat->prison_name}}" disabled>
                                          <label class="label text-success font-weight-bold" for="">Prison Name</label>
                                        </div>
                                        <div class="md-form form-group mt-2">
                                          <input type="text" class="form-control" id=""  value="{{$appeal_stat->court_name}}" disabled>
                                          <label class="label text-success font-weight-bold" for="">Sentencing Court</label>
                                        </div>
                                        <div class="md-form form-group mt-2">
                                          <input type="text" class="form-control" id="" value="{{$appeal_stat->prisoner_name}}" disabled>
                                          <label class="label text-success font-weight-bold" for="">Prisoner Name</label>
                                        </div>
                                        <div class="md-form form-group mt-2">
                                            <input type="text" class="form-control" id="" value="{{$appeal_stat->offence_name}}" disabled>
                                            <label class="label text-success font-weight-bold" for="">Offence Name</label>
                                          </div>
                                          <div class="md-form form-group mt-2">
                                              <input type="text" class="form-control" id=""  value="{{$appeal_stat->case_no}}" disabled>
                                              <label class="label text-success font-weight-bold" for="">Case NO</label>
                                            </div>
                                          <div class="md-form form-group mt-2">
                                          <label class="label text-success font-weight-bold" for="">Attachemnts:</label><br>
                                          @foreach($dd as $d)
                                                        @if($d->docname == 'BJ_Form')
                                                              <label class="md-form form-group">BJ Form: </label><a href="{{ asset('/files/') }}/{{$d->filename}}" target="_blank"> <span class = "label label-default">{{$d->filename}}</span></a><br>
                                                         @endif
                                                        @if($d->docname == 'APP_Form')
                                                              <label class="md-form form-group">Application Form: </label><a href="{{ asset('/files/') }}/{{$d->filename}}" target="_blank"> <span class = "label label-default ">{{$d->filename}}</span></a>
                                                         @endif
                                                        @if($d->docname == 'ACK Letter')
                                                              <label class="md-form form-group">Letter From Prison:</label><a href="{{ asset('/files/') }}/{{$d->filename}}" target="_blank"> <span class = "label label-default ">{{$d->filename}}</span></a>                                                          @endif
                                                    @endforeach
                                                  </div>
                                    </span>
                                      <span class="col-md-5  border border-primary"><legend>Application Progress</legend><br>
                                      <div class="col-md-12">
                                            <div class="form-group">
                                                
                                                   <!-- Stepers Wrapper -->
                                                   
                                                   <div class="bs-vertical-wizard">
                                                      
                                                      <ul>
                                                          <?php $i=0; ?>
                                                         @foreach($apStatus as $ap)
                                                         <?php $i++; echo $i; ?>
                                                         @if($ap->statusid == 1)
                                                          <li class="complete">
                                                              <a href="#">Application Received <i class="ico fa fa-check ico-green"></i>
                                                                  <span class="desc"><?php echo date("Y-m-d");?></span>
                                                              </a>
                                                          </li>
                                                          <?php // echo $ap->statusid; ?>
                                                         
                                                          @endif
                                                        
                                                          
                                                          @endforeach
                                                          <li class="complete">
                                                              <a href="#">Application Marked as Complete <i class="ico fa fa-check ico-green"></i>
                                                                  <span class="desc"><?php echo date("Y-m-d");?></span>
                                                              </a>
                                                          </li>
                                                       
                                                          
                                                          <li class="current">
                                                              <a href="#">Case Docket Received 
                                                                  <span class="desc">Nothing Found</span>
                                                              </a>
                                                          </li>
                                                         
                                                          <li>
                                                              <a href="#">SC LAC Laywer Assigned
                                                                  <span class="desc">Nothing Found</span>
                                                              </a>
                                                          </li>
                                                          <li class="locked">
                                                              <a href="#">Upcoming Hearing Date <i class="ico fa fa-lock ico-muted"></i>
                                                                  <span class="desc">Nothing Found</span>
                                                              </a>
                                                          </li>
                                                          <li class="locked">
                                                              <a href="#">Results <i class="ico fa fa-lock ico-muted"></i>
                                                                  <span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, cumque.</span>
                                                              </a>
                                                          </li>
                                                          
                                                      </ul>
                                                    
                                                  </div>
                                                 
                                      <!-- /.Stepers Wrapper -->
                                                    
                                            </div>
                                          </div>
                                        
                                        </span>
                                        </div>
                            
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Okay!</button>
                                      </div>
                                </div>
                                
                              </div>
                            </form>
                            </div>


                             <!--Deatils Modal End -->

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
      <footer class="footer">
        @include('inc.footer')
      </footer>
    </div>
  </div>
  <!-- JavaScripts Styles    -->
  @include('inc.scriptstyle')
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

<script>
    $(document).ready(function() {
        // Setup - add a text input to each footer cell
        $('#dataTable_Details tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
        } );
     
        // DataTable
        var table = $('#dataTable_Details').DataTable();
     
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
dataTable_Details