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
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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

<body class="">

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
                                        {{$count}}
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
                                        {{$count1}}
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
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-chart">
                                <div class="card-header card-header-success">

                                  <canvas class="ct-chart" id="myChart" style="position: relative; height:30vw; width:80vw"></canvas>
                                    <!----   -->
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">This week appeals by Gender</h4>
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
                        </div>
                        <div class="col-md-4">
                            <div class="card card-chart">
                                <div class="card-header card-header-success">
                                        <div id="piechart_3d" class="zoom"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Total Appeals By Sentencing Type</h4>
                                    <p class="card-category">Category :Type Of Sentence</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-chart">
                                <div class="card-header card-header-danger">
                                    <div class="ct-chart" id="completedTasksChart"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Completed Tasks</h4>
                                    <p class="card-category">Last Campaign Performance</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header card-header-tabs card-header-primary">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Tasks:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#profile" data-toggle="tab">

                                                        <i class="material-icons">bug_report</i> CC Not Attached
                                                        <span class="badge badge-pill badge-warning" style="font-size: 15px !important;">{{ $cc_missing_count[0]->total_cc_missing }}</span>
                                                        <div class="ripple-container"> </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#messages" data-toggle="tab">
                                                        <i class="material-icons">code</i> Long Time No Action <span
                                                            class="badge badge-pill badge-danger" style="font-size: 15px !important;">5</span>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#settings" data-toggle="tab">
                                                        <i class="material-icons">cloud</i> Hearing Date Sets <span
                                                            class="badge badge-pill badge-info" style="font-size: 15px !important;">6</span>
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
                                                <table class="table table-striped table-bordered" id="dataTablex" width="100%"
                                                    cellspacing="0">
                                                    <thead class=" text-primary">

                                                        <th>
                                                            Case No
                                                        </th>
                                                        <th>
                                                            Conviction Date
                                                        </th>
                                                    </thead>
                                                    <tbody>

                                                        @foreach($cc_missing as $no_cc)
                                                        <!-- ToolTip value  -->
                                                        <?php
                                                           // $output ="ID :".$no_cc->id."&#009;"."Case No :".$no_cc->caseno."&#10;"."Sentence Type : ".$appeal->date_of_sentence ;
                                                        ?>
                                                        <tr>

                                                            <td>{{$no_cc->caseno}}</td>
                                                            <td> <a rel="tooltip" data-placement="right" title="">
                                                                @if(!empty($no_cc->date_of_sentence))
                                                                    {{ $no_cc->date_of_sentence }}</a>
                                                                    @else
                                                                    No Date Found
                                                                    @endif
                                                                {{-- <a class="btn tooltipped" data-position="bottom"
                                                                    data-tooltip="I am a tooltip">Hover me!</a> --}}
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
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" checked>
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what
                                                            was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="">
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for "What are conference organizers afraid
                                                            of?"</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="settings">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="">
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Lines From Great Russian Literature? Or E-mails From My
                                                            Boss?</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" checked>
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what
                                                            was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" checked>
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for "What are conference organizers afraid
                                                            of?"</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-----Block for All Application Deatils ------->

                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header card-header-warning">
                                    <h4 class="card-title">Appeals Stats</h4>
                                    <p class="card-category">Deatils Of Appeals</p>
                                </div>
                                <div class="card-body table-responsive">
                                   <table class="table table-hover table-light" id="dataTable" width="100%"
                                        cellspacing="0">
                                        <thead class=" text-primary">
                                            <th>ID</th>
                                            <th>Prison Name</th>
                                            <th>Prisoner Name</th>
                                            <th>Court Name</th>
                                            <th>Offence Name</th>
                                            <th>Command</th>
                                        </thead>
                                        <tfoot class="text-primary">
                                            <th>ID</th>
                                            <th>Prison Name</th>
                                            <th>Prisoner Name</th>
                                            <th>Court Name</th>
                                            <th>Offence Name</th>
                                        </tfoot>
                                        <tbody>
                                            @if(count($appealStatus) > 0)
                                            @foreach($appealStatus as $appstats)
                                            <tr>
                                                <td>{{$appstats->id}}</td>
                                                <td>{{$appstats->name}}</td>
                                                <td>{{$appstats->prisoner_name}}</td>
                                                <td>{{$appstats->court_name}}</td>
                                                <td>{{$appstats->offence_name}}</td>

                                                {{-- @if($appeals->prcy == 1)
                                                <td class="btn btn-success text-center">Agree</td>
                                                @else
                                                <td class="btn btn-warning">Not Agree</td>

                                                @endif --}}

                                                {{-- {{$appeal->isgrant}}</td> --}}
                                                <td class="td-actions text-center">
                                                    <button type="button" rel="tooltip" title="Show Details" class="btn btn-primary btn-link btn-sm"
                                                        data-toggle="modal" data-target="#{{$appstats->id}}">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <!--Modal Initialized-->
                                                    <div class="modal fade" id="{{$appstats->id}}" tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Appeal
                                                                        Details</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>

                                                                <div class="modal-body text-left">
                                                                    <div class="md-form mb-12">
                                                                        <label for="id" class="form-control validate">ID
                                                                            : {{$appstats->id}}</label><br>
                                                                        <label for="caseno" class="form-control validate">Case
                                                                            No : {{$appstats->name}}</label>
                                                                        <label for="sentencetype" class="btn btn-success  col-md-6">Sentence
                                                                            Type </label><span class="label label-default  col-md-6">{{$appstats->prisoner_name}}</span><br><br>
                                                                        <label class="btn btn-success  col-md-6">Prison
                                                                            Name </label><span class="label label-default col-md-6">{{$appstats->court_name}}</span><br><br>
                                                                        <label class="btn btn-success  col-md-6">Appealed
                                                                            On </label><span class="label label-default col-md-6">{{$appstats->offence_name}}</span><br><br>
                                                                        {{-- <label class="btn btn-success  col-md-6">Certified
                                                                            Copies </label><span class="label label-default col-md-6">{{$appeal->privacy}}</span><br><br>
                                                                        --}}

                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary">Save
                                                                        changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Modal -->
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
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

                        <!-----End Of Block for All Application Deatils ------->

                    </div>
                </div>
            </div>

            <footer class="footer">
                @include('inc.footer')
            </footer>
        </div>
    </div>
    @include('inc.scriptstyle')
    <script>
        $(document).ready(function () {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();

        });

    </script>

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
            $('#dataTablex tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<input type="text" class="form-control" placeholder="Search ' + title +
                    '" />');
            });

            // DataTable
            var table = $('#dataTablex').DataTable();

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
<?php 

?>


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

<script>
      window.setTimeout(function() {
          $(".preloader").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove(); 
          });
      }, 3000);
    </script>