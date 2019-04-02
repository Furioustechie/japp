<!DOCTYPE html>
<html lang="en">

<head>
  @include('inc.style')
  <style>
.myDiv{
	display:none;
}  

</style>

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
                 <div class="col-md-12">
                    <form action="/search" method="POST">
                        <div class="input-group">
                        <input type="search" data-placeholder="Search by - CaseNO or PrisonName or ID" name="search" id="search"  class="form-control">
                        <span class="inut-group-prepend">
                          @csrf();
                        <button type="submit" name="btn_search" class="btn btn-primary"><i class="material-icons">search</i></button>
                        </span>
                        
                        </form>
                    </div>
                <div>
            
                 <div class="card-body">
                  <div class="table-responsive">
				            <table class="table table-hover table-light display nowrap" id="dataTable_no" cellspacing="0" style="width: auto !important">
                      <thead class=" text-primary" style="white-space: nowrap">
                        <th>ID</th>
                        <th>Case No</th>
                        <th>Offence</th>
                        <th>Prison Name</th>
                        {{-- <th>Appealed On</th> --}}
                        <th>Status</th>
                        <th>Command</th>
                      </thead>
					  <tfoot class="text-primary">
					            	<th>ID</th>
                        <th>Case No</th>
                        <th>Offence</th>
                        <th>Prison Name</th>
                        {{-- <th>Appealed On</th> --}}
                        <th>Status</th>
                        <th>Command</th>
					  </tfoot>
                      <tbody style="white-space: nowrap;">
                                @if(count($appDetails) > 0)
                                @foreach($appDetails as $appeal)
                        <tr>
                          <td>{{$appeal->id}}</td>
                          <td>{{$appeal->case_no}}</td>
                          <td>{{$appeal->offence_name}}</td>
                          <td>{{$appeal->prison_name}}</td>
                          <td>
                                                                <ol class="etapier">
        
                                                                    @php
                                                                    $apStatus = DB::select('SELECT S.status_name,
                                                                    IFNULL((SELECT statusid FROM appealstatus WHERE
                                                                    statusid=S.id AND newappeals_id="'.$appeal->id.'"),0)
                                                                    AS statusid,(SELECT state FROM appealstatus WHERE
                                                                    statusid=S.id AND newappeals_id="'.$appeal->id.'") as stateno, (SELECT updated_at FROM appealstatus WHERE
                                                                    statusid=S.id AND newappeals_id="'.$appeal->id.'") as updated_at
                                                                    FROM status AS S');

                                                                    $last_state =  DB::select('select * from appealstatus where newappeals_id="'.$appeal->id.'" order by statusid desc limit 1');
                                                                
                                                                    $totalrow =  DB::select('select COUNT(*) as status_count from appealstatus where newappeals_id="'.$appeal->id.'"');
                                                                    
                                                                    $total=$totalrow[0]->status_count;
                                                                  // print_r($totalrow);
                                                                  $current_state = $total;
                                                                    $total= $total+1;
                                                                        
                                                                        @$date1 = date_create(@$last_state[0]->updated_at);
                                                                        @$date2 = date_create(date('Y-m-d H:i:s'));
                                                                        @$diff = date_diff($date1,$date2);
                                                                        @$mydate = $diff->format("%a");
      
                                                                    @endphp
                                                                    @foreach($status_name as $pp)
        
                                                                    @php
                                                                    $item = null;
                                                                   
                                                                    @endphp
                                                                    @foreach($apStatus as $key=>$struct)
                                                                    
                                                                    @if ($pp->id == $struct->statusid)
                                                                    @php $item = $struct;
                                                                    break;
                                                                    @endphp
                                                                    @endif
                                                                    @endforeach
        
        
        
                                                                    @if($item)

                                                                      
                                                                          @if(($mydate > 10 ) AND ($struct->stateno == 'todo'))
                                                                          <li class="orange" id="test" style="border-color:orange;" data-toggle="tooltip" data-placement="top"
                                                                          title="{{ $pp->status_name }}"></li>
                                                                          @else
                                                                          <li class="{{ $struct->stateno }}" id="test" style="border-color:{{ $struct->stateno }};" data-toggle="tooltip" data-placement="top"
                                                                            title="{{ $pp->status_name }}"></li>
                                                                          @endif
                                                                      
                                                                    @else
                                                                   
                                                                    @if(($mydate > 10 ) AND ($total == $loop->iteration) AND ((@$last_state[0]->state != 'red') AND (@$last_state[0]->state != 'todo'))) 
                                                                    <li class="orange" id="test" style="border-color:orange;" data-toggle="tooltip" data-placement="top"
                                                                                    title="{{ $pp->status_name }}"></li>
                                                                      @else
                                                                    
                                                                      <li class="todo" data-toggle="tooltip" data-placement="top"
                                                                      title="{{ $pp->status_name }}"><span class="d-none d-sm-block"><a href=""></a></span></li>
                                                                      @endif     
                                                                    @endif
        
                                                                    @endforeach
        
        
        
                                                                </ol>
                                                            </td>
						  
                          <td class="td-actions text-center">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm" data-toggle="modal" data-target="#{{$appeal->id}}">
                              <i class="material-icons">edit</i>
                            </button>
                            
                             <!-- Modal Start -->
                             
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
                           <form  method="POST" enctype="multipart/form-data">
                                  <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content">
                                  <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Appeal Details</h5>
                                  <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
                                  <span aria-hidden="true">&times;</span>
                                  </button>
                                  </div>
                      
                                  <div class="modal-body text-left">
                                  <div class="md-form mb-12">
                                      <div class="row">  
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                <label class="bmd-label-floating text-info" style="font-size: 14px;">Appeal ID</label>
                                                <input type="text" name="appeal_id" value="{{ $appeal->id }}" class="form-control" readonly>
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
                                                      <label class="bmd-label-floating text-info" style="font-size: 14px;">Prison Name</label><br>
                                                      <select name="prison_name" class="browser-default custom-select">
                                                        @foreach ($prisonName as $pname)
                                                            <option value="{{ $pname->id }}" <?=$pname->id==$appeal->prisonid ? ' selected="selected"' : '';?>>{{ $pname->name }}</option>
                                                        @endforeach
                                                      </select>
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
                                                      
                                                      {{-- <div class="col-md-4">
                                                          <div class="form-group">
                                                            <label class="bmd-label-floating text-info" style="font-size: 14px;">Checked Privacy Agreement</label>
                                                            @if($appeal->privacy == 1)
                                                            <input type="text" name="prisoner_name" value="YES" class="form-control" disabled>
                                                            @else
                                                            <input type="text" name="prisoner_name" value="NO" class="form-control" disabled>
                                                            @endif
                                                          </div>
                                                        </div> --}}
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
                                 <div class="row mb-12">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating text-info" style="font-size: 14px;">Update Status</label><br>
                                        <select id="myselection" class="browser-default custom-select myselection" name="status_id">

                                        <!-- Custom Query for Option Value -->
                                        <?php 
                                        //$optt = DB::select('SELECT * FROM status WHERE id NOT IN (SELECT statusid FROM appealstatus WHERE newappeals_id="'.$appId.'" )');
                                       $optt = DB::select(' SELECT * FROM status WHERE id NOT IN (SELECT statusid FROM appealstatus WHERE newappeals_id="'.$appId.'" and state<>"red" AND state<>"todo")');
                                        ?>
                                            <option>Please Select..</option>
                                              <?php $i=1; ?>
                                                @foreach ($optt as $sdata)
                                                 @if($i++ == 1)        
                                              <option value="{{ $sdata->id }}" >{{$sdata->status_name}}</option>
                                             
                                              @else
                                              <option disabled value="{{$sdata->id}}" >{{$sdata->status_name}}</option>
                                              @endif

                                                  @endforeach
                                          </select>

                                        </div>
                                          </div>
                                          
                                    <div>
                                  </div>
                                  @php
                                  $option_display = DB::select('SELECT statusid 
                                                    FROM appealstatus 
                                                    WHERE newappeals_id="'.$appId.'"
                                                    ORDER BY statusid DESC LIMIT 1');
                              // echo (@$last_state[0]->statusid);
                                  @endphp  

                                 
                                  <div class="col-md-6 show">
                                  <div class="form-group">
                                  <label class="bmd-label-floating text-info" style="font-size: 14px;">Update State for selected Status*</label><br>
                                  <select class="browser-default custom-select" name="state">
                                    @if((@$last_state[0]->statusid != 2) AND (@$last_state[0]->statusid != 3))
                                    <option>Please Select..</option>
                                    <option value="yellowgreen" >Yes, We did</option>
                                    <option value="red" >No, We didn't</option>
                                    @else
                                    <option>Please Select..</option>
                                    <option value="yellowgreen" >Yes, We did</option>
                                    <option value="todo" >No, We didn't. Reminder Sent</option>
                                    @endif
                                    </select>
                                  </div>
                                  </div> 
                                  </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Appeal No.</label>
                                      @if(@$last_state[0]->statusid == 4) 
                                      <input type="text" name="case_no" value="" class="form-control">
                                      @endif
                                    </div>
                                  </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Remarks- If there any</label>
                                    <input type="text" name="rejectgrant" class="form-control">
                                  </div>
                                </div>
                                <p>
                                  <a class="btn btn-info" data-toggle="collapse" href="#log_{{ $appId }}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Show Log
                                  </a>
                                </p>
                                @php
                                  $showlog = DB::select('SELECT * FROM notifications WHERE appeal_id="'.$appId.'" ORDER BY updated_at');  
                                @endphp
                                <div class="collapse" id="log_{{ $appId }}">
                                  <div class="card card-body">
                                      <div class="card-header card-header-success">
                                      @foreach ($showlog as $log)
                                      @php
                                          $logview = json_decode($log->data);
                                         //print_r($logview);
                                      @endphp
                                      <p><i class="material-icons" style="vertical-align: middle;">calendar_today</i> On {{ $log->updated_at }}</p>
                                      <p><i class="material-icons" style="vertical-align: middle;">check_circle</i> {{ $logview->data }}</p>
                                      <hr>
                                      @endforeach
                                    </div>
                                  </div>
                                </div>
                                  </div>
                                  </div>
                                 
                                  <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick='window.location.reload()'>Close</button>
                                  {{ csrf_field() }}
                                  

                                  <?php 
                                    $bs = DB::select('SELECT distinct(state)
                                                        FROM appealstatus
                                                          WHERE state="red" and newappeals_id="'.$appId.'"');
                                                        // print_r($bs);
                             
                                              if(!empty($bs))  {
                                                echo '<button type="submit" class="btn btn-warning pull-right" name="courts_submit" value="submit" formaction="appeals/update/{{$appeal->id}}">Save changes</button>';

                                              }     
                                              else{
                                               echo  '<button type="submit" class="btn btn-primary pull-right" name="courts_submit" value="submit" formaction="appeals/update/{{$appeal->id}}">Save changes</button>';

                                              }
                                              ?>
                       
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
                    <div class="col-md-5 offset-md-5">  {{ $appDetails->links() }}</div>
                  
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
  <script type="text/javascript">
    // $('#search').on('keyup',function(){
    // $value=$(this).val();
    // $.ajax({
    // type : 'get',
    // url : '{{URL::to('search')}}',
    // data:{'search':$value},
    // success:function(data){
    // $('tbody').html(data);
    // }
    // });
    // })
    </script>
    <script src="{{URL::asset('assets/js/core/jquery.introducing.min.js')}}"></script>
    <script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>
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
$('#dataTable').dataTable( {
    "paging": false
} );
$('#btnFiterSubmitSearch').click(function(){
     $('#dataTable').DataTable().draw(true);
  });
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
    <script>
    $('.show').hide();
    $('.myselection').change(function() {
    $('.show').show();
});
</script>
<script>
$('.modal').on('hide', function() {
window.location.reload();
});
</script>
<script type="text/javascript">
	$('input').introducing()
</script>
</html>
