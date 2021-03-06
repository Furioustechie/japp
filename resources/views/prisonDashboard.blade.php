<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
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
        fieldset.scheduler-border {
            border: 1px groove #ddd !important;
            padding: 0 1.4em 1.4em 1.4em !important;
            margin: 0 0 1.5em 0 !important;
            -webkit-box-shadow:  0px 0px 0px 0px #000;
                    box-shadow:  0px 0px 0px 0px #000;
        }
        legend.scheduler-border {
            font-size: 1.2em !important;
            font-weight: bold !important;
            text-align: left !important;
            width:auto;
            padding:0 10px;
            border-bottom:none;
        }  
        div.progress {        /* this will hide div with id div_id_name */
        display:none;
        }    
        .select2 {
        width:100%!important;
        }
        .table-filter-container {
                text-align: left;
            }
        .logo-normal {
            animation-duration: 3s;
            animation-delay: 2s;
            animation-iteration-count: infinite;
            }  
             
    </style>
    <script>
    function getVal(){
        var myval = document.getElementById("x").value;

    }
    $(document).ready(function(){
        $('#submit_appeal').hide();
        
        $('#review_appeal').click(function(){
            var prisoner_no = document.getElementsByName('prisoner_no');
            var prisoner_name = document.getElementsByName('prisoner_name');
            var caseno = document.getElementsByName('caseno');
            var prison_name = document.getElementById('prison_name').value;
            var prisoner_gender = document.getElementById('prisoner_gender');
            var sentencingDistrict = document.getElementById('sentencingDistrict');
            var appeals_to_court = document.getElementById('appeals_to_court');
            var sentencingcourt = document.getElementById('sentencingcourt');
            var completeSentence = document.getElementById('completeSentence').innerHTML;
            var sentencetype = document.getElementById('sentencetype');
            var convictiondate = document.getElementById('convictiondate').value;
            var dateofappeal = document.getElementById('dateofappeal').value;


            var selectedText_gender = prisoner_gender.options[prisoner_gender.selectedIndex].text;
            var selectedText_district = sentencingDistrict.options[sentencingDistrict.selectedIndex].text;
            var selectedText_appealCourt = appeals_to_court.options[appeals_to_court.selectedIndex].text;
            var selectedText_sentenceCourt = sentencingcourt.options[sentencingcourt.selectedIndex].text;
            var selectedText_sentenceDuration = sentencetype.options[sentencetype.selectedIndex].text;



            console.log(completeSentence); // displays "INPUT"

            Swal.fire({
                title: '<strong>You are going to submit below information</u></strong>',
                icon: 'info',
                width: 750,
                html:
                '<table class="table table-sm"><tr><td class="text-left"><label class="bmd-label-floating text-info">Prisoner No: </label></td><td class="text-left">'+prisoner_no[0].value+'</td>' +
                    '<td class="text-left"><label class="bmd-label-floating text-info">Prisoner Name: </label></td><td class="text-left">'+prisoner_name[0].value+'</td></tr>' +
                    '<tr><td class="text-left"><label class="bmd-label-floating text-info">Case NO: </label></td><td class="text-left">'+caseno[0].value+'</td>' +
                    '<td class="text-left"><label class="bmd-label-floating text-info">Prison Name: </label></td><td class="text-left">'+prison_name+'</td></tr>' +
                    '<tr><td class="text-left"><label class="bmd-label-floating text-info">Prisoner Gender: </label></td><td class="text-left">'+selectedText_gender+'</td>' +
                    '<td class="text-left"><label class="bmd-label-floating text-info">Sentencing Court District: </label></td><td class="text-left">'+selectedText_district+'</td></tr>'+
                    '<tr><td class="text-left"><label class="bmd-label-floating text-info">Appeals Court: </label></td><td class="text-left">'+selectedText_appealCourt+'</td>' +
                    '<td class="text-left"><label class="bmd-label-floating text-info">Sentencing Court: </label></td><td class="text-left">'+selectedText_sentenceCourt+'</td></tr>'+
                    '<tr><td class="text-left"><label class="bmd-label-floating text-info">Sentence: </label></td><td class="text-left">SomethingNEW</td>' +
                    '<td class="text-left"><label class="bmd-label-floating text-info">Sentence Duration: </label></td><td class="text-left">'+selectedText_sentenceDuration+'</td></tr>'+
                    '<tr><td class="text-left"><label class="bmd-label-floating text-info">Conviction Date: </label></td><td class="text-left">'+convictiondate+'</td>' +
                    '<td class="text-left"><label class="bmd-label-floating text-info">Date of Appeal: </label></td><td class="text-left">'+dateofappeal+'</td></tr>'+
                    '<tr><td colspan="4"><label class="bmd-label-floating text-info">Offence Type: </label>'+completeSentence+'</td></tr></table>',
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText:
                    '<i class="fa fa-thumbs-up"></i> Great!',
                confirmButtonAriaLabel: 'Thumbs up, great!',
                cancelButtonText:
                    '<i class="fa fa-thumbs-down"></i>',
                cancelButtonAriaLabel: 'Thumbs down',
                footer: '<a href>PLEASE !! Cross-check with your BJ Form Information!</a>'
                })
            $('#submit_appeal').show();
            $('#review_appeal').hide();
        })

    });
    </script>
    <script>
            
            $(document).ready(function(){
                var overdue_appeals = $('#prison_overdue').text()
                var incomplete_appeals = $('#prison_incomplete').text()
                var seeResolved = $('#prison_resolved').text()
                var allAppeal = $('#prison_all_appeals').text()
    
                $('#overdue_appeals').click(function() {
                    if(overdue_appeals != 0){
                    $('.show').toggle();
                    }else{
                        swal("No Data Avaliable!", "Nothing To Show Here!", "warning");
                    }
                    $('.show_total').hide();
                    $('.show_resolved').hide();          
                     });
                $('#incomplete_appeals').click(function() {
                    $('.show').hide();
                    $('.show_resolved').hide();
                    if(incomplete_appeals != 0){
                    $('.show_total').toggle();  
                    }else{
                        swal("No Data Avaliable!", "Nothing To Show Here!", "warning");
                    }
                        });
               $('#seeResolved').click(function() {
                    $('.show').hide();
                    $('.show_total').hide(); 
                    if(seeResolved != 0){
                    $('.show_resolved').toggle(); 
                    }else{
                        swal("No Data Avaliable!", "Nothing To Show Here!", "warning");
                    }
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
            });

            
    </script>
</head>

<body class="">
    @include('inc.appealApplicationModal')
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
        Tip 2: you can also add an image using data-image tag
        -->
            <div class="logo">
                <a href="#" class="simple-text logo-normal animated flipInX"><img src="{{URL::asset('assets/img/logo.png')}}">{{ __('labels.logo_title') }}</a>
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
                            <div class="card card-stats hvr-grow-shadow"><a href="#" id="allAppeal">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">check_circle</i>
                                    </div>
                                    <p class="card-category">{{ __('labels.prison_totalAppeal') }}</p>
                                    <h3 class="card-title" id="prison_all_appeals">
                                       {{ $countAppeals_byPrison[0]->totalid }}
                                        <small></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i>
                                        {{ __('labels.justUpdated') }} {{ date('Y-m-d h:i:s', strtotime($countAppeals_byPrison[0]->maxDate)) }}
                                    </div>
                                </div></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats hvr-grow-shadow"><a href="#" id="overdue_appeals">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">error</i>
                                    </div>
                                    <p class="card-category">{{ __('labels.prison_overDue') }}</p>
                                    <h3 class="card-title" id="prison_overdue">
                                            {{ $overduePrison_count[0]->totalAppeal }}
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i>{{ __('labels.prison_oldestEntries') }} {{ $overduePrison_count[0]->maxDay }}  Days Ago                             </div>
                                </div></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats hvr-grow-shadow"><a href="#" id="incomplete_appeals">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">cancel</i>
                                    </div>
                                    <p class="card-category">{{ __('labels.prison_ccNotFound') }}</p>
                                    <h3 class="card-title" id="prison_incomplete">{{ $count_incompleteApplication_Prison[0]->totalAppeal}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i>{{ __('labels.justUpdated') }} {{ $count_incompleteApplication_Prison[0]->maxDate}}
                                    </div>
                                </div></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats hvr-grow-shadow"><a href="#" id="seeResolved">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">
                                            flag
                                            </i>
                                    </div>
                                    <p class="card-category">{{ __('labels.prison_appealResolved') }}</p>
                                    <h3 class="card-title" id="prison_resolved">{{ $countAppealsResolved_byPrison[0]->totalid }}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i>{{ __('labels.justUpdated') }} {{ $countAppealsResolved_byPrison[0]->maxUpdatedDate }}
                                    </div>
                                </div>
                            </div></a>
                        </div>
                    </div>
             
                    <div class="col-md-12">
                        <div class="card show animated onece fadeIn">
                            <div class="card-header card-header-warning">
                                    <h4 class="card-title mt-0">{{ __('labels.prison_overdueDetails') }}</strong><span class="float-right"><button type="button" class="close" id="monthAppeals" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></span></h4>
                                          </button>
                                    <p class="card-category"></p>
                            </div>
                            <div class="card-body">
                                    <div id="table_data">
                                            @include('inc_prison.thisYearData')
                                    </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-12">
                        <div class="card show_total animated onece fadeIn">
                            <div class="card-header card-header-danger">
                                    <h4 class="card-title mt-0">{{__('labels.prison_detailsPending') }}</strong><span class="float-right"><button type="button" class="close" id="pendingCC" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></span></h4>
                                    <p class="card-category"></p>
                            </div>
                            <div class="card-body">
                                <div id="table_appealIncomplete">
                                    @include('inc_prison.appealIncomplete')
                            </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-12">
                        <div class="card show_resolved animated onece fadeIn">
                            <div class="card-header card-header-info">
                            <h4 class="card-title mt-0">{{ __('labels.prison_detailsOfResolved') }}</strong><span class="float-right"><button type="button" class="close" id="appealsResolved" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></span></h4>
                                    <p class="card-category"></p>
                            </div>
                            <div class="card-body">
                                <div id="table_appealResolved">
                                    @include('inc_prison.appealResolved')
                            </div>
                            </div>
                    </div>
                </div>
                    <div class="col-md-12">
                                <div class="card animated onece fadeIn">
                                    <div class="card-header card-header-success">
                                        @php
                                         
                                        // $district_name = DB::Select('SELECT name FROM prisons where disid = (select district_id from users where id='.Auth::user()->id.')');
                                        @endphp
                                        <h4 class="card-title mt-0">{{ __('labels.prison_appealDetailsFrom') }} <strong>{{ @$district_name[0]->name }}</strong>
                                        <span class="col-md-4 pull-right">                           
                                            <button type="button" class="btn btn-raised btn-primary pull-right" data-toggle="modal" data-target="#appealModal"  data-id="appealModal" >{{ __('labels.create_appeal')}}</button>
                                        </span></h4>
                                            {{-- <span class="col-md-4 pull-right">Filter Records By Status:</span>
                                            </h4>
                                            <span>
                                                <div class="col-md-4 pull-right">
                                                    <select class="browser-default custom-select filterByStatus">
                                            <option  selected value="">View All..</option>
                                            @foreach($status_name as $status)
                                            <option value="{{ $status->id }}">{{ $status->status_name }}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                    </span> --}}
                                        <p class="card-category"></p>
                                    </div>
                                  
                           <div class="card-body">
                               
                                <div class="table-responsive" id="filterRecords">
                                        <p id="table-filter" style="display:none">
                                                Filter By Status:
                                                <select class="browser-default custom-select">
                                                <option value="">View All..</option>
                                                @foreach($status_name as $status)
                                                <option value="{{ $status->id }}">{{ $status->status_name }}</option>
                                                @endforeach
                                                </select>
                                                </p>
                                                <table border="0" cellspacing="5" cellpadding="5" align="center">
                                                    <tbody ><tr>
                                                        <td style="font-weight:bold">{{ __('labels.From_date') }}:</td>
                                                        <td><input type="date" id="from_date" name="from_date"></td>
                                                        <td style="font-weight:bold">{{ __('labels.To_date') }}:</td>
                                                        <td><input type="date" id="to_date" name="to_date"></td>
                                                    </tr>
                                                </tbody></table>
                                                <table id="dataTable_Details" class="display nowrap dtr-inline browser-default" style="width:100%">
                                                    <thead class="text-primary">
                                                   
                                                        <th>{{ __('labels.id') }}</th>
                                                        <th>{{ __('labels.case_no') }}</th>
                                                        <th>{{ __('labels.prison_name') }} </th>
                                                        <th>{{ __('labels.prisoner_name') }} </th>
                                                        <th>{{ __('labels.appeal_date') }}</th>
                                                        <th>{{ __('labels.status') }}</th>
                                                        <th>{{ __('labels.view_in_detail') }}</th>
                                                        <th style="display:none;"></th>
                                                   
                                                    </thead>
                                                
                                                    <tbody>
                                                          
                                                        @if(count($appDetails) > 0)
                                                        @foreach($appDetails as $appeal)
                                                        <tr>
                                                            <td>{{ $appeal->id }}</td>
                                                            <td>{{$appeal->case_no}}</td>
                                                            <td>{{ $appeal->prison_name }}</td>
                                                            <td>{{ $appeal->prisoner_name }}</td>
                                                            <td>{{ date('M-d-Y',strtotime($appeal->created_at)) }}</td>
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
                                                                    @if(($mydate > 10 ) AND ($total == $loop->iteration) AND (@$last_state[0]->state != 'red') AND (@$last_state[0]->state != 'todo'))
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
                                                                 <td style="display:none;">{{ $appeal->maxStatus }}</td>
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
              <div class="modal fade" id="notification_edit_appeal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content ">
                    <div class="modal-header text-center" style="background-color:#00bcd4;">
                        <h4 class="modal-title w-100 font-weight-bold" style="color:white">Appeal Status</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="row" id="appeal_detail">
                                  <!---   Modal Body -->
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="material-icons">thumb_up</i> GOT IT</button>
                    </div>
                  </div>
                </div>
              </div>
              @include('inc_prison.prison_Appeals')
              <footer class="footer">
                @include('inc.footer')
            </footer>
        </div>
    </div>
    
   {{-- @include('inc.appealHistoryModal') --}}
    
    @include('inc.scriptstyle')
    <script>
            $('#form').parsley();
    </script>
    <script>
    $(document).ready(function(){
        $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
       });
    //    $('.filterByStatus').on('change',function(){
    //        var filter = $('.filterByStatus').val();
    //     $.ajax({
    //             url: "/PrisonDashboard/fetchme/" + filter,
    //             method: "POST",
    //             cache: false,
                
    //             success: function (data) {
    //                 //console.log(data);
    //                 // $("#edit_appeal").find("input[name='appeal_id']").val(id);
    //                 $("#dataTable_Details tbody").html(data);
    //                 //  $(".edit_appeal").modal(show);
    //             }
    //         });
    //    });
       
    });
</script>

        <script>
        $(document).ready(function() {
        $(document).on("click", "#submit_appeal", function () {
            if(document.getElementById('options').checked == false)
        {
            Swal.fire({
            title: 'Attention!',
            text: "You must agree on data privacy clause before submitting an appeal.",
            type: 'warning'
            // swal('Attention!','You must agree on data privacy clause before submitting an appeal.','info');
        })
        }
        });
        });
        </script>
    <script>
     $(document).on("click", ".show", function () {
    var itemid= $(this).attr('data-id');
    $("#abc").attr("abc_"+itemid)
    });
    </script>
    @if(@$notify_appeal_id)
    <script>
    $(window).on('load',function() {
        $('#edit_Myappeal').modal('show');
    });
    
    </script>
    @endif
    <script>

        $(document).ready(function() {
            $('.mysection').hide();
            $('.fup').hide();
          
           $('.myact').on('change',function(){
            $('.mysection').show();
             // $('.section').prepend($('<option></option>').html('Loading...'));
           }) ;
           
        //   $('.myselect').select2({
        //     placeholder: 'Please Select..',
        //     allowClear: true
           
        //   });

        //   $('.myselect').select2({
        //         dropdownParent: $('#filename')
        //     });
          $('.section').select2({
            placeholder: 'Please Select..'
          });
          
        });
    </script>
    <script>
    $(document).ready(function(){
        $('#sentencingCrt').hide();
        $('#sentencingDistrict').on('change',function(){
            $('#sentencingCrt').show();
           });
           
        //    $('#sentencingcourt').select2({
        //         placeholder: 'Please Select..',
        //         allowClear: true
        //     });
           
    });

    </script>
    <script>
            $('.progress').hide();
            $('input[type=file]').change(function() { 
                let timerInterval
                let closeInSeconds = 5;
                var counter = 10;
                var Countdown = setInterval(function(){
                //console.log(counter);
                counter--
                if (counter === 0) {
                    //console.log("HAPPY NEW YEAR!!");
                    clearInterval(Countdown);
                }
                }, 100);
                
Swal.fire({
  title: 'File Is Being Loading ..',
  html: 'Time Left <strong></strong> Seconds.',
  timer: closeInSeconds * 1000,
  onBeforeOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
      Swal.getContent().querySelector('strong')
        .textContent = counter
    }, 100)
  },
  onClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.timer
  ) {
    Swal.fire(
  'File Has Been Attached',
  '',
  'success'
)
  }
})
                
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
{{-- </body> --}}
<script>
/* Custom filtering function which will search data in column four between two values */
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = Date.parse( $('#from_date').val(), 10 );
        //console.log(min);
        var max = Date.parse( $('#to_date').val(), 10 );
        var age = Date.parse( data[4] ) || 0; // use data for the age column
 
        if ( ( isNaN( min ) && isNaN( max ) ) ||
             ( isNaN( min ) && age <= max ) ||
             ( min <= age   && isNaN( max ) ) ||
             ( min <= age   && age <= max ) )
        {
            return true;
        }
        return false;
    }
);
      $(document).ready(function() {
          // Setup - add a text input to each footer cell
        //   $('#dataTable_Details tfoot th').each( function () {
        //       var title = $(this).text();
        //       $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
        //   } );
  
          // DataTable

          var table = $('#dataTable_Details').DataTable({
            //responsive: true,
            //dom: 'lrtip'
            "order": [[ 0, "desc" ]],
            sDom:'fl<"table-filter-container">tipr',
            
            //dom: 'lr<"table-filter-container">tip',
            initComplete: function(settings){
            var api = new $.fn.dataTable.Api( settings );
            $('.table-filter-container', api.table().container()).append(
             $('#table-filter').detach().show()
            );
            $('#table-filter select').on('change', function(){
            var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
             table
            //   .order( [ 0, 'desc' ] )
            //   .draw();  
             .columns( 7 )
             .search(  val ? '^'+val+'$' : '', true, false).draw(); 
             
                });       
              }
          });
        // Event listener to the two range filtering inputs to redraw on input
            $('#from_date, #to_date').on('change',  function() {
                var min = Date.parse( $('#min').val(), 10 );
        console.log(min);
                table.draw();
                 } );
          $('.filterByStatus').on('change', function(){
                table.search(this.value).draw();   
                });
          // Apply the search
         
          table.columns().every( function () {

              var that = this;
       
              $( 'input', this.footer() ).on( 'keyup change', function () {
                  if ( that.search() == this.value ) {
                      that
                          .search( this.value )
                          .draw();
                  }
              });
          });
      });
