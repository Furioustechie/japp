<div class="table-responsive">
  <table id="dataTable_thisYear" class="display nowrap dtr-inline" style="width:100%">
    <thead class="text-primary">
        <th style="white-space: nowrap;width:2%">{{ __('labels.CC_id') }}</th>
        <th style="white-space: nowrap;width:5%">{{ __('labels.CC_case_no') }}</th>
        <th style="white-space: nowrap; width:5%">{{ __('labels.prison_name') }}</th>
        <th style="white-space: nowrap; width:5%">{{ __('labels.prisoner_name') }}</th>
        <th class="text-center" style="white-space: nowrap;">{{ __('labels.CC_status') }}</th>
        <th style="white-space: nowrap;">{{ __('labels.CC_view_in_detail') }}</th>
    </thead>
   
    <tbody style="white-space: nowrap;">
              @if(count($incompleteApplication_ForHC) > 0)
              @foreach($incompleteApplication_ForHC as $appeal)
      <tr>
        <td>{{$appeal->id}}</td>
        <td>{{$appeal->case_no}}</td>
        <td>{{$appeal->prison_name}}</td>
        <td>{{$appeal->prisoner_name}}</td>
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
          {{-- <a href="#" class="editapp" id="#editapp" data-toggle="modal" data-target="#abc_{{$appeal->id}}"><i class="material-icons">edit</i> </a> --}}
          <a href="#" data-toggle="modal" data-target="#edit_incomp_appeal_{{ $appeal->id }}" data-id="#edit_incomp_appeal_{{ $appeal->id }}" class="edit_appeal"><i class="material-icons">remove_red_eye</i></a></td>

          
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
                <div class="modal fade " id="edit_incomp_appeal_{{$appeal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <!-- <form action="{{url($url)}}" method="POST" enctype="multipart/form-data">-->
                    <form  method="POST" id="all_record" class="all_record" name="all_record" action="appeals/update/{{ $appeal->id }}" enctype="multipart/form-data">
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
                    
                        @if(($mydate > 10 ) AND (@$appealotal == @$loop->iteration) AND (@$last_state[0]->state != 'red') )
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
                            <a id="mycollapse" class="font-weight-bold" data-toggle="collapse" style="color:white" href="#updateStatus_incomplete{{ $appeal->id }}" > Do you want to Update?</a>
                            </div>
                            <div class="card-body">
                            <div id="updateStatus_incomplete{{ $appeal->id }}" class="panel-collapse collapse">
              
                           <div class="row mb-12">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label class="bmd-label-floating text-info" style="font-size: 14px;">Update Status</label><br>
                                  <select id="myselection_inc" class="browser-default custom-select myselection_inc" name="status_id" required>
              
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
                              <option value="yellowgreen" >Milestone Complete </option>
                              <option value="todo" >Incomplete, Reminder Sent</option>
                              @elseif(empty($last_state[0]->statusid)  OR (@$last_state[0]->statusid == 5) OR (@$last_state[0]->statusid == 6 ))
                              {{-- @elseif((@$last_state[0]->statusid == 1) OR (@$last_state[0]->statusid == 3 ) OR (@$last_state[0]->statusid == 5) OR (@$last_state[0]->statusid == 6 )) --}}
                              <option value="">Please Select..</option>
                              <option value="yellowgreen" >Milestone Complete</option>
                              {{-- <option value="todo" >No, Reminder Sent</option> --}}
                              @elseif((@$last_state[0]->statusid == 1) OR (@$last_state[0]->statusid == 10))
                              <option value="">Please Select..</option>
                              <option value="yellowgreen" >Milestone Complete </option>
                              <option value="red" >Incomplete</option>
                              @elseif(@$last_state[0]->statusid == 2 AND @$last_state[0]->state == 'red')
                              <script>$('#myselection_inc').on('change',function(){swal('Wait a while','Waiting For Prison Update','error');});</script>
                              @elseif(@$last_state[0]->statusid == 2 AND @$last_state[0]->state == 'todo')
                              <option value="">Please Select..</option>
                              <option value="yellowgreen" >Milestone Complete </option>
                              <option value="todo" >Incomplete, Reminder Sent</option>
                              @elseif(@$last_state[0]->statusid == 3)
                              <option value="">Please Select..</option>
                              <option value="yellowgreen" >Milestone Complete </option>
                              <option value="todo" >Incomplete, Reminder Sent</option>
                              <option value="red" >Reject</option>
                              @elseif(@$last_state[0]->statusid == 4)
                              <option value="">Please Select..</option>
                              <option value="yellowgreen" >Milestone Complete </option>
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
                            <a class="btn btn-info" data-toggle="collapse" href="#log_inc{{ $appeal->id }}" role="button" aria-expanded="false" aria-controls="collapseExample">
                              Show Log
                            </a>
                          </p>
                          <?php
                            $showlog = DB::select('SELECT * FROM notifications WHERE appeal_id="'.$appeal->id.'" ORDER BY updated_at');  
                          ?>
                          <div class="collapse" id="log_inc{{ $appeal->id }}">
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
      </div>

                <!-- End Modal -->
                      
                    </td>
      </tr>
      @endforeach
              @else
              <p>Nothing Found</p>
              @endif
    </tbody>
  </table>
  <div class="col-md-5 offset-md-5">  {{ $incompleteApplication_ForHC->links() }}</div>

</div>
<script>
  $('.show').hide();
  $('.myselection_inc').change(function() {
  $('.show').show();
});
</script>