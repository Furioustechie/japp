<div class="modal fade " id="#overdue_{{$totalOverDue->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <input type="text" name="appeal_id" value="{{ $totalOverDue->id }}" class="form-control" readonly>
              </div>
            </div>
            <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating text-info" style="font-size: 14px;">Case NO</label>
                    <input type="text" name="case_no" value="{{$totalOverDue->case_no}}" class="form-control" disabled>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating text-info" style="font-size: 14px;">Prison Name</label><br>
                      {{-- <input type="text" name="prisoner_name" value="{{$totalOverDue->prison_name}}" class="form-control" disabled> --}}

                      <select name="prison_name" class="browser-default custom-select">
                        @foreach ($prisonName as $pname)
                            <option value="{{ $pname->id }}" <?php if($pname->id == $totalOverDue->prison_id) echo 'selected="selected"';?>>{{ $pname->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating text-info" style="font-size: 14px;">Offence Name</label>
                        <input type="text" name="offence_name" value="{{$totalOverDue->offence_name}}" class="form-control" disabled>
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating text-info" style="font-size: 14px;">Prisoner Name</label>
                          <input type="text" name="prisoner_name" value="{{$totalOverDue->prisoner_name}}" class="form-control" disabled>
                        </div>
                      </div>
                      
                      {{-- <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating text-info" style="font-size: 14px;">Checked Privacy Agreement</label>
                            @if($totalOverDue->privacy == 1)
                            <input type="text" name="prisoner_name" value="YES" class="form-control" disabled>
                            @else
                            <input type="text" name="prisoner_name" value="NO" class="form-control" disabled>
                            @endif
                          </div>
                        </div> --}}
              </div>
  {{-- <label for="id" class="form-control col-md-6 ">ID : {{$totalOverDue->id}}</label><br>
  <label for="caseno" class="form-control col-md-6">Case No : {{$totalOverDue->case_no}}</label>
  <label for="sentencetype" class="btn btn-success  col-md-6">Offence Name </label><span class = "label label-default  col-md-6">{{$totalOverDue->offence_name}}</span><br><br>
  <label class="btn btn-success  col-md-6">Prison Name </label><span class = "label label-default col-md-6">{{$totalOverDue->prison_name}}</span><br><br>
  <label class="btn btn-success  col-md-6">Prisoner Name </label><span class = "label label-default col-md-6">{{$totalOverDue->prisoner_name}}</span><br><br>
  <hr class="style10"> <br> 
  <label class="btn btn-info  col-md-4">Signed Privacy </label><span class = "label label-default col-md-8">{{$totalOverDue->privacy}}</span><br><br>--}}
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
        //$optt = DB::select('SELECT * FROM status WHERE id NOT IN (SELECT statusid FROM totalOverDuestatus WHERE newtotalOverDues_id="'.$appId.'" )');
       $optt = DB::select(' SELECT * FROM status WHERE id NOT IN (SELECT statusid FROM appealstatus WHERE newappeals_id="'.$appId.'" and state<>"red" AND state<>"todo")');
        ?>
            <option value="">Please Select..</option>
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
    <option value="todo" >No, Reminder Sent</option>
   
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
      <input type="text" name="case_no" value="" class="form-control">
      @endif
    </div>
  </div>
<div class="col-md-12">
  <div class="form-group">
    <label class="bmd-label-floating">Remarks- If there any</label>
    <input type="text" name="rejectgrant" class="form-control" required>
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
                echo '<button type="submit" class="btn btn-warning pull-right" name="courts_submit" value="submit" formaction="appeals/update/{{$totalOverDue->id}}">Save changes</button>';

              }     
              else{
               echo  '<button type="submit" class="btn btn-primary pull-right" name="courts_submit" value="submit" formaction="appeals/update/{{$totalOverDue->id}}">Save changes</button>';

              }
              ?>

  </div>
</div>
</div>
</form>
</div>