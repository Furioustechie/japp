<div class="table-responsive">
    <table id="dataTable_thisYear" class="display nowrap dtr-inline" style="width:100%">
        <thead class="text-primary">
            <th style="width:2%"">{{ __('labels.CC_id') }}</th>
            <th style="white-space: nowrap; width:5%"">{{ __('labels.CC_case_no') }}</th>
            <th style="white-space: nowrap; width:10%">{{ __('labels.prison_name') }}</th>
            <th style="white-space: nowrap; width:5%">{{ __('labels.prisoner_name') }}</th>
            <th style="white-space: nowrap;">{{ __('labels.CC_status') }}</th>
            <th style="white-space: nowrap;">{{ __('labels.CC_view_in_detail') }}</th>
        </thead>
    
        <tbody>

            @if(count($appDetails_pendingForCC_Prison) > 0)
            @foreach($appDetails_pendingForCC_Prison as $appeal)
            <tr>
                <td>{{ $appeal->id }}</td>
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
                              {{-- @if(($mydate > 10 ) AND ($key === key($apStatus)) AND $struct->stateno=='red') --}}
                              <li class="{{ $struct->stateno }}" id="test" style="border-color:{{ $struct->stateno }};" data-toggle="tooltip" data-placement="top"
                                title="{{ $pp->status_name }}"></li>
                        @else
                        @if(($mydate > 10 ) AND ($total == $loop->iteration) AND (@$last_state[0]->state != 'red') )
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
                <td style="text-align: center;"> 
                    @if(@$last_state[0]->state == 'red' && @$last_state[0]->statusid == 2)
                    <a href="#" data-toggle="modal" data-target="#edit_appeal"  data-id="{{ $appeal->id }}" class="edit_appeal"><i class="material-icons">edit</i></a></td>
                        @else
                        <a href="#" data-toggle="modal" data-target="#edit_appeal"  data-id="{{ $appeal->id }}" class="edit_appeal"><i class="material-icons">remove_red_eye</i></a></td>
                    @endif
                <!--Deatils Modal Start -->
                <!--Deatils Modal End -->
            </tr>
            @endforeach
            @else
            <p>Nothing Found</p>
            @endif
        </tbody>
    </table>
    <div class="col-md-5 offset-md-5">{{ $appDetails_pendingForCC_Prison->links() }}</div>
</div> 