<!DOCTYPE html>
<html lang="en">

<head>
  @include('inc.style')
 
</head>

<body class="">
    
 {{-- @include('inc.navbar') --}}
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
      @include('inc.header')
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

                                        <!-- Custom Query for Option Value -->
                                        <?php 
                                        $optt = DB::select('SELECT * FROM status WHERE id NOT IN (SELECT statusid FROM appealstatus WHERE newappeals_id="'.$appId.'")');
                                        ?>
                                            <option>Please Select..</option>
                                              <?php $i=1; ?>
                                                @foreach ($optt as $sdata)
                                                 @if($i++ == 1)        
                                              <option value="{{$sdata->id}}" >{{$sdata->status_name}}</option>
                                              @else
                                              <option disabled value="{{$sdata->id}}" >{{$sdata->status_name}}</option>
                                              @endif

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
                                      <span class="form-check-sign">status_name
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