<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- CSS Style Sheet -->
    @include('inc.style')
    <!-- End CSS Style Sheet -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    
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
        div.show_datespan {        /* this will hide div with id div_id_name */
                display:none;
                }
        div.show_ccNotFound {        /* this will hide div with id div_id_name */
                display:none;
                }
        div.show_justUpdate {        /* this will hide div with id div_id_name */
                display:none;
                }   
                .zoom {
          transition: transform .2s;
          width: '100%';
          height: '100%';
          margin: 0 auto;
        }
        
        .zoom:hover {
          -ms-transform: scale(1.5); /* IE 9 */
          -webkit-transform: scale(1.5); /* Safari 3-8 */
          transform: scale(1.5); 
        }

                   
          </style>
<style>
:root{
    --white: #fff;
    --black: #000;
    --color_1: #89b743;
    --color_2: #ff9933;
    --color_3: #EA2027;
    --color_4: #00bfff;
}


.main-timeline{ font-family: 'Niramit', sans-serif; }

.main-timeline:after{
    content: '';
    display: block;
    clear: both;
}

.timeline{ margin: 0 -15px; }

.timeline-content{
    color: var(--color_1);
    text-align: left;
    display: block;
    position: relative;
}

.timeline-content:hover{ text-decoration: none; }

.timeline-icon{
    font-size: 70px;
    text-align: center;
    margin-bottom: 10px;
    transition: all 0.3s;
}

.timeline:hover .timeline-icon{ transform: rotateY(360deg); }

.timeline-year{
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
}

 .timeline-year:after{
    content: '';
    height: 60px;
    width: 107%;
    background-color: var(--color_1);
    transform: translateX(-50%) translateY(-50%);
    position: absolute;
    left: 50%;
    top: 50%;
    z-index: -1;
    -webkit-clip-path: polygon(90% 0, 100% 50%, 90% 100%, 0% 100%, 10% 50%, 0% 0%);
    clip-path: polygon(90% 0, 100% 50%, 90% 100%, 0% 100%, 10% 50%, 0% 0%);
}

.timeline-year span{
    color: var(--white);
    background-color: var(--color_1);
    font-size: 35px;
    font-weight: 600;
    text-align: center;
    line-height: 120px;
    height: 120px;
    width: 120px;
    margin: 0 auto;
    border-radius: 50%;
    box-shadow: 0 0 10px #999, 0 0 0 15px var(--white);
    display: block;
}

.inner-content{
    padding: 0 10px 10px 15px;
    border-left: 15px solid var(--color_1);
}

 .title{
    font-size: 25px;
    font-weight: 600;
    margin: 0 0 15px 0;
}

.description{
    color: #333;
    font-size: 15px;
    letter-spacing: 1px;
}

 .timeline.blue .timeline-icon,
.main-timeline .timeline.blue .title{
    color: var(--color_2);
}
.timeline.blue .timeline-year:after,
.timeline.blue .timeline-year span{
    background-color: var(--color_2);
}
.timeline.blue .inner-content{ border-left-color: var(--color_2); }

 .timeline.green .timeline-icon,
 .timeline.green .title{
    color: var(--color_3);
}
.timeline.green .timeline-year:after,
 .timeline.green .timeline-year span{
    background-color: var(--color_3);
}
 .timeline.green .inner-content{ border-left-color: var(--color_3); }

 .timeline.pink .timeline-icon,
.timeline.pink .title{
    color: var(--color_4);
}
 .timeline.pink .timeline-year:after,
 .timeline.pink .timeline-year span{
    background-color: var(--color_4);
}
.timeline.pink .inner-content{ border-left-color: var(--color_4); }

@media screen and (max-width:767px){
    .timeline{ margin: 0 0 15px; }

     .timeline-year:after{ width: 100%; }
}
          </style>
</head>

        <script>
        $(document).ready(function(){
            $('#seeAll').click(function() {
                $('.show_All').show();
                $('.show_total').hide();
                $('.show_resolved').hide();          
                 });
            $('#datespan').click(function() {
                $('.show_ccNotFound').hide();
                $('.show_justUpdate').hide();
                $('.show_datespan').show();  
                    });
           $('#ccNotFound').click(function() {
                $('.show_datespan').hide();
                $('.show_justUpdate').hide(); 
                $('.show_ccNotFound').show(); 
                    });
           $('#justUpdate').click(function() {
                $('.show_datespan').hide();
                $('.show_ccNotFound').hide(); 
                $('.show_justUpdate').show(); 
                    });
           $('#close_datespan').click(function() {
                $('.show_datespan').hide();
                    });   
           $('#close_ccNotFound').click(function() {
                $('.show_ccNotFound').hide(); 
                    });   
           $('#close_justUpdate').click(function() {
                $('.show_justUpdate').hide(); 
                    }); 
               
        });
        </script>

