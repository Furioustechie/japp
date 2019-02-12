<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.style')

</head>

<body class="">

    {{-- @include('inc.navbar') --}}
    @include('inc.messages')
    @include('inc.modals')
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
                @include('inc.sidenav')
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            @include('inc.header')
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                        </div>
                        <div class="col-md-12">
                            <div class="card card-plain">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title mt-0"> Table on Plain Background</h4>
                                    <p class="card-category"> Here is a subtitle for this table</p>
                                </div>
                                <div class="card-body">
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
                                                            $apStatus = DB::select('SELECT S.status_name, IFNULL((SELECT statusid FROM appealstatus WHERE statusid=S.id AND newappeals_id="'.$appeal_stat->id.'"),0) AS statusid
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
                                                                      title="CC Found"><a href="">{{ $pp->status_name }}</a></li>
                                                                    @else

                                                                      <li class="todo" data-toggle="tooltip" data-placement="top"
                                                                      title="CC Found"><a href="">{{ $pp->status_name }}</a></li>
                                                                    @endif

                                                                    @endforeach  
                                                          
                                                          
                                                         
                                                        </ol>
                                                    </td>
                                                    <td><button type="button" rel="tooltip" title="Details" class="btn btn-primary btn-link btn-sm"
                                                            data-toggle="modal" data-target="#abc_{{$appeal_stat->id}}">
                                                            <i class="material-icons">description</i>
                                                        </button></td>
                                                    <!--Deatils Modal Start -->

                                                    <div class="modal fade " id="abc_{{$appeal_stat->id}}" tabindex="-1"
                                                        role="dialog" aria-labelledby="myModalStatus" aria-hidden="true">
                                                        <?php 
                            $applId = $appeal_stat->id;
                            $url = "appeals/update/".$applId; 
                            $dd = DB::select('SELECT doctype.docname, documents.filename
                                                      FROM newappeals na
                                                      
                                                        INNER JOIN documents ON na.id = documents.appealid
                                                        INNER JOIN doctype ON doctype.id = documents.doctypeid
                                                       
                                                        WHERE na.id="'.$applId.'"');
                                                       // print_r($ddd);
                                                      
                              $appStatus = DB::select('SELECT status.status_name, appealstatus.statusid
                                                      FROM newappeals na
                                                                                                            
                                                      INNER JOIN appealstatus ON na.id = appealstatus.newappeals_id
                                                      INNER JOIN status ON appealstatus.statusid = status.id

                                                      WHERE na.id="'.$applId.'"');

                              // Custom Query for Displaying Status  
                              $apStatus = DB::select('SELECT S.status_name, IFNULL((SELECT statusid FROM appealstatus WHERE statusid=S.id AND newappeals_id="'.$applId.'"),0) AS statusid
                                   FROM status AS S');
                              // Custom Query for Max StatusID Status
                              $laststate = DB::Select ('SELECT max(statusid) AS laststate FROM appealstatus WHERE newappeals_id = "'.$applId.'"');

                           ?>

                                                        <form action="appeals/add_status" method="POST">
                                                            {{ csrf_field() }}
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content ">
                                                                    <div class="modal-header text-center" style="background-color:#00bcd4;">
                                                                        <h4 class="modal-title w-100 font-weight-bold"
                                                                            style="color:white">Appeal Status</h4>

                                                                    </div>
                                                                    <br>
                                                                    <div class="row">
                                                                        <span class="col-md-5 offset-sm-1 border border-primary">
                                                                            <legend>Application Details</legend><br>
                                                                            <!-- Material input -->
                                                                            <div class="md-form form-group mt-2">
                                                                                <input type="text" class="form-control"
                                                                                    id="" value="{{$appeal_stat->id}}"
                                                                                    disabled>
                                                                                <label class="label text-success font-weight-bold"
                                                                                    for="">Appeal ID</label>
                                                                            </div>
                                                                            <div class="md-form form-group mt-2">
                                                                                <input type="text" class="form-control"
                                                                                    id="" value="{{$appeal_stat->prison_name}}"
                                                                                    disabled>
                                                                                <label class="label text-success font-weight-bold"
                                                                                    for="">Prison Name</label>
                                                                            </div>
                                                                            <div class="md-form form-group mt-2">
                                                                                <input type="text" class="form-control"
                                                                                    id="" value="{{$appeal_stat->court_name}}"
                                                                                    disabled>
                                                                                <label class="label text-success font-weight-bold"
                                                                                    for="">Sentencing Court</label>
                                                                            </div>
                                                                            <div class="md-form form-group mt-2">
                                                                                <input type="text" class="form-control"
                                                                                    id="" value="{{$appeal_stat->prisoner_name}}"
                                                                                    disabled>
                                                                                <label class="label text-success font-weight-bold"
                                                                                    for="">Prisoner Name</label>
                                                                            </div>
                                                                            <div class="md-form form-group mt-2">
                                                                                <input type="text" class="form-control"
                                                                                    id="" value="{{$appeal_stat->offence_name}}"
                                                                                    disabled>
                                                                                <label class="label text-success font-weight-bold"
                                                                                    for="">Offence Name</label>
                                                                            </div>
                                                                            <div class="md-form form-group mt-2">
                                                                                <input type="text" class="form-control"
                                                                                    id="" value="{{$appeal_stat->case_no}}"
                                                                                    disabled>
                                                                                <label class="label text-success font-weight-bold"
                                                                                    for="">Case NO</label>
                                                                            </div>
                                                                            <div class="md-form form-group mt-2">
                                                                                <label class="label text-success font-weight-bold"
                                                                                    for="">Attachemnts:</label><br>
                                                                                @foreach($dd as $d)
                                                                                @if($d->docname == 'BJ_Form')
                                                                                <label class="md-form form-group">BJ
                                                                                    Form: </label><a href="{{ asset('/files/') }}/{{$d->filename}}"
                                                                                    target="_blank"> <span class="label label-default">{{$d->filename}}</span></a><br>
                                                                                @endif
                                                                                @if($d->docname == 'APP_Form')
                                                                                <label class="md-form form-group">Application
                                                                                    Form: </label><a href="{{ asset('/files/') }}/{{$d->filename}}"
                                                                                    target="_blank"> <span class="label label-default ">{{$d->filename}}</span></a>
                                                                                @endif
                                                                                @if($d->docname == 'ACK Letter')
                                                                                <label class="md-form form-group">Letter
                                                                                    From Prison:</label><a href="{{ asset('/files/') }}/{{$d->filename}}"
                                                                                    target="_blank"> <span class="label label-default ">{{$d->filename}}</span></a>
                                                                                @endif
                                                                                @endforeach
                                                                            </div>
                                                                        </span>
                                                                        <span class="col-md-5  border border-primary">
                                                                            <legend>Application Progress</legend><br>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">

                                                                                    <!-- Stepers Wrapper -->

                                                                                    <div class="bs-vertical-wizard">

                                                                          <ul>
                                                                              
                                                                      @foreach($status_name as $pp)
                                            
                                                                                @php $item = null; @endphp

                                                                                @foreach($apStatus as $struct) 
                                                                                @if ($pp->id == $struct->statusid) 
                                                                                @php
                                                                                $item = $struct;
                                                                                break;
                                                                                @endphp  
                                                                                                
                                                                                @endif
                                                                                  @endforeach

                                                                              @if($item)

                                                                              <li class="complete">
                                                                                  <a href="#">{{ $pp->status_name }}
                                                                                      <i class="ico fa fa-check ico-green"></i>
                                                                                      <span class="desc">
                                                                                          <?php echo date("Y-m-d");?>
                                                                                      </span>
                                                                                  </a>
                                                                              </li>
                                                                              @else

                                                                              <li>
                                                                                  <a href="#">{{ $pp->status_name }}
                                                                                      <span class="desc">Nothing
                                                                                          Found</span>
                                                                                  </a>
                                                                              </li>
                                                                              @endif

                                                                             @endforeach



                                                                          </ul>

                                                                                    </div>

                                                                                    <!-- /.Stepers Wrapper -->

                                                                                </div>
                                                                            </div>

                                                                        </span>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-info"
                                                                            data-dismiss="modal">Okay!</button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>


                                                    <!--Deatils Modal End -->

                                                </tr>
                                                @endforeach
                                                @else
                                                <p>Nothing Found</p>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                @include('inc.footer')
            </footer>
        </div>
    </div>
    <!-- JavaScripts Styles    -->
    @include('inc.scriptstyle')
</body>


<script>
    $(document).ready(function () {
        // Setup - add a text input to each footer cell
        $('#dataTable tfoot th').each(function () {
            var title = $(this).text();
            $(this).html('<input type="text" class="form-control" placeholder="Search ' + title +
                '" />');
        });

        // DataTable
        var table = $('#dataTable').DataTable();

        // Apply the search
        table.columns().every(function () {
            var that = this;

            $('input', this.footer()).on('keyup change', function () {
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
        $('#dataTable_Details tfoot th').each(function () {
            var title = $(this).text();
            $(this).html('<input type="text" class="form-control" placeholder="Search ' + title +
                '" />');
        });

        // DataTable
        var table = $('#dataTable_Details').DataTable();

        // Apply the search
        table.columns().every(function () {
            var that = this;

            $('input', this.footer()).on('keyup change', function () {
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
dataTable_Details