//       $('#dataTable_Details').dataTable( {
//         "deferRender": true,
//         "order": [[ 0, "desc" ]],
//         "pageLength": 5
// } );

</script>
<script>
 $(document).ready(function () {
        $("body").on("click", ".edit_appeal", function () {
            var id = $(this).data('id');
            console.log(id);
            $("#edit_appeal").find("input[name='appeal_id']").val(id);
            $.ajax({
                url: "/updateFrmPrison/" + id,
                method: "get",
                cache: false,
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
    $(document).ready(function () {
           $("body").on("click", ".notification_edit_appeal", function () {
               var id = $(this).data('id');
               $("#notification_edit_appeal").find("input[name='appeal_id']").val();
               console.log(id);
              // $("#notification_edit_appeal").find("input[name='appeal_id']").val();
               $.ajax({
                   url: "/updateFrmPrison/" + id,
                   method: "get",
                   cache: false,
                   data: {
                       id: id
                   },
                   success: function (data) {
                       //console.log(data);
                       $('#appeal_detail').html(data);
                        
                       //  $(".edit_appeal").modal(show);
                       //alert(data);
                   }
               });
           });
           
       });
   </script>
<!-- Block thisYearData -->
<script>
    $(document).ready(function(){
    
     $('#table_data').on('click', '.pagination a', function(event){
      event.preventDefault(); 
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
      var page = $(this).attr('href').split('page=')[1];
      console.log(page);
      fetch_data(page);
     });
    
     function fetch_data(page)
     {
      $.ajax({
       url:"prisonDashboard/fetch_data?page="+page,
       success:function(overdue_prison)
       {
        $('#table_data').html(overdue_prison);
       }
      });
     }
     
    });
    </script>

<!-- Block table_appealResolved -->
<script>
    $(document).ready(function(){
    
     $('#table_appealResolved').on('click', '.pagination a', function(event){
      event.preventDefault(); 
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
      var page = $(this).attr('href').split('page=')[1];
      fetch_appealResolved(page);
     });
    
     function fetch_appealResolved(page)
     {
      $.ajax({
       url:"/prisonDashboard/fetch_appealResolved?page="+page,
       success:function(appDetails_appealResolved_Prison)
       {
        $('#table_appealResolved').html(appDetails_appealResolved_Prison);
       }
      });
     }
     
    });
    </script>
    
    <!-- Block table_appealIncomplete -->
<script>
    $(document).ready(function(){
       

     $('#table_appealIncomplete').on('click', '.pagination a', function(event){
      event.preventDefault(); 
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
      var page = $(this).attr('href').split('page=')[1];
      fetch_appealResolved(page);
     });
    
     function fetch_appealResolved(page)
     {
      $.ajax({
       url:"/prisonDashboard/fetch_appealIncomplete?page="+page,
       success:function(appDetails_pendingForCC_Prison)
       {
        $('#table_appealIncomplete').html(appDetails_pendingForCC_Prison);
       }
      });
     }
     
    });
    </script>
    <script>
        $(document).ready(function(){
            $('.myselect').select2({
          placeholder: "Please Select..",
          allowClear: true
        });
        
        $("#sentencingDistrict").change(function(){
            var district_id = $(this).val();
            console.log(district_id);
            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        if(district_id == ""){
            $("#sentencingcourt").empty();
        }else{
            $.ajax({
                url: '/dynamicCourtsList/'+ district_id,
                type: 'post',
                //data: {district_id},
                dataType: 'json',
                success:function(response){
                    var len = response.length;
                    $("#sentencingcourt").empty();
                    $("#sentencingcourt").prepend("<option value=''>"+'Please Select ..'+"</option>");
                    for( var i = 0; i<len; i++){
                        var id = response[i]['id'];
                        var name = response[i]['name_en'];
                        $("#sentencingcourt").append("<option value='"+id+"'>"+name+"</option>");
                    }
                }
            });}
        });
        $("#act").change(function(){
            var act_id = $(this).val();
            //console.log(act_id);
            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        
            $.ajax({
                url: '/dynamicSectionList/'+ act_id,
                type: 'post',
                //data: {district_id},
                dataType: 'json',
                success:function(response){
                    var len = response.length;
                    $("#section").empty();
                    for( var i = 0; i<len; i++){
                        var id = response[i]['id'];
                        var name = response[i]['name'];
                        $("#section").append("<option value='"+id+"'>"+name+"</option>");
                    }
                }
            });
        });
        
        });
        </script>
        <script>
                $(document).ready(function(){
                    $('#section').change(function(){
                        var act = $('select#act option:selected').text();
                        var section = $('select#section option:selected').text();
                        $('#completeSentence').html('Offence is: '+act+' '+section);
                });
                
                });
        </script>
      @include('sweet::alert')
 
      <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
      <script type="text/javascript">
	
var typed = new Typed('#projectTitle', {
  strings: ["Jail Appeal Application Tracking Tool", "Jail Appeal Application Tracking Tool"],
  typeSpeed: 50,
  backspeed:0,
  loop: true,
  smartBackspace: true
});

</script>

</body>
</html>