<body class="">
      
    @include('inc.modals')
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
                    {{-- <div class="row animated onece">
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <div class="card card-stats hvr-grow-shadow">
                                <div class="card-header card-header-success card-header-icon" data-toggle="tooltip" title="Total Number of Appeals for All Prisons">
                                    <div class="card-icon">
                                        <i class="material-icons">check_circle</i>
                                    </div>
                                    <p class="card-category">{{ __('labels.hc_totalAppeal') }}</p>
                                    <h3 class="card-title">
                                        {{$count}}
                                        <small></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i>
                                        {{ __('labels.justUpdated') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats hvr-grow-shadow"><a href="#" id="datespan">
                                <div class="card-header card-header-warning card-header-icon" data-toggle="tooltip" title="No action has taken since last status update for a given period of time">
                                    <div class="card-icon">
                                        <i class="material-icons">error</i>
                                    </div>
                                    <p class="card-category">{{ __('labels.hc_overdue') }}</p>
                                    <h3 class="card-title">
                                        {{$overdue_count[0]->totalAppeal}}
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i>
                                        {{ __('labels.overdue_appeals') }}
                                    </div>
                                </div></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats hvr-grow-shadow"><a href="#" id="ccNotFound">
                                <div class="card-header card-header-danger card-header-icon" data-toggle="tooltip" title="Appeal is rejected or marked as incomplete by HCJAS">
                                    <div class="card-icon">
                                        <i class="material-icons">cancel_outline</i>
                                    </div>
                                    <p class="card-category">{{ __('labels.hc_pendingForCC') }}</p>
                                    <h3 class="card-title">{{ $incompleteApplication_ForHC->count() }}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i>
                                         {{ __('labels.ccNotFound') }}
                                    </div>
                                </div></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats hvr-grow-shadow"><a href="#" id="justUpdate">
                                <div class="card-header card-header-info card-header-icon" data-toggle="tooltip" title="Number of appeals resolved till to date">
                                    <div class="card-icon">
                                        <i class="material-icons">flag</i>
                                    </div>
                                    <p class="card-category">{{ __('labels.hc_appealResolved') }}</p>
                                    <h3 class="card-title">{{ $totalappealResolved[0]->totalAppealResolved }}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i>
                                        {{ __('labels.justUpdated') }}
                                    </div>
                                </div>
                            </div></a>
                        </div>
                    </div> --}}
                    <div class="container-fluid">
                    <div class="row">
                            {{-- <div class="main-timeline"> --}}
                            <div class="col-md-3 col-sm-4">
                                    <div class="timeline">
                                        <a href="#" class="timeline-content">
                                            <div class="timeline-icon">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div class="timeline-year">
                                                <span>{{$count}}</span>
                                            </div>
                                            <div class="inner-content">
                                                <h3 class="title">{{ __('labels.hc_totalAppeal') }}</h3>
                                                <p class="description">
                                                        Total Number of Appeals for All Prison
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                        <div class="timeline blue">
                                            <a href="#" class="timeline-content">
                                                <div class="timeline-icon">
                                                    <i class="fa fa-warning"></i>
                                                </div>
                                                <div class="timeline-year">
                                                    <span> {{$overdue_count[0]->totalAppeal}}</span>
                                                </div>
                                                <div class="inner-content">
                                                    <h3 class="title">{{ __('labels.hc_overdue') }}</h3>
                                                    <p class="description">
                                                            No action has taken since last status update for a given period of time </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4">
                                            <div class="timeline green">
                                                <a href="#" class="timeline-content">
                                                    <div class="timeline-icon">
                                                        <i class="fa fa-close"></i>
                                                    </div>
                                                    <div class="timeline-year">
                                                        <span>{{ $incompleteApplication_ForHC->count() }}</span>
                                                    </div>
                                                    <div class="inner-content">
                                                        <h3 class="title">{{ __('labels.hc_pendingForCC') }}</h3>
                                                        <p class="description">
                                                                Appeal is rejected or marked as incomplete by HCJAS                                                        </p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                                <div class="timeline pink">
                                                    <a href="#" class="timeline-content">
                                                        <div class="timeline-icon">
                                                            <i class="fa fa-flag"></i>
                                                        </div>
                                                        <div class="timeline-year">
                                                            <span>{{ $totalappealResolved[0]->totalAppealResolved }}</span>
                                                        </div>
                                                        <div class="inner-content">
                                                            <h3 class="title">{{ __('labels.hc_appealResolved') }}</h3>
                                                            <p class="description">
                                                                    Number of appeals resolved till to date                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                {{-- </div> --}}
                    <div class="col-md-12">
                        <div class="card show_datespan animated onece fadeIn">
                            <div class="card-header card-header-warning">
                                    <h4 class="card-title mt-0">{{ __('labels.hc_overdue') }}</strong><span class="float-right"><button type="button" class="close" id="close_datespan" aria-label="Close">
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
    
                                                    @if(count($overdue_hc) > 0)
                                                    @foreach($overdue_hc as $totalOverDue)
                                                    <tr>
                                                        <td>{{ $totalOverDue->id }}</td>
                                                        <td>{{$totalOverDue->case_no}}</td>
                                                        <td> 
                                                            <ol class="etapier">
    
                                                                @php
                                                                $apStatus = DB::select('SELECT S.status_name,
                                                                IFNULL((SELECT statusid FROM appealstatus WHERE
                                                                statusid=S.id AND newappeals_id="'.$totalOverDue->id.'"),0)
                                                                AS statusid,(SELECT state FROM appealstatus WHERE
                                                                statusid=S.id AND newappeals_id="'.$totalOverDue->id.'") as stateno, (SELECT updated_at FROM appealstatus WHERE
                                                                statusid=S.id AND newappeals_id="'.$totalOverDue->id.'") as updated_at
                                                                FROM status AS S');

                                                                $last_state =  DB::select('select * from appealstatus where newappeals_id="'.$totalOverDue->id.'" order by statusid desc limit 1');
                                                                
                                                                $totalrow =  DB::select('select COUNT(*) as status_count from appealstatus where newappeals_id="'.$totalOverDue->id.'"');
                                                                
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
                                                            <a href="#" data-toggle="modal" data-target="#edit_appeal"  data-id="{{ $totalOverDue->id }}" class="edit_appeal"><i class="material-icons">remove_red_eye</i></a></td>
                                                        <!--Deatils Modal Start -->
                                                        <!--Deatils Modal End -->
                                                    </tr>
                                                    @endforeach
                                                    @else
                                                    <p>Nothing Found</p>
                                                    @endif
                                                </tbody>
                                            </table>
                                            <div class="col-md-5 offset-md-5">{{ $overdue_hc->links() }}</div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card show_ccNotFound animated onece fadeIn">
                            <div class="card-header card-header-danger">
                                    <h4 class="card-title mt-0">{{ __('labels.hc_pendingForCC') }}</strong><span class="float-right"><button type="button" class="close" id="close_ccNotFound" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></span></h4>
                                          </button>
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
    
                                                    @if(count($incompleteApplication_ForHC) > 0)
                                                    @foreach($incompleteApplication_ForHC as $appeal)
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
                                            <div class="col-md-5 offset-md-5">{{ $incompleteApplication_ForHC->links() }}</div>
                                        </div>  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card show_justUpdate animated onece fadeIn">
                            <div class="card-header card-header-info">
                                    <h4 class="card-title mt-0">{{ __('labels.hc_appealResolved') }}</strong><span class="float-right"><button type="button" class="close" id="close_justUpdate" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></span></h4>
                                          </button>
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
    
                                                    @if(count($appDetails_appealResolved_ForHC) > 0)
                                                    @foreach($appDetails_appealResolved_ForHC as $appeal)
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
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    @else
                                                    <p>Nothing Found</p>
                                                    @endif
                                                </tbody>
                                            </table>
                                            <div class="col-md-5 offset-md-5">{{ $appDetails_appealResolved_ForHC->links() }}</div>
                                        </div> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{--<div class="col-md-4">
                             <div class="card card-chart">
                                <div class="card-header card-header-success">

                                  <canvas class="ct-chart" id="myChart" style="position: relative; height:30vw; width:80vw"></canvas>
                                    <!----   -->
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Total Appeals by Gender</h4>
                                    <p class="card-category">
                                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span>
                                        increased from last week.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> updated 4 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-md-6">
                            <div class="card card-chart">
                                <div class="card-header card-header-success  hvr-grow-shadow">
                                        {{-- <div id="piechart_3d" class="zoom"></div> --}}
                                        {{-- <div  id="dashboard_div">
                                            <div id="slider_div" style="float:left;"></div>
                                            <div id="categoryPicker_div" style="float:right"></div><br><br><br>
                                            <div id="chart_div" style=""></div>
                                          </div> --}}
                                          <div id="piechart_3d" style=""></div>
                                    </div>
                                <div class="card-body">
                                    <h4 class="card-title">Total Appeals By Sentence Type</h4>
                                    {{-- <p class="card-category">Category | by Sentence</p> --}}
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-chart">
                                <div class="card-header card-header-success  hvr-grow-shadow">
                                    <div class="ct-chart" id="bar_Vchart"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Total Appeals By Status</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card border-primary ">
                                <div class="card-header card-header-default">
                                    <div class="ct-chart" id="barchart"></div>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                        <!-----Block for All Application Deatils ------->

                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header card-header-info  hvr-underline-from-center">
                                    <h4 class="card-title" style="font-color:black;">TO DO <span class="pull-right"><a class="btn btn-danger" href="/generate-pdf" >Generate PDF</a></span></h4>
                                    <p class="card-category">Deatils Of TODO</p>
                                </div>
                                <div class="card-body table-responsive">
                                  <!--   Content goes here -->
                                  <table class="table table-striped table-bordered" id="countryWiseData" style="width:100%">
                                    
                                        <thead>
                                        <tr>
                                            <th>Prison Name</th>
                                            <th>Total Appeals</th>
                                            <th>District Name</th>
                                            <th>Division Name</th>
                                        </tr>
                                        </thead>
                                    
                                    <tbody>
                                            @foreach($queryAll as $row)
                                        <tr>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->TotalAppeals }}</td>
                                            <td>{{ $row->districtName }}</td>
                                            <td>{{ $row->divisionName }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                            <tr>
                                                <th colspan="1" style="text-align:right">Grand Total:</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                  </table>
                                </div>
                            </div>
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
    @include('inc.scriptstyle')

    
                                                      <!-- Modal -->
                                                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                              <div class="modal-content">
                                                                <div class="modal-header">
                                                                  <h5 class="modal-title" id="exampleModalLabel">Compose Reminder</h5>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                  </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                  ...
                                                                  <div class="col-md-12">
                                                                        <div class="form-group">
                                                                          <label class="bmd-label-floating text-info" style="font-size: 14px;">Content</label>
                                                                          <input type="text" name="name" value="content" class="form-control" disabled>
                                                                        </div>
                                                                      </div>
                                                                      <div class="col-md-12">
                                                                          <div class="form-group">
                                                                            <label class="bmd-label-floating text-info" style="font-size: 14px;">Case NO</label>
                                                                            <input type="text" name="name" value="case no" class="form-control" disabled>
                                                                          </div>
                                                                        </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                  <button type="button" class="btn btn-primary">Send</button>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </body> 
                                                        <script>
                                                            $(document).ready(function(){
                                                              $('[data-toggle="tooltip"]').tooltip();   
                                                            });
                                                            </script>
    <script>
        $(document).ready(function () {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();

        });

    </script>
<script>
    $(document).ready(function() {
    var table = $('#countryWiseData').DataTable({
        // "language": {
        //     "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/English.json"
        // },
       
        dom: 'lBfrtip',
        buttons: [

            // { extend: 'pdf', title: 'Bangladesh Jail', className: 'btn btn-success',
            //     customize: function (doc) {
            //         doc.content[1].table.widths = 
            //             Array(doc.content[1].table.body[0].length + 1).join('*').split('');
            //     } },
                { extend: 'excel',title: 'Bangladesh Jail', className: 'btn btn-danger', },
            { extend: 'print',title: 'Bangladesh Jail', className: 'btn btn-warning', },
            
        ],
    
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 1 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            pageTotal = api
                .column( 1, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Update footer
            $( api.column( 1 ).footer() ).html(
                ''+pageTotal +' ( Overall '+ total +')'
            );
        },
        order: [[ 1, "desc" ]],
        stateSave: true
    });

    $('#countryWiseData tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
    } );
 
    
    
   
} );
    </script>
    
    <script>
        $(document).ready(function () {
            // Setup - add a text input to each footer cell
            $('#dataTable_cc tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<input type="text" class="form-control" placeholder="Search ' + title +
                    '" />');
            });

            // DataTable
            var table = $('#dataTable_cc').DataTable();

            // Apply the search
            table.columns().every(function () {
                var that = this;

                $('input', this).on('keyup change', function () {
                    if (that.search() !== this.value) {
                        that
                            .search(this.value)
                            .draw();
                    }
                });
            });
        });

    </script>
    <script>
        $(document).ready(function () {
            // Setup - add a text input to each footer cell
            $('#dataTable_pending tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<input type="text" class="form-control" placeholder="Search ' + title +
                    '" />');
            });

            // DataTable
            var table = $('#dataTable_pending').DataTable();

            // Apply the search
            table.columns().every(function () {
                var that = this;

                $('input', this).on('keyup change', function () {
                    if (that.search() !== this.value) {
                        that
                            .search(this.value)
                            .draw();
                    }
                });
            });
        });

    </script>

