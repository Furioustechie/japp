<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
{{-- <html lang="{{ app()->getLocale() }}"> --}}
<head>
    <!-- CSS Style Sheet -->
    @include('inc.style')
    <!-- End CSS Style Sheet -->
    <style type="text/css">

        .preloader 
        {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('assets/img/loader.gif') 50% 50% no-repeat rgb(249,249,249);
            opacity: .8;
        }
        div.show {        /* this will hide div with id div_id_name */
                display:none;
                }
        div.show_total {        /* this will hide div with id div_id_name */
                display:none;
                }
        div.show_resolved {        /* this will hide div with id div_id_name */
                display:none;
                }          

          </style>
</head>
<?php $appealtest=''?>
<script>
        $(document).ready(function(){
            $('#myselection').click(function() {
                $('.show').show();
                $('.show_total').hide();
                $('.show_resolved').hide();          
                 });
            $('#seeAll').click(function() {
                $('.show').hide();
                $('.show_resolved').hide();
                $('.show_total').show();  
                    });
           $('#seeResolved').click(function() {
                $('.show').hide();
                $('.show_total').hide(); 
                $('.show_resolved').show(); 
                    });
           $('#allAppeal').click(function() {
                $('.show').hide();
                $('.show_total').hide(); 
                $('.show_resolved').hide(); 
                    });
                $('#monthAppeals').click(function() {
                $('.show').hide();
                    });   
                $('#pendingCC').click(function() {
                $('.show_total').hide(); 
                    });   
                $('#appealsResolved').click(function() {
                $('.show_resolved').hide(); 
                    }); 
        //   $('.bn').click(function() {
        //         $('.bn').hide(); 
        //             });                
        });
        </script>

