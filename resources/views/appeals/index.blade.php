<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.style')

</head>

<body class="">

    {{-- @include('inc.navbar') --}}
    @include('inc.messages')
    {{-- @include('inc.modals') --}}
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
                                                    <td><button type="button" rel="tooltip" title="Details" class="btn btn-primary btn-link btn-sm"
                                                            data-toggle="modal" data-target="#abc_{{$appeal_stat->id}}">
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