<script>
    $(document).ready(function () {
        // Setup - add a text input to each footer cell
        $('#dataTable_onhearing tfoot th').each(function () {
            var title = $(this).text();
            $(this).html('<input type="text" class="form-control" placeholder="Search ' + title +
                '" />');
        });

        // DataTable
        var table = $('#dataTable_onhearing').DataTable();

        // Apply the search
        table.columns().every(function () {
            var that = this;

            $('input', this).on('keyup change', function () {
                if (that.search() !== this.value) {
                    that
                        .search(this.value)
                        .draw();
                }
            });
        });
    });

</script>


</html>
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


<script>
    var ctx = document.getElementById('myChart').getContext('2d');

    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: [<?php echo $gender;?>],
            //labels: label,
            datasets: [{
                label: "#Appeals",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                borderColor: 'rgb(255, 99, 132)',
                data: [<?php echo $total;?>],
            }]
        },

        // Configuration options go here
        options: {
            scales: {
                xAxes: [{
                    time: {
                        unit: 'gender'
                    },
                    gridLines: {
                        display: false
                    },
                    ticks: {
                        fontColor: "#ffffff ",
                        maxTicksLimit: 5
                    }
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        // min: 0,
                        // max: 60,
                        // maxTicksLimit: 5,
                        fontColor: "#ffffff "

                    },
                    gridLines: {
                        display: true
                    }
                }],
            },
            legend: {
                display: false
            }
        }
    });

