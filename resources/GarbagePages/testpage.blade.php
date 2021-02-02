<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
 <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal animated onece slideInLeft"><img src="{{URL::asset('assets/img/logo.png')}}">{{ __('labels.logo_title') }}</a>
        
          
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
                  <h4 class="card-title ">Appeal Records Update From Notification</h4>
                  <p class="card-category"> Details Appeal Information</p>
                </div>
                <div class="card-body">
                  {{-- <div class="table-responsive">
				      
                    <table id="dataTable_xyz" class="table table-hover table-light display nowrap"   style="width:100%">
                      <div class="card-body">
                          <div class="table-responsive">
                              <thead class="text-primary">
                                  <tr>
                                      <th>ID</th>
                                      <th>Case No</th>
                                      <th>Prison Name</th>
                                      <th>Status</th>
                                      <th>Action</th>
                              </tr>
                          </thead>
                          
                     </table>
                  </div> --}}
@foreach ($Details_appeal as $appeal)
<?php 
$last_state =  DB::select('select * from appealstatus where newappeals_id="'.$appeal->id.'" order by statusid desc limit 1');

$appId = $appeal->id;
$url = "appeals/update/".$appId; 
$ddd = DB::select('SELECT doctype.docname, documents.filename
                          FROM newappeals na
                          
                            INNER JOIN documents ON na.id = documents.appealid
                            INNER JOIN doctype ON doctype.id = documents.doctypeid
                           
                            WHERE na.id="'.$appId.'"');
                           // print_r($ddd);
                          

?>

                  <form>
                    @csrf
                          <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                          <div class="modal-header text-center" style="background-color:#00bcd4;">
                          <h5 class="modal-title w-100 font-weight-bold" id="MyModalLabel" style="color:white" id="exampleModalLabel">Jail Appeal Application Details</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
              
                          <div class="modal-body text-left ">
                          <div class="md-form mb-12">
                              <div class="row">  
                  <span class="col-md-5 offset-sm-1 border border-info">
                  <legend>Application Details</legend><br>
                  
                  <!-- <form action="prisonDashboard/updateFromPrison" method="post"> <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                  <div class="md-form form-group mt-2">
                  
                  <input type="text" class="form-control" id="appeal_id" name="appeal_id" value="{{$appeal->id}}" readonly>
                  <label class="label text-info font-weight-bold" for="">Appeal ID</label></div>
                  <div class="md-form form-group mt-2">
                  <label class="label text-info font-weight-bold" for="">Prison Name</label><br>
                    <select name="prison_name" id="prison_name" class="browser-default custom-select prison_name">
                      @foreach ($prisonName as $pname)
                          <option value="{{ $pname->id }}" <?php if($pname->id == $appeal->prison_id) echo 'selected="selected"';?>>{{ $pname->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="md-form form-group mt-2">
                  <input type="text" class="form-control" id="court_name" name="court_name" value="{{$appeal->court_name}}" disabled>
                  <label class="label text-info font-weight-bold" for="">Sentencing Court</label></div>
                  <div class="md-form form-group mt-2">
                  <input type="text" class="form-control" id="prisoner_name" name="prisoner_name" value="{{$appeal->prisoner_name}}" disabled>
                  <label class="label text-info font-weight-bold" for="">Prisoner Name</label></div>
                  <div class="md-form form-group mt-2">
                  <input type="text" class="form-control" id="act_name" name="act_name" value="{{$appeal->act_name}}" disabled>
                  <label class="label text-info font-weight-bold" for="">Offence Details</label></div>
                  <div class="md-form form-group mt-2">
                  <input type="text" class="form-control" id="case_no" name="case_no" value="{{$appeal->case_no}}" disabled>
                  <label class="label text-info font-weight-bold" for="">Case NO</label></div>  
                  <label class="bmd-label-floating text-info" style="font-size: 14px;">Attachments :</label><br>
                               @foreach($ddd as $d)
                              
                          @if($d->docname == 'BJ_Form')
                          <label class="btn-warning  col-md-4">BJ Form </label><a href="{{ asset('/files/') }}/{{$d->filename}}" target="_blank"> <span class = "label label-default col-md-6">{{$d->filename}}</span></a><br><br>
                          @endif
                          @if($d->docname == 'APP_Form')
                          <label class="btn-warning  col-md-4">Letter From Prison </label><a href="{{ asset('/files/') }}/{{$d->filename}}" target="_blank"> <span class = "label label-default col-md-6">{{$d->filename}}</span></a><br>
                          @endif
                          @if($d->docname == 'ACK Letter')
                          <label class="btn-warning  col-md-4">Application Form </label><a href="{{ asset('/files/') }}/{{$d->filename}}" target="_blank"> <span class = "label label-default col-md-6">{{$d->filename}}</span></a><br><br>
                          @endif
                          @endforeach  
                  </span>
            
                  <span class="col-md-5  border border-info" >
                  <legend>Application Progress</legend><br>
                  <div class="col-md-12">
                  <div class="form-group">
                  <div class="bs-vertical-wizard" >
                  <ul>
            @php
            $appealStatus = DB::select('SELECT S.status_name, IFNULL((SELECT statusid FROM appealstatus WHERE statusid=S.id AND newappeals_id="'.$appeal->id.'"),0) 
              AS statusid,IFNULL((SELECT remarks FROM appealstatus WHERE statusid=S.id AND newappeals_id="'.$appeal->id.'"),"Nothing") 
              AS remarks, (SELECT state FROM appealstatus WHERE statusid=S.id AND newappeals_id="'.$appeal->id.'") as stateno,(SELECT updated_at FROM appealstatus WHERE statusid=S.id AND newappeals_id="'.$appeal->id.'") as status_updated_at
                  FROM status AS S');
            @endphp
            
                  @foreach($status_name as $pp)
                  <?php
                   $item = null;
                   
                      foreach($appealStatus as $struct){
                      
                        if ($pp->id == $struct->statusid){
                  
                            $item = $struct;
                            break;
                        }
                       }
                       ?>
                  
                  @if($item)
                      @if($struct->stateno == 'yellowgreen')
                        <li class="complete">
                        <a href="#" class="text-success">{{ $pp->status_name }}
                        <i class="ico fa fa-check ico-check" style="color:green"></i>
                        <span class="desc">Update on {{ $struct->status_updated_at }}</span>
                        <span class="desc">Remarks: {{ $struct->remarks }}</span>
                        </a>
                        </li>
                  
                      @else
                        <li class="complete">
                        <a href="#" class="text-danger">{{ $pp->status_name }}
                        <i class="ico fa fa-close ico-close" style="color:red"></i>
                        <span class="desc">Update on {{ $struct->status_updated_at }}</span>
                        <span class="desc">Remarks: {{ $struct->remarks }}</span>
                        </a>
                        </li>
                      @endif
                 
                  @else
                  
                      @if((@$mydate > 10 ) AND (@$appealotal == @$loop->iteration) AND (@$last_state[0]->state != 'red') )
                          <li class="complete">
                          <a href="#" class="text-warning">{{ $pp->status_name }}
                          <i class="ico fa fa-exclamation-circle" style="color:orange"></i>
                          <span class="desc">Update on {{ $struct->status_updated_at }}</span>
                          <span class="desc">Remarks: {{ $struct->remarks }}</span>
                          </a>
                          </li>
                      
                      @else
                          <li>
                          <a href="#">{{ $pp->status_name }}
                          <span class="desc">Nothing Yet!</span>
                          </a>
                          </li>
                      @endif
                 
                  @endif
                  @endforeach
                  </ul>
                  </div>
                  </div>
                  </div>
                  </span>
            
            <!-- </div> -->
                          
                          <!-- <hr class="style5" data-content="Attachments"><br> -->
                          
                          @php
                         $optt = DB::select(' SELECT * FROM status WHERE id NOT IN (SELECT statusid FROM appealstatus WHERE newappeals_id="'.$appId.'" and state<>"red" AND state<>"todo")');
                         $i=1;
                          @endphp
                          <span class="col-md-10 offset-sm-1 border border-info">
                          <div class="card">
                          <div class="card-header bg-info">
                          <a id="mycollapse" class="font-weight-bold" data-toggle="collapse" style="color:white" href="#updateStatus{{ $appeal->id }}" > Do you want to Update?</a>
                          </div>
                          <div class="card-body">
                          <div id="updateStatus{{ $appeal->id }}" class="panel-collapse collapse">
            
                         <div class="row mb-12">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating text-info" style="font-size: 14px;">Update Status</label><br>
                                <select id="myselection" class="browser-default custom-select myselection" name="status_id" required>
            
                                <!-- Custom Query for Option Value -->
                                <?php 
                                //$optt = DB::select('SELECT * FROM status WHERE id NOT IN (SELECT statusid FROM appealstatus WHERE newappeals_id="'.$appId.'" )');
                               $optt = DB::select(' SELECT * FROM status WHERE id NOT IN (SELECT statusid FROM appealstatus WHERE newappeals_id="'.$appId.'" and state<>"red" AND state<>"todo")');
                                ?>
                                      <?php $i=1; ?>
                                    <option value="">Please Select..</option>
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
                                  
                            <!-- <div>
                          </div> -->
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
                          <select class="browser-default custom-select state" id="state" name="state" required>
                            @if((@$last_state[0]->statusid == 6) OR (@$last_state[0]->statusid ==7 ) OR (@$last_state[0]->statusid == 8) OR (@$last_state[0]->statusid == 9))
                            <option value="">Please Select..</option>
                            <option value="yellowgreen" >Yes, We did </option>
                            <option value="todo" >No, Reminder Sent</option>
                            @elseif(empty($last_state[0]->statusid) OR (@$last_state[0]->statusid == 2 ) OR (@$last_state[0]->statusid == 5) OR (@$last_state[0]->statusid == 6 ))
                            {{-- @elseif((@$last_state[0]->statusid == 1) OR (@$last_state[0]->statusid == 3 ) OR (@$last_state[0]->statusid == 5) OR (@$last_state[0]->statusid == 6 )) --}}
                            <option value="">Please Select..</option>
                            <option value="yellowgreen" >Yes, We did</option>
                            {{-- <option value="todo" >No, Reminder Sent</option> --}}
                            @elseif((@$last_state[0]->statusid == 1) OR (@$last_state[0]->statusid == 10))
                            <option value="">Please Select..</option>
                            <option value="yellowgreen" >Yes, We did </option>
                            <option value="red" >Incomplete, Reminder Sent</option>
                           
                            @elseif(@$last_state[0]->statusid == 3)
                            <option value="">Please Select..</option>
                            <option value="yellowgreen" >Yes, We did </option>
                            <option value="todo" >No, Reminder Sent</option>
                            <option value="red" >Reject</option>
                            @elseif(@$last_state[0]->statusid == 4)
                            <option value="">Please Select..</option>
                            <option value="yellowgreen" >Yes, We did </option>
                            @endif
                            </select>
                          </div>
                          </div> 
                          </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                @if(@$last_state[0]->statusid == 4) 
                              <label class="bmd-label-floating">Appeal No.</label>
                              <input type="text" name="japp_no" id="japp_no" value="" class="form-control">
                              @endif
                            </div>
                          </div>
            
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating text-info">Remarks- If there any</label>
                            <input type="text" id="rejectgrant" name="rejectgrant" value="" class="form-control" required>
                          </div>
                        </div>
                        <p>
                          <a class="btn btn-info" data-toggle="collapse" href="#log_{{ $appeal->id }}" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Show Log
                          </a>
                        </p>
                        <?php
                          $showlog = DB::select('SELECT * FROM notifications WHERE appeal_id="'.$appeal->id.'" ORDER BY updated_at');  
                        ?>
                        <div class="collapse" id="log_{{ $appeal->id }}">
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
                        <button type="button" class="btn btn-warning pull-right" data-dismiss="modal">Close</button>
                          {{ csrf_field() }}
                          <button type="submit" class="btn btn-success pull-right courts_submit" data-dismiss="modal" name="courts_submit" id="courts_submit" value="submit">Update</button>
            
                          </div>
                          </div>
                          </div>
                          </div>   
                          </span>  
                          <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                          <button type="button" class="btn btn-warning pull-right gotit" data-dismiss="modal" value="Close Without Modify !">Close Without Modify !</button>
            
                          </div>
                        </div>
                      </div>
                  </form>
                  @endforeach
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
    $('#dataTable_z thead th').each( function () {
      
        var title = $(this).text();
        $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#dataTable_z').DataTable();
 
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
// $('#dataTable').dataTable( {
//     "paging": false
// } );
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
{{-- <script>
$('.modal').on('hide', function() {
window.location.reload();
});
</script> --}}

<script>
/* Edit Courts Item */
$(function() {
    var url = "/hc_details"
    $('#dataTable_xyz').DataTable({

        processing: true,

        serverSide: true,
        ajax: url,
        

        columns: [

            { data: 'id', name: 'id' },

            { data: 'case_no', name: 'case_no' },

            { data: 'prison_name', name: 'prison_name' },

            {data: 'status', name: 'status', orderable: false, searchable: false},
            {data: 'action', name: 'action', orderable: false, searchable: false}
            
        ]

    });

});
</script>
<script>
  $(document).ready(function(){
    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
  
           $(document).one('click','.courts_submit', function(e) { 
             e.preventDefault();
                  var appeal_id = $('#appeal_id').val();
                  var case_no = $('#case_no').val();
                  var prisoner_name = $('#prisoner_name').val();
                  var prison_name = $('select.prison_name option:selected').val();
                  var status_name = $('select.myselection option:selected').val();
                  var state = $('select.state option:selected').val();
                  var rejectgrant = $('#rejectgrant').val();
                  var japp_no = $('#japp_no').val();
                  var courts_submit = $('#courts_submit').val();
                  // if(state != ''){
                  //     alert('Empty');
                  // }
                  var dataString = 'appeal_id='+ appeal_id + '&case_no='+ case_no + '&prisoner_name='+ prisoner_name + '&status_id='+ status_name + '&state='+ state + '&prison_name='+ prison_name + '&courts_submit='+ courts_submit +'&rejectgrant='+ rejectgrant +'&japp_no='+ japp_no ;
                  console.log(dataString)
              $.ajax({
                          url: "/updateTest/"+appeal_id,
                          type: 'POST',
                          //dataType: 'application/json',
                          data: dataString,
                          success: function (data) {
                              Swal({
                                  title: data,
                                  type: "success",
                                  timer: 3000
                                  //html: data,
                                  //location.reload('/dashboard');
                              })
                              //$('.editapp').modal('hide');
                          },
                              
                                                  
                          error: function (xhr, ajaxOptions, thrownError) {
                              swal("Error!", "Check your input and remarks,Please!", "error");
                              //window.location.reload();
                              //$('.editapp').modal('hide');
                          }
                    });
                   
          });
      });
 
  </script>
</html>
