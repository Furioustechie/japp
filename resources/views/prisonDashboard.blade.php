<!DOCTYPE html>
<html lang="en">

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
          </style>
</head>
<?php $appealtest=''?>

<body class="">

   
    @include('inc.appealApplicationModal')
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="#" class="simple-text logo-normal"><img src="assets/img/logo.png">Jail Appeal</a>


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
                                    <p class="card-category">Total Appeal</p>
                                    <h3 class="card-title">
                                       00
                                        <small></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">warning</i>
                                        <a href="/appeals">See All...</a>
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
                                    <p class="card-category">This Year</p>
                                    <h3 class="card-title">
                                   00
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 12 Month
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
                                    <p class="card-category">Peding for CC</p>
                                    <h3 class="card-title">02</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> CC Not Found
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
                                    <p class="card-category">Appeal Resolved</p>
                                    <h3 class="card-title">00</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                                <div class="card card-plain">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title mt-0"> Appeal Details From X Prison</h4>
                                        <p class="card-category"></p>
                                    </div>
                          <div class="card-body">

                                <button type="button" class="btn btn-raised btn-primary pull-right" data-toggle="modal" data-target="#appealModal"  data-id="appealModal" >Create New Appeal</button>
                               
                                <div class="table-responsive">
                                                <table id="dataTable_Details" class="display nowrap dtr-inline" style="width:100%">
                                                    <thead class="text-primary">
                                                        <th>ID</th>
                                                        <th>Case No</th>
                                                        {{-- <th>Prisoner Name </th>
                                                        <th>Prison Name</th>--}}
                                                        <th>Status</th>
                                                        <th>View in Detail</th>
                                                    </thead>
                                                
                                                    <tbody>
        
                                                        @if(count($appDetails) > 0)
                                                        @foreach($appDetails as $appeal_stat)
                                                        <tr>
                                                            <td>{{ $appeal_stat->id }}</td>
                                                            <td>{{$appeal_stat->case_no}}</td>
                                                            {{-- <td>{{$appeal_stat->prisoner_name}}</td>
                                                            <td>{{ $appeal_stat->prison_name }}</td>--}}
                                                            <td>
                                                                <ol class="etapier">
        
                                                                    @php
                                                                    $apStatus = DB::select('SELECT S.status_name,
                                                                    IFNULL((SELECT statusid FROM appealstatus WHERE
                                                                    statusid=S.id AND newappeals_id="'.$appeal_stat->id.'"),0)
                                                                    AS statusid
                                                                    FROM status AS S');
                                                                    @endphp
                                                                    @foreach($status_name as $pp)
        
                                                                    @php
                                                                    $item = null;
                                                                    @endphp
                                                                    @foreach($apStatus as $struct)
                                                                    @if ($pp->id == $struct->statusid)
                                                                    @php $item = $struct;
                                                                    break;
                                                                    @endphp
                                                                    @endif
                                                                    @endforeach
        
        
        
                                                                    @if($item)
        
                                                                    <li class="done" data-toggle="tooltip" data-placement="top"
                                                                        title="{{ $pp->status_name }}"><span class="d-none d-sm-block"><a href="">{{ $pp->status_name }}</a></span></li>
                                                                    @else
        
                                                                    <li class="todo" data-toggle="tooltip" data-placement="top"
                                                                        title="{{ $pp->status_name }}"><span class="d-none d-sm-block"><a href="">{{ $pp->status_name }}</a></span></li>
                                                                    @endif
        
                                                                    @endforeach
        
        
        
                                                                </ol>
                                                            </td>
                                                            <td> 
                                                                 <button type="button" rel="tooltip" title="Details" class="btn btn-primary btn-link btn-sm"
                                                                    data-toggle="modal" data-target="#abc_{{ $appeal_stat->id }}" data-id="{{ $appeal_stat->id }}">
                                                                    <i class="material-icons">description</i>
                                                                </button></td>
                                                            <!--Deatils Modal Start -->
                                                           
                                                            @include('inc.appealHistoryModal')
                                                          
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

   </body>
</html>