</script>
<script>
    $(document).ready(function () {
        var dataWebsiteViewsChart = {
            labels: [<?php echo $sentype;?>],
            series: [
                [<?php echo $stotal;?>],

            ]
        };
        var optionsWebsiteViewsChart = {
            axisX: {
                showGrid: false
            },
            low: 0,
            high: 80,
            //horizontalBars: true,
            chartPadding: {
                top: 0,
                right: 5,
                bottom: 0,
                left: 0
            }
        };
        var responsiveOptions = [
            ['screen and (max-width: 640px)', {
                seriesBarDistance: 2,
                axisX: {
                    labelInterpolationFnc: function (value) {
                        return value[0];
                    }
                }
            }]
        ];
        var websiteViewsChart = Chartist.Bar('#websiteViewsCharts', dataWebsiteViewsChart,
            optionsWebsiteViewsChart, responsiveOptions);
        md.startAnimationForBarChart(websiteViewsChart);
    });

</script>
<script>
    $(document).ready(function () {
        dataDailySalesChart = {
            labels: [<?php echo $gender;?>],
            series: [
                [<?php echo $total;?>],
            ]
        };

        optionsDailySalesChart = {
            lineSmooth: Chartist.Interpolation.cardinal({
                tension: 0
            }),
            low: 0,
            high: 80, // recommend not to set the high sa the biggest value + something for a better look
            chartPadding: {
                top: 0,
                right: 0,
                bottom: 0,
                left: 0
            },
        }

        var dailySalesChart = new Chartist.Line('#dailySalesChart', dataDailySalesChart, optionsDailySalesChart);

        md.startAnimationForLineChart(dailySalesChart);
    });