<body class="">

   
    @include('inc.appealApplicationModal')
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="#" class="simple-text logo-normal"><img src="{{URL::asset('assets/img/logo.png')}}">{{ __('labels.logo_title') }}</a>


            </div>
            <div class="sidebar-wrapper">
                <!-- Side Navbar -->
                @include('inc.sidenav')
                <!-- End Navbar -->
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            @include('inc.header')
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">content_copy</i>
                                    </div>
                                    <p class="card-category">{{ __('labels.prison_totalAppeal') }}</p>
                                    <h3 class="card-title">
                                       {{ $countAppeals_byPrison[0]->totalid }}
                                        <small></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">warning</i>
                                        <a href="#" id="allAppeal">{{ __('labels.prison_seeAll') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">store</i>
                                    </div>
                                    <p class="card-category">{{ __('labels.prison_thisYear') }}</p>
                                    <h3 class="card-title">
                                            {{ $lastYearAppeals_byPrison[0]->totalAppeal }}
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i><a href="#" id="myselection">{{ __('labels.prison_lastMonth') }}</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">info_outline</i>
                                    </div>
                                    <p class="card-category">{{ __('labels.prison_pendingForCC') }}</p>
                                    <h3 class="card-title">{{ $cc_missing_count_forPrison[0]->total_cc_missing }}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> <a href="#" id="seeAll">{{ __('labels.prison_ccNotFound') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                    <p class="card-category">{{ __('labels.prison_appealResolved') }}</p>
                                    <h3 class="card-title">{{ count($appDetails_appealResolved_Prison) }}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i><a href="#" id="seeResolved">{{ __('labels.justUpdated') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card show animated onece fadeIn">
                            <div class="card-header card-header-success">
                                    <h4 class="card-title mt-0">{{ __('labels.prison_inThisMonth') }}</strong><span class="float-right"><button type="button" class="close" id="monthAppeals" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></span></h4>
                                          </button>
                                    <p class="card-category"></p>
                            </div>
                            <div class="card-body">
                                    <div class="table-responsive">
                                            <table id="dataTable_thisYear" class="display nowrap dtr-inline" style="width:100%">
                                                <thead class="text-primary">
                                                    <th>{{ __('labels.resolved_id') }}</th>
                                                    <th style="white-space: nowrap;">{{ __('labels.resolved_case_no') }}</th>
                                                    {{-- <th>Prisoner Name </th>
                                                    <th>Prison Name</th>--}}
                                                    <th style="white-space: nowrap;">{{ __('labels.resolved_status') }}</th>
                                                    <th style="white-space: nowrap;">{{ __('labels.resolved_view_in_detail') }}</th>
                                                </thead>
                                            
                                                <tbody>
    
                                                    @if(count($appDetails_thisYear) > 0)
                                                    @foreach($appDetails_thisYear as $appeal)
                                                    <tr>
                                                        <td>{{ $appeal->id }}</td>
                                                        <td>{{$appeal->case_no}}</td>
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
                                                            <a href="#" data-toggle="modal" data-target="#edit_appeal"  data-id="{{ $appeal->id }}" class="edit_appeal"><i class="material-icons">remove_red_eye</i></a></td>
                                                        <!--Deatils Modal Start -->
                                                        <!--Deatils Modal End -->
                                                    </tr>
                                                    @endforeach
                                                    @else
                                                    <p>Nothing Found</p>
                                                    @endif
                                                </tbody>
                                            </table>
                                            <div class="col-md-5 offset-md-5">{{ $appDetails_thisYear->links() }}</div>
                                        </div> 
                            </div>
                    </div>
                </div>
                <div class="col-md-12">
                        <div class="card show_total">
                            <div class="card-header card-header-danger">
                                    <h4 class="card-title mt-0">{{__('labels.prison_detailsPending') }}</strong><span class="float-right"><button type="button" class="close" id="pendingCC" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></span></h4>
                                    <p class="card-category"></p>
                            </div>
                            <div class="card-body">
                                    <div class="table-responsive">
                                            <table id="dataTable_thisYear" class="display nowrap dtr-inline" style="width:100%">
                                                <thead class="text-primary">
                                                    <th>{{ __('labels.CC_id') }}</th>
                                                    <th style="white-space: nowrap;">{{ __('labels.CC_case_no') }}</th>
                                                    {{-- <th>Prisoner Name </th>
                                                    <th>Prison Name</th>--}}
                                                    <th style="white-space: nowrap;">{{ __('labels.CC_status') }}</th>
                                                    <th style="white-space: nowrap;">{{ __('labels.CC_view_in_detail') }}</th>
                                                </thead>
                                            
                                                <tbody>
    
                                                    @if(count($appDetails_pendingForCC_Prison) > 0)
                                                    @foreach($appDetails_pendingForCC_Prison as $appeal)
                                                    <tr>
                                                        <td>{{ $appeal->id }}</td>
                                                        <td>{{$appeal->case_no}}</td>
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
                                                            <a href="#" data-toggle="modal" data-target="#edit_appeal"  data-id="{{ $appeal->id }}" class="edit_appeal"><i class="material-icons">remove_red_eye</i></a></td>
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
                            </div>
                    </div>
                </div>
                <div class="col-md-12">
                        <div class="card show_resolved">
                            <div class="card-header card-header-info">
                            <h4 class="card-title mt-0">{{ __('labels.prison_detailsOfResolved') }}</strong><span class="float-right"><button type="button" class="close" id="appealsResolved" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></span></h4>
                                    <p class="card-category"></p>
                            </div>
                            <div class="card-body">
                                    <div class="table-responsive">
                                            <table id="dataTable_thisYear" class="display nowrap dtr-inline" style="width:100%">
                                                <thead class="text-primary">
                                                    <th>{{ __('labels.lastMonth_id') }}</th>
                                                    <th style="white-space: nowrap;">{{ __('labels.lastMonth_case_no') }}</th>
                                                    {{-- <th>Prisoner Name </th>
                                                    <th>Prison Name</th>--}}
                                                    <th style="white-space: nowrap;">{{ __('labels.lastMonth_status') }}</th>
                                                    <th style="white-space: nowrap;">{{ __('labels.lastMonth_view_in_detail') }}</th>
                                                </thead>
                                            
                                                <tbody>
    
                                                    @if(count($appDetails_appealResolved_Prison) > 0)
                                                    @foreach($appDetails_appealResolved_Prison as $appeal)
                                                    <tr>
                                                        <td>{{ $appeal->id }}</td>
                                                        <td>{{$appeal->case_no}}</td>
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
                                                            <a href="#" data-toggle="modal" data-target="#edit_appeal"  data-id="{{ $appeal->id }}" class="edit_appeal"><i class="material-icons">remove_red_eye</i></a></td>
                                                        <!--Deatils Modal Start -->
                                                        <!--Deatils Modal End -->
                                                    </tr>
                                                    @endforeach
                                                    @else
                                                    <p>Nothing Found</p>
                                                    @endif
                                                </tbody>
                                            </table>
                                            <div class="col-md-5 offset-md-5">{{ $appDetails_appealResolved_Prison->links() }}</div>
                                        </div> 
                            </div>
                    </div>
                </div>
                    <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        @php
                                         
                                        // $district_name = DB::Select('SELECT name FROM prisons where disid = (select district_id from users where id='.Auth::user()->id.')');
                                        @endphp
                                        <h4 class="card-title mt-0">{{ __('labels.prison_appealDetailsFrom') }} <strong>{{ @$district_name[0]->name }}</strong></h4>
                                        <p class="card-category"></p>
                                    </div>
                           <div class="card-body">
                           <button type="button" class="btn btn-raised btn-primary pull-right" data-toggle="modal" data-target="#appealModal"  data-id="appealModal" >{{ __('labels.create_appeal')}}</button>
                               
                                <div class="table-responsive">
                                                <table id="dataTable_Details" class="display nowrap dtr-inline" style="width:100%">
                                                    <thead class="text-primary">
                                                        <th>{{ __('labels.id') }}</th>
                                                        <th>{{ __('labels.case_no') }}</th>
                                                        {{-- <th>Prisoner Name </th>
                                                        <th>Prison Name</th>--}}
                                                        <th>{{ __('labels.status') }}</th>
                                                        <th>{{ __('labels.view_in_detail') }}</th>
                                                    </thead>
                                                
                                                    <tbody>
        
                                                        @if(count($appDetails) > 0)
                                                        @foreach($appDetails as $appeal)
                                                        <tr>
                                                            <td>{{ $appeal->id }}</td>
                                                            <td>{{$appeal->case_no}}</td>
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
                                                                <a href="#" data-toggle="modal" data-target="#edit_appeal"  data-id="{{ $appeal->id }}" class="edit_appeal"><i class="material-icons">remove_red_eye</i></a></td>
                                                            <!--Deatils Modal Start -->
                                                            <!--Deatils Modal End -->
                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        <p>Nothing Found</p>
                                                        @endif
                                                    </tbody>
                                                </table>
                                                
                                            </div> 
                        <!-----End Of Block for All Application Deatils ------->
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="modal fade" id="edit_appeal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content ">
                    <div class="modal-header text-center" style="background-color:#00bcd4;">
                        <h4 class="modal-title w-100 font-weight-bold" style="color:white">Appeal Status</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="row" id="appeal_details">
                                  <!---   Modal Body -->
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="material-icons">thumb_up</i> GOT IT</button>
                    </div>
                  </div>
                </div>
              </div>
          
              <footer class="footer">
                @include('inc.footer')
            </footer>
        </div>
    </div>
    
   {{-- @include('inc.appealHistoryModal') --}}
    
    @include('inc.scriptstyle')
    <script>
     $(document).on("click", ".show", function () {
    var itemid= $(this).attr('data-id');
    $("#abc").attr("abc_"+itemid)
 });
    </script>
    <script type="text/javascript">

        $(document).ready(function() {
          $('.fup').hide();
          $('#doctype').select2({
                dropdownParent: $('#filename')
            });
          $('.myselect').select2({
            placeholder: 'Select an option'
          });
         
          
        });
    
    </script>
    <script>
                $('.progress').hide();
                $('input[type=file]').change(function() { 
                $('.progress').show();
                var current_progress = 0;
                var interval = setInterval(function() {
                    current_progress += 10;
                    $("#dynamic")
                    .css("width", current_progress + "%")
                    .attr("aria-valuenow", current_progress)
                    .text(current_progress + "% Complete");
                    if (current_progress >= 100)
                        clearInterval(interval);
                }, 1000);
              });
                                     </script>
                                      <script>
                                          // $("#fileinput").hide();
                                          $("#fileinput1").hide();
                                          // $('#appealcourt').on('click', function () {
                                          //   console.log(this.val());
                                          // });
                                          
                                          $('#doctype').on('change', function () {
                                            // console.log();
                                            $('.fup').hide();
                                           var fupload = $(this).val();
                                            $.each(fupload, function( index, value ) {
                                              console.log( value );
                                              $("#fileinput_"+value).show();
                                          });
                                          return false;
                                            if(this.value==1){
                                              $("#fileinput").show();
                                             
                                            }else if(this.value==2){
                                              $("#fileinput1").show();
                                            }else{
                                              //
                                            }
                                              
                                          });
                                          
                                          
                                          </script>
                                          
                                      
                   {!! Toastr::message() !!}
</body>
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
                  if ( that.search() == this.value ) {
                      that
                          .search( this.value )
                          .draw();
                  }
              } );
          } );
      } );
      </script>
<script>
 $(document).ready(function () {
        $("body").on("click", ".edit_appeal", function () {
            var id = $(this).data('id');
            console.log(id);
            $("#edit_appeal").find("input[name='appeal_id']").val(id);
            $.ajax({
                url: "/abc/" + id,
                method: "get",

                data: {
                    id: id
                },
                success: function (data) {
                    console.log(data);
                    // $("#edit_appeal").find("input[name='appeal_id']").val(id);
                    $("#appeal_details").html(data);
                    //  $(".edit_appeal").modal(show);
                }
            });
        });
    });
</script>

</body>
</html>
