<div class="table-responsive">
    <table id="dataTable_thisYear" class="display nowrap dtr-inline" style="width:100%">
        <thead class="text-primary">
            <th class="sorting" data-sorting_type="asc" data-column_name="id" style="cursor: pointer">{{ __('labels.resolved_id') }}<span id="id_icon"></span></th>
            <th class="sorting" data-sorting_type="asc" data-column_name="case_no" style="cursor: pointer;white-space: nowrap;">{{ __('labels.resolved_case_no') }}<span id="case_icon"></span></th>

            <th style="white-space: nowrap;">{{ __('labels.resolved_status') }}</th>
            <th style="white-space: nowrap;">{{ __('labels.resolved_view_in_detail') }}</th>
        </thead>
   
    <tbody style="white-space: nowrap;">
              @if(count($appDetails_allRecords) > 0)
              @foreach($appDetails_allRecords as $appeal)
      <tr>
        <td>{{$appeal->id}}</td>
        <td>{{$appeal->case_no}}</td>
        {{-- <td>{{$appeal->offence_name}}</td>
        <td>{{$appeal->prison_name}}</td> --}}
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
          <a href="#" class="editapp" data-toggle="modal" data-target="#abc_{{$appeal->id}}"><i class="material-icons">edit</i>
          </a>
          <a href="#" data-toggle="modal" data-target="#edit_appeal"  data-id="{{ $appeal->id }}" class="edit_appeal"><i class="material-icons">remove_red_eye</i></a></td>

          
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
        <div class="modal fade " id="abc_{{$appeal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <form  method="POST" id="all_Records" onsubmit="return getdata()" name="all_record_{{ $appeal->id }}" action="/appeals/update/{{ $appeal->id }}" enctype="multipart/form-data">
          @csrf
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
                              <input type="text" name="appeal_id" value="{{ $appeal->id }}" class="form-control" readonly>
                            </div>
                          </div>
                          <div class="col-md-4">
                                <div class="form-group">
                                  <label class="bmd-label-floating text-info" style="font-size: 14px;">Case NO</label>
                                  <input type="text" name="case_no" id="case_no" value="{{$appeal->case_no}}" class="form-control" disabled>
                                </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="bmd-label-floating text-info" style="font-size: 14px;">Prison Name</label><br>

                                    <select name="prison_name" id="prison_name" class="browser-default custom-select prison_name">
                                      @foreach ($prisonName as $pname)
                                          <option value="{{ $pname->id }}" <?php if($pname->id == $appeal->prison_id) echo 'selected="selected"';?>>{{ $pname->name }}</option>
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
 
                            </div>
                
                <hr class="style5" data-content="Attachments"><br>
                <label class="bmd-label-floating text-info" style="font-size: 14px;">Attachments :</label><br>
                     @foreach($ddd as $d)
                    
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
                      <select id="myselection" class="browser-default custom-select myselection" name="status_id" >

                      <!-- Custom Query for Option Value -->
                      <?php 
                      //$optt = DB::select('SELECT * FROM status WHERE id NOT IN (SELECT statusid FROM appealstatus WHERE newappeals_id="'.$appId.'" )');
                     $optt = DB::select(' SELECT * FROM status WHERE id NOT IN (SELECT statusid FROM appealstatus WHERE newappeals_id="'.$appId.'" and state<>"red" AND state<>"todo")');
                      ?>
                          <option value="" id="ch">Please Select..</option>
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
                <select class="browser-default custom-select state" id="state" name="state">
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
                  <input type="text" id="rejectgrant" name="rejectgrant" class="form-control" >
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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {{ csrf_field() }}
                

                <?php 
                  $bs = DB::select('SELECT distinct(state)
                                      FROM appealstatus
                                        WHERE state="red" and newappeals_id="'.$appId.'"');
                                      // print_r($bs);
           
                            if(!empty($bs))  {
                             
                              echo '<button type="submit" class="btn btn-warning pull-right smb" name="courts_submit" id="courts_submit" value="submit">Save</button>';
                             
                            }     
                            else{
                             echo  '<button type="submit" class="btn btn-primary pull-right courts_submit" name="courts_submit" id="courts_submit" value="submit" >Save</button>';
                             
                            }
                            ?>
                 

                
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
  <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
    <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
   </div>
  <div class="col-md-5 offset-md-5">  {{ $appDetails_allRecords->links() }}</div>

</div>
 <script>
    $('.show').hide();
    $('.myselection').change(function() {
    $('.show').show();
});
</script>