</script>
<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Gender Type', 'Count'],
          ['Female',     30],
          ['Male',      65],
          ['Trans-Gender',    05]
        ]);

        var options = {
          title: 'Appeals By Gender',
          width:'100%',
          height:'100%',
          backgroundColor: { fill:'transparent' },
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
        $(window).resize(function(){
        drawChart();
        });
      }
    </script>
<script type="text/javascript">
    $(document).ready(function () {
        Tipped.create('.simple-tooltip');
    });

</script>

<script type="text/javascript">
    $(document).ready(function () {
        
    });

  google.charts.load('current', {'packages':['corechart', 'table', 'controls']});
  google.charts.setOnLoadCallback(drawMainDashboard);

  function drawMainDashboard() {
    var dashboard = new google.visualization.Dashboard(
        document.getElementById('dashboard_div'));
    var slider = new google.visualization.ControlWrapper({
      'controlType': 'NumberRangeFilter',
      'containerId': 'slider_div',
      'options': {
        'filterColumnIndex': 2,
        
        'ui': {
          'labelStacking': 'vertical',
          'label': 'Age Filter:'
        }
       
      }
    });
    var categoryPicker = new google.visualization.ControlWrapper({
      'controlType': 'CategoryFilter',
      'containerId': 'categoryPicker_div',
      'options': {
        'filterColumnIndex': 1, // Select column to view
        'ui': {
          'labelStacking': 'vertical',
          'label': 'Select Gender:',
          'allowTyping': false,
          'allowMultiple': false
        }
      }
    });
    var pie = new google.visualization.ChartWrapper({
      'chartType': 'PieChart',
      'containerId': 'chart_div',
      'options': {
        'width':'100%',
          'height':'100%',
        'legend': 'none',
        'chartArea': {'left': 0, 'top': 0, 'right': 0, 'bottom': 0},
        'pieSliceText': 'label',
        'backgroundColor': { fill:'transparent' },
         'is3D': false
      },
      'view': {'columns': [0, 3]}
    });
    
    // var table = new google.visualization.ChartWrapper({
    //   'chartType': 'Table',
    //   'containerId': 'table_div',
    //   'options': {
    //   }
    //});
    var data = google.visualization.arrayToDataTable([
        ['Name','Gender','DOB','ID'],
       <?php echo substr($data,0,-1);?>
 

    ]);

    dashboard.bind([slider, categoryPicker], [pie]);
    dashboard.draw(data);
  }
