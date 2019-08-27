
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('inc.style')
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
                .modal-backdrop {
                z-index: -51;
                }   
                .modal-body {
            max-height: calc(100vh - 150px);
            overflow-y: scroll;
}


          </style>

        <style>        
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
        .spanLeft{
  position: absolute;
  left:-7px;
  opacity:0;
  transition:0.25s;
}

.spanRight{
  position: absolute;
  right:-7px;
  opacity:0;
  transition:0.25s;
}

a:hover .spanLeft{
  position: absolute;
  left:-20px;
  opacity:1;
}

a:hover .spanRight{
  position: absolute;
  right:-20px;
  opacity:1;
}
        </style>
        <script>
        $(document).ready(function(){
            var data_incomplete = $('#data_incomplete').text()
            var data_due = $('#data_due').text()
            var data_resolved = $('#data_resolved').text()
            var data_all = $('#data_all').text()
            $('#seeAll').click(function() {
                if(data_all != 0){
                    $('.show_All').show();                
                }else{
                    swal("No Data Avaliable!", "Nothing To Show Here!", "warning");
                }
                $('.show_total').hide();
                $('.show_resolved').hide();          
                 });
            $('#datespan').click(function() {
                $('.show_ccNotFound').hide();
                $('.show_justUpdate').hide();
                if(data_due != 0){
                    $('.show_datespan').toggle();               
                }else{
                    swal("No Data Avaliable!", "Nothing To Show Here!", "warning");
                }
               

                    });
           $('#ccNotFound').click(function() {
                $('.show_datespan').hide();
                $('.show_justUpdate').hide(); 
                if(data_incomplete != 0){
                    $('.show_ccNotFound').toggle();
                }else{
                    swal("No Data Avaliable!", "Nothing To Show Here!", "warning");
                }
                    });
           $('#justUpdate').click(function() {
                $('.show_datespan').hide();
                $('.show_ccNotFound').hide(); 
                if(data_resolved != 0){
                    $('.show_justUpdate').toggle(); 
                }else{
                    swal("No Data Avaliable!", "Nothing To Show Here!", "warning");
                }
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
</head>
<body>
        <div id="preloaders" class="preloader"></div>

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
                    <div class="row animated onece">
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <div class="card card-stats hvr-grow-shadow"> <a href="/hcDetails" ><span class="spanLeft" style="color: green;">..</span>
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">store</i>
                                    </div>
                                    <p class="card-category">{{ __('labels.hc_totalAppeal') }}</p>
                                    <h3 class="card-title"  id="data_all" value="{{$count}}">{{$count}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">warning</i>
                                       {{ __('labels.seeAll') }}
                                    </div>
                                </div><span class="spanRight">..</span></a>
                            </div>
                        </div> 
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats hvr-grow-shadow"><a href="#" id="datespan" >
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">filter_none</i>
                                    </div>
                                    <p class="card-category">{{ __('labels.hc_overdue') }}</p>
                                    <h3 class="card-title" id="data_due" value={{$overdue_count[0]->totalAppeal}}>{{$overdue_count[0]->totalAppeal}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> {{ __('labels.overdue_appeals') }}
                                    </div>
                                </div></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats hvr-grow-shadow"><a href="#" id="ccNotFound">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">info_outline</i>
                                    </div>
                                    <p class="card-category">{{ __('labels.hc_pendingForCC') }}</p>
                                    <h3 id="data_incomplete" value="{{ $count_incompleteApplication_ForHC }}" class="card-title">{{ $count_incompleteApplication_ForHC}} </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> {{ __('labels.ccNotFound') }}
                                    </div>
                                </div></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats hvr-grow-shadow"><a href="#" id="justUpdate">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">
                                            cloud_done
                                            </i>
                                    </div>
                                    <p class="card-category">{{ __('labels.hc_appealResolved') }}</p>
                                    <h3 class="card-title" id="data_resolved" value={{ $totalappealResolved[0]->totalAppealResolved }}>{{ $totalappealResolved[0]->totalAppealResolved }}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> {{ __('labels.justUpdated') }}
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                    
                    <div class="row show_datespan">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title mt-0">{{ __('labels.hc_overdue') }}</strong><span class="float-right"><button type="button" class="close" id="close_datespan" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></span></h4>
                                  </button>
                              <p class="card-category"> </p>
                            </div>
                            <div class="card-body">
                               <div id="data_overdue">
                                    @include('inc_hc.overdue')
                               </div>
                              </div>
                        </div>
                    </div>
                </div>
               
                <div class="row show_ccNotFound">
                    <div class="col-md-12">
                      <div class="card">
                            <div class="card-header card-header-danger">
                                    <h4 class="card-title mt-0">{{ __('labels.hc_pendingForCC') }}</strong><span class="float-right"><button type="button" class="close" id="close_ccNotFound" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></span></h4>
                                          </button>
                                    <p class="card-category"></p>
                            </div>
                            <div class="card-body">
                                <div id="data_incompleteAppl">
                                    @include('inc_hc.incompleteAppl')
                               </div>
                            </div>
                        </div>
                    </div>
                </div> 
               
                <div class="row show_justUpdate">
                    <div class="col-md-12">
                      <div class="card">
                            <div class="card-header card-header-info">
                                <h4 class="card-title mt-0">{{ __('labels.hc_appealResolved') }}</strong><span class="float-right"><button type="button" class="close" id="close_justUpdate" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></span></h4>
                                  </button>
                            <p class="card-category"></p>
                            </div>
                            <div class="card-body">
                                <div id="data_resolvedAppl">
                                    @include('inc_hc.resolvedAppl')
                               </div>
                            </div>
                        </div>
                    </div>
                </div>  
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header card-header-tabs card-header-primary">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Look At Also:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#profile" data-toggle="tab">

                                                        <i class="material-icons">group</i>{{ __('labels.tab_maxLength') }}
                                                        <span class="badge badge-pill badge-danger" style="font-size: 15px !important;">{{ $incomplete->count() }}</span>
                                                        <div class="ripple-container"> </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#messages" data-toggle="tab">
                                                        <i class="material-icons">assignment_ind</i> {{ __('labels.tab_jappNoAssigned') }} <span
                                                            class="badge badge-pill badge-warning" style="font-size: 15px !important;">{{ $overDue[0]->vid }}</span>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#settings" data-toggle="tab">
                                                        <i class="material-icons">watch_later</i>{{ __('labels.tab_onHearing') }} <span
                                                            class="badge badge-pill badge-info" style="font-size: 15px !important;">{{ $totalOnhearing[0]->statusid }}</span>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li><span class="nav-tabs-title">Data Still Is Prepration ...</span>
                                            </ul> 

                                        </div>
                                    </div>
                                </div>


                    {{-- @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif --}}

                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                            {{-- <div class="card-body table-responsive"> --}}
                                                @if(count($appeals) > 0)
                                                <table class="table table-striped table-bordered animated fadeInUp" id="dataTable_cc" width="100%" cellspacing="0">

                                                    <thead class=" text-primary">

                                                        <th>Case No</th>
                                                        <th>Prison Name</th>
                                                        <th>Conviction Time</th>
                                                        <td>Action</td>
                                                    </thead>
                                                   
                                                    <tbody>

                                                        @foreach($incomplete as $no_cc)
                                                        <!-- ToolTip value  -->
                                                        <?php
                                                           // $output ="ID :".$no_cc->id."&#009;"."Case No :".$no_cc->caseno."&#10;"."Sentence Type : ".$appeal->date_of_sentence ;
                                                        ?>
                                                        <tr>

                                                            <td>{{ $no_cc->caseno }}</td>
                                                            <td>{{$no_cc->name}}</td>
                                                            <td> <a rel="tooltip" data-placement="right" title="">
                                                                @if(!empty($no_cc->date_of_sentence))
                                                                    {{ $no_cc->date_of_sentence }}</a>
                                                                    @else
                                                                    No Date Found
                                                                    @endif
                                                                {{-- <a class="btn tooltipped" data-position="bottom"
                                                                    data-tooltip="I am a tooltip">Hover me!</a> --}}
                                                            </td>
                                                            <td>
                                                                    <form action="/searchs" method="POST"><button name="search" value={{$no_cc->id}}><span
                                                                class="badge badge-pill badge-warning" style="font-size: 15px !important;"> @csrf()Take Action</span>
                                                            </button><!-- Button trigger modal -->
                                                           
                                                        </form>
                                                        
                                                    </td>
                                                </tr>

                                                        @endforeach
                                                        


                                                    </tbody>
                                                </table>
                                                @else
                                                <p>Nothing Found</p>
                                                @endif
                                            </div>
                                        {{-- </div> --}}
                                        <div class="tab-pane" id="messages">
                                            @if(count($appeals) > 0)
                                                <table class="table table-striped table-bordered animated fadeInUp" id="dataTable_pending" width="100%" cellspacing="0">
                                                    
                                                    <thead class="text-primary">

                                                        <th>Case No</th>
                                                        <th>Prison Name</th>
                                                        <th>Conviction Time</th>
                                                        <td>Action</td>
                                                    </thead>
                                                   
                                                    <tbody>

                                                        @foreach($PendingForAction as $action)
                                                        <!-- ToolTip value  -->
                                                        <?php
                                                           // $output ="ID :".$no_cc->id."&#009;"."Case No :".$no_cc->caseno."&#10;"."Sentence Type : ".$appeal->date_of_sentence ;
                                                        ?>
                                                        <tr>

                                                            <td>{{ $action->caseno }}</td>
                                                            <td>{{$action->name}}</td>
                                                            <td> <a rel="tooltip" data-placement="right" title="">
                                                                @if(!empty($action->date_of_sentence))
                                                                    {{ $action->date_of_sentence }}</a>
                                                                    @else
                                                                    No Date Found
                                                                    @endif
                                                                {{-- <a class="btn tooltipped" data-position="bottom"
                                                                    data-tooltip="I am a tooltip">Hover me!</a> --}}
                                                            </td>
                                                            <td>
                                                                <form action="/searchs" method="POST">
                                                                    <button name="search" value={{ $action->id }}><span
                                                                class="badge badge-pill badge-danger" style="font-size: 15px !important;"> @csrf()Action</span>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                               
                                                     
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                                @else
                                                <p>Nothing Found</p>
                                                @endif
                                        </div>
                                        <div class="tab-pane" id="settings">
                                            @if(count($appeals) > 0)
                                                <table class="table table-striped table-bordered animated fadeInUp" id="dataTable_onhearing" width="100%" cellspacing="0">
                                                    <thead class=" text-primary">

                                                        <th>Case No</th>
                                                        <th>Prison Name</th>
                                                        <th>Conviction Time</th>
                                                        <td>Action</td>
                                                    </thead>
                                                         <tbody>
                                                            @foreach($PendingOnHearing as $onhearing)
                                                        <tr>
                                                                <td>{{ $onhearing->caseno }}</td>
                                                                <td>{{$onhearing->name}}</td>
                                                                <td> <a rel="tooltip" data-placement="right" title="">
                                                                        @if(!empty($onhearing->date_of_sentence))
                                                                            {{ $onhearing->date_of_sentence }}</a>
                                                                            @else
                                                                            No Date Found
                                                                            @endif
                                                                        {{-- <a class="btn tooltipped" data-position="bottom"
                                                                            data-tooltip="I am a tooltip">Hover me!</a> --}}
                                                                    </td>
                                                                    <td>
                                                                        <form action="/searchs" method="POST">
                                                                            <button name="search" value={{ $onhearing->id }}><span
                                                                        class="badge badge-pill badge-danger" style="font-size: 15px !important;"> @csrf()Action</span>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                         </tr>
                                                                    @endforeach

                                                                </tbody>
                                                            </table>
                                                            @else
                                                            <p>Nothing Found</p>
                                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-----Block for All Application Deatils ------->
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Manage Your Appeals</h4>
                            <p class="card-category">All Appeals Deatils</p>
                        </div>
                        <div class="card-body">
                            <div>
                                <input type="text" placeholder="Search by - CaseNO or PrisonName or ID" name="search" id="search"  class="form-control">
                                </div>
                            <div id="data_allRecords">
                                    @include('inc_hc.allRecords')
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        {{-- </div>
    </div>
</div> --}}
<!-----End Of Block for All Application Deatils ------->
                    
 <!-- -->
 

            <div class="modal fade edit_Myappeal" id="edit_Myappeal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div id="editapps">
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

                    @include('sweet::alert')
                <footer class="footer">
                    @include('inc.footer')
                </footer>
            </div>
        </div>
        @include('inc.scriptstyle')
    </body> 
                                                        
    <script>
        $(document).ready(function () {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
        });
    </script>
    @if(@$notify_appeal_id)
    <script>
    $(window).on('load',function() {
        $('#edit_Myappeal').modal('show');
    });
    // $('#edit_Myappeal').on('hidden.bs.modal', function () {
    //  location.reload();
    // })
    
    </script>
    @endif
    
 <script>
    $('.show').hide();
    $('.myselection').change(function() {
    $('.show').show();
});
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
//  $(document).ready(function () {
//     $.ajaxSetup({
//        headers: {
//            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//        }
//        });
//         $("body").on("click", ".edit_appeal_notification", function () {

//             //e.preventDefault();
//            // var id = $(this).data('id');
//             //console.log(id);
//             var id = 8;
//                         console.log(id);

//             $.ajax({
//                 url: "/testpage/"+id,
//                 method: "post",
//                 // data: {
//                 //     'id': id
//                 // },
//                 success: function (data) {
//                 //     //console.log(data);
//                 $("#editapps").html(data);
//                 //$("#edit_Myappeal").modal('show');
//                // $(".edit_appeal").modal(show);
//                // alert('Your ID '+ data);
//                  }
               
//             });
//         });
//     });
</script>





<script>
      window.setTimeout(function() {
          $(".preloader").fadeOut(500, 0).slideUp(500, function(){
              $(this).remove(); 
          });
      }, 1000);

    
</script>

<script type="text/javascript">
      $(function() {
        $("#lets_search").bind('submit',function() {
          var value = $('#str').val();
           $.post('/overdue',{value:value}, function(overdue_hc){
             $("#search_results").html(overdue_hc);
           });
           return false;
        });
      });
    </script>
    <script>
    $(document).ready(function(){
    
     $('#data_overdue').on('click', '.pagination a', function(event){
       
      event.preventDefault(); 
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            var page1 = $(this).attr('href');
            console.log(page1);
      var page = $(this).attr('href').split('page=')[1];
      fetch_data(page);
     });
    
     function fetch_data(page)
     {
      $.ajax({
       url:"/dashboard/fetch_data_ForOverdue?page="+page,
       success:function(overdue_hc)
       {
        $('#data_overdue').html(overdue_hc);
       }
      });
     }
 });



  
    </script>
    // Script for Incomplete Application
    <script>
    $(document).ready(function(){
    
     $('#data_incompleteAppl').on('click', '.pagination a', function(event){
      event.preventDefault(); 
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
      var page = $(this).attr('href').split('page=')[1];
      fetch_data(page);
     });
    
     function fetch_data(page)
     {
      $.ajax({
       url:"/dashboard/fetch_data_ForIncompleteAppl?page="+page,
       success:function(incompleteApplication_ForHC)
       {
        $('#data_incompleteAppl').html(incompleteApplication_ForHC);
       }
      });
     }
     
    });
    </script>
     <script>
    $(document).ready(function(){
    
     $('#data_resolvedAppl').on('click', '.pagination a', function(event){
      event.preventDefault(); 
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
      var page = $(this).attr('href').split('page=')[1];
      fetch_data(page);
     });
    
     function fetch_data(page)
     {
      $.ajax({
       url:"/dashboard/fetch_data_ForResolvedAppl?page="+page,
       success:function(appDetails_appealResolved_ForHC)
       {
        $('#data_resolvedAppl').html(appDetails_appealResolved_ForHC);
       }
      });
     }
     
    });
    </script>

<script>
$(document).ready(function(){
    $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
       });

function clear_icon()
 {
  $('#id_icon').html('');
  $('#case_no_icon').html('');
 }

 function fetch_data(page, sort_type, sort_by, query)
{
 $.ajax({
  url:"/dashboard/fetch_data_allRecords?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,
  success:function(data)
  {
    $('#data_allRecords').html('');
   $('#data_allRecords').html(data);
  }
 });
}



$(document).on('keyup', '#search', function(){
  var query = $('#search').val();
  var sort_by = $('#hidden_column_name').val();
  var sort_type = $('#hidden_sort_type').val();
  var page = $('#hidden_page').val();
  fetch_data(page,sort_type, sort_by, query);
 });

 //Sorting Block

 $(document).on('click', '.sorting', function(){
  var sort_by = $(this).data('column_name');
  var order_type = $(this).data('sorting_type');
  
  var reverse_order = '';
  if(order_type == 'asc')
  {
   $(this).data('sorting_type', 'desc');
   reverse_order = 'desc';
   //clear_icon();
   $('#'+sort_by+'_icon').html('<span class="fa fa-angle-down"></span>');
  }
  if(order_type == 'desc')
  {
   $(this).data('sorting_type', 'asc');
   reverse_order = 'asc';
  // clear_icon();
   $('#'+sort_by+'_icon').html('<span class="fa fa-angle-up"></span>');
  }
  $('#hidden_column_name').val(sort_by);
  $('#hidden_sort_type').val(reverse_order);
  var page = $('#hidden_page').val();
  var query = $('#search').val();
  fetch_data(page, reverse_order, sort_by, query);
 });

 //Pagination Block
    $('#data_allRecords').on('click', '.pagination a', function(event){
    event.preventDefault(); 
    var page = $(this).attr('href').split('page=')[1];
    $('#hidden_page').val(page);
    var sort_by = $('#hidden_column_name').val();
    var sort_type = $('#hidden_sort_type').val();
    var query = $('#search').val();

    // $('li').removeClass('active');
    //         $(this).parent().addClass('active');
    fetch_data(page,sort_type, sort_by, query);
    });

});
</script>
<script>
$(document).ready(function(){

$(document).on('click','.editapp', function() {
    var app = $(this).attr('data-target');
    var appeal_id = $(app).find('input[name="appeal_id"]').val();
    var case_no = $(app).find('input[name="case_no"]').val();
    var courts_submit = $(app).find('#courts_submit').val();
    var prisoner_name = $(app).find('input[name="prisoner_name"]').val();
    var rejectgrant = $(app).find('input[name="rejectgrant"]').val();

    var dataStr = 'appeal_id='+ appeal_id;
    $(document).one('click','.JustClick', function(e){
        var appeals_id = appeal_id;
        e.preventDefault(); // default action us stopped here
             $.ajax({
                        url: "/prisonHistory/"+appeals_id,
                        type: 'POST',
                        //dataType: 'application/json',
                        data: dataStr,
                        cache: false,
                        success: function (data) {
                            Swal({
                                title:'Prison History',
                                type: 'info',
                                html: data,
                            })
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            swal("Error!", "Check your input,Please!", "error");
                        }
                    });
                });
         $(document).one('click','.courts_submit', function() { 
             
                var prison_name = $(app).find('select.prison_name option:selected').val();
                var status_name = $(app).find('select.myselection option:selected').val();
                var state = $(app).find('select.state option:selected').val();
                var rejectgrant = $(app).find('input[name="rejectgrant"]').val();
                var japp_no = $(app).find('input[name="japp_no"]').val();
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
                                
                                html: data,
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
});
</script>

<script>
//     $(document).ready(function(){
//           $('a#activeNotify').click(function(e) {
//           e.preventDefault();
//           var txt = $(e.target).text();
//           var txt_id = $('#notify_appl_id').val();
//           var split_len = $(this).text().length;
//           var split_txt = $(this).text().split('(ON')[1];
//           var split_id = split_txt.split(')')[0];
//           var dt_str = 'case_no='+split_id;
//           var dt_applId = 'notify_'+txt_id;
//           console.log(txt,split_len,split_txt,split_id,dt_str,dt_applId);

//           $.ajax({
//                         url: "/notificationUpdate/"+split_id,
//                         //url: "/deletenotify/"+split_id
//                         type: 'POST',
//                         //dataType: 'application/json',
//                         data: dt_str,
//                         success: function (data) {
//                                 Swal.fire({
//                                     title: "<i>Notes</i>", 
//                                     html: "Case No:"+data+"<br>In Prison For XX days<i>",  
//                                     confirmButtonText: "Ok",
//                                     });  
//                                     location.reload();                      
//                                 },
//                         error: function (xhr, ajaxOptions, thrownError) {
//                             swal("Error!", "Check your input and remarks,Please!", "error");
//                          window.location.reload();
//                         }
//                   });
//           });
//    });
    </script>
    <script>
            $(document).ready(function(){
                //document.body.style.position = 'fixed';
                 $(document).on('click','a#mycollapse',function(){
                     $('.gotit').toggle();
                     console.log('toggled');
                 });

             });
    </script>
    
 <script>
 $(document).ready(function(){
                //document.body.style.position = 'fixed';
                 $(document).on('click','a#admin_update',function(){
                    var appeal_id = $('#appeal_id').val();
                    var dataString = 'appeal_id='+ appeal_id ;
                    console.log(dataString);
                //     $.ajax({
                //           url: "/updateTest/"+appeal_id,
                //           type: 'POST',
                //           //dataType: 'application/json',
                //           data: dataString,
                         
                //  });
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
    
             $(document).one('click','.courts_submits', function(e) { 
               e.preventDefault();
                    var appeal_id = $('#appeal_id').val();
                    var case_no = $('#case_no').val();
                    var prisoner_name = $('#prisoner_name').val();
                    var prison_name = $('select.prison_name option:selected').val();
                    var status_name = $('select.myselection option:selected').val();
                    var state = $('select.state option:selected').val();
                    var rejectgrant = $('#rejectgrant').val();
                    var japp_no = $('#japp_no').val();
                    var courts_submit = $('#courts_submits').val();
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
