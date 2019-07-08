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
          </style>
</head>

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
        
        </style>
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
                    <div class="row animated onece">
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <div class="card card-stats"> <a href="/hcDetails" >
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">store</i>
                                    </div>
                                    <p class="card-category">{{ __('labels.hc_totalAppeal') }}</p>
                                    <h3 class="card-title">
                                        {{$count}}
                                        <small></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">warning</i>
                                       {{ __('labels.seeAll') }}
                                    </div>
                                </div></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats"><a href="#" id="datespan">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">filter_none</i>
                                    </div>
                                    <p class="card-category">{{ __('labels.hc_overdue') }}</p>
                                    <h3 class="card-title">
                                        {{$overdue_count[0]->totalAppeal}}
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> {{ __('labels.overdue_appeals') }}
                                    </div>
                                </div></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats"><a href="#" id="ccNotFound">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">info_outline</i>
                                    </div>
                                    <p class="card-category">{{ __('labels.hc_pendingForCC') }}</p>
                                    <h3 class="card-title">{{ $count_incompleteApplication_ForHC}} </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> {{ __('labels.ccNotFound') }}
                                    </div>
                                </div></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats"><a href="#" id="justUpdate">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                    <p class="card-category">{{ __('labels.hc_appealResolved') }}</p>
                                    <h3 class="card-title">{{ $totalappealResolved[0]->totalAppealResolved }}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> {{ __('labels.justUpdated') }}
                                    </div>
                                </div>
                            </div></a>
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
                                            <span class="nav-tabs-title">Tasks:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#profile" data-toggle="tab">

                                                        <i class="material-icons">bug_report</i>{{ __('labels.tab_cc') }}
                                                        <span class="badge badge-pill badge-danger" style="font-size: 15px !important;">{{ $incomplete->count() }}</span>
                                                        <div class="ripple-container"> </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#messages" data-toggle="tab">
                                                        <i class="material-icons">code</i> {{ __('labels.tab_longTime') }} <span
                                                            class="badge badge-pill badge-warning" style="font-size: 15px !important;">{{ $overDue[0]->vid }}</span>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#settings" data-toggle="tab">
                                                        <i class="material-icons">cloud</i>{{ __('labels.tab_onHearing') }} <span
                                                            class="badge badge-pill badge-info" style="font-size: 15px !important;">{{ $totalOnhearing[0]->statusid }}</span>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                            <div class="card-body table-responsive">
                                                @if(count($appeals) > 0)
                                                <table class="table table-striped table-bordered animated fadeInUp" id="dataTable_cc" width="100%"
                                                    cellspacing="0">
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
                                        </div>
                                        <div class="tab-pane" id="messages">
                                            @if(count($appeals) > 0)
                                                <table class="table table-striped table-bordered animated fadeInUp" id="dataTable_pending" width="100%"
                                                    cellspacing="0">
                                                    <thead class=" text-primary">

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
                                                <table class="table table-striped table-bordered animated fadeInUp" id="dataTable_onhearing" width="100%"
                                                    cellspacing="0">
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
<!-----Block for All Application Deatils ------->

<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header card-header-info">
            <h4 class="card-title">TO DO</h4>
            <p class="card-category">Deatils Of TODO</p>
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
                                                          @include('sweet::alert')

                                                        </body> 
                                                        
    <script>
        $(document).ready(function () {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();

        });

    </script>
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


<script type="text/javascript">
    $(document).ready(function () {
        Tipped.create('.simple-tooltip');
    });

</script>


<script>
      window.setTimeout(function() {
          $(".preloader").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove(); 
          });
      }, 3000);
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
     // Script for Resolved Application
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

// Script for All Records 
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
    //console.log(courts_submit)
    //var offence_name = $(app).find('input[name="offence_name"]').val();
    var prisoner_name = $(app).find('input[name="prisoner_name"]').val();
    var rejectgrant = $(app).find('input[name="rejectgrant"]').val();

$(document).on('change','.myselection',function(){
        var status_id = $(this).val();
   $(document).on('change','.state', function(){
        var state = $(this).val();
    $(document).on('change','.prison_name', function(e){
        e.preventDefault();
        var prison_name = $(this).val();
        var dataString = 'appeal_id='+ appeal_id + '&case_no='+ case_no + '&prisoner_name='+ prisoner_name + '&status_id='+ status_id + '&state='+ state + '&prison_name='+ prison_name + '&courts_submit='+ courts_submit +'&rejectgrant='+ rejectgrant ;
       console.log(dataString)
            $(document).on('click','.courts_submit', function() { 
        
            $.ajax({
                        url: "/testupdate/"+appeal_id,
                        type: 'POST',
                        //dataType: 'application/json',
                        data: dataString,
                        success: function (data) {
                            swal("Done!","It was succesfully updated!","success");
                            window.location.reload();
                            $('.editapp').modal('hide');
                        },
                       
                        error: function (xhr, ajaxOptions, thrownError) {
                            swal("Error!", "Check your input,Please!", "error");
                            $('.editapp').modal('hide');
                        }
                        });
                    }); 
                });    
            });
        });

    })
});
</script>