</script>
<script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart) 

      function drawChart() {
          
        var bar_chart = google.visualization.arrayToDataTable([
            ['name','totalsByPrison'],
                <?php echo substr($bar_chart,0,-1);?>
                        ]);
        var options = {
                    title: 'Total Appeals By Prisons',
                    height: '100%',
                    width: '100%',
                    seriesType: "bars",
                    backgroundColor: { fill:'transparent' },
                    vAxis: {
                        title: "No.Of Appeals",
                        gridlines: {count: 3}
                    },
   hAxis: {
       slantedText: true,  /* Enable slantedText for horizontal axis */
       slantedTextAngle: 45 /* Define slant Angle */
   },
   'chartArea': { top: '15%',right: '12%', left: '5%', bottom: '50%'} /* Adjust chart alignment to fit vertical labels for horizontal axis*/
};
        var chart = new google.visualization.ComboChart(document.getElementById('barchart'));

        chart.draw(bar_chart,options);
        $(window).resize(function(){
        drawChart();
        });
      }
    </script>
<script>
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['status_name', 'totalAppeals',],
        <?php echo substr($appealsByStatus,0,-1);?>
     
      ]);

      var options = {
        title: 'Apppeals By Status',
        height: '100%',
        width: '100%',
        backgroundColor: { fill:'transparent' },
        chartArea: {height: '75%', width: '50%', left: '30%', bottom: '15%'},
        hAxis: {
          title: 'Total',
          minValue: 0
        },
        vAxis: {
          title: 'Status'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('bar_Vchart'));

      chart.draw(data, options);
      google.visualization.events.addListener(chart, 'select', selectHandler); 

    function selectHandler(e)     {   
        alert(data.getValue(chart.getSelection()[0].row, 0));
    }
      $(window).resize(function(){
        drawBasic();
        });
    }
</script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
        ['sentence_name','totalAppeals'],
       <?php echo substr($pieChartBySentence,0,-1);?>
       ]);

        var options = {
          title: 'Appeals By Top 10 Sentence Type'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));

        chart.draw(data, options);
      }
    </script>
<script>
      window.setTimeout(function() {
          $(".preloader").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove(); 
          });
      }, 3000);
</script>