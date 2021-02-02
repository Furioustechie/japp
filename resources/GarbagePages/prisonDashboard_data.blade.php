<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS Style Sheet -->
    @include('inc.style')
    <!-- End CSS Style Sheet -->
    <style type="text/css">
        .preloader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('assets/img/loader.gif') 50% 50% no-repeat rgb(249, 249, 249);
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
                                        {{-- {{$count}} --}}
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
                                        {{-- {{$count1}} --}}
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
                                <h4 class="card-title mt-0"> Table on Plain Background</h4>
                                <p class="card-category"> Here is a subtitle for this table</p>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-raised btn-primary pull-right" data-toggle="modal"
                                    data-target="#appealModal" data-id="appealModal">Create New Appeal</button>

                                <div class="table-responsive">
                                    <table id="dataTable_Details" class="display nowrap dtr-inline" style="width:100%">
                                        <thead class="text-primary">
                                            <th>ID</th>
                                            <th>Case No</th>
                                            <th>Action</th>
                                        </thead>

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
                                  <button type="button" class="btn btn-primary" data-dismiss="modal">GOT IT !</button>
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
        <script>
            $(document).ready(function(){
            $('.show').on('click',function(){
            var dataURL = $(this).attr('data-target');
            $('.modal-body').load(dataURL,function(){
            $('#abc').modal({show:true});
        });
    }); 
});
</script>              
 
            <script type="text/javascript">
                $(document).ready(function () {
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
                $('input[type=file]').change(function () {
                    $('.progress').show();
                    var current_progress = 0;
                    var interval = setInterval(function () {
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

            {!! Toastr::message() !!}



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
        $.each(fupload, function (index, value) {
            console.log(value);
            $("#fileinput_" + value).show();
        });
        return false;
        if (this.value == 1) {
            $("#fileinput").show();

        } else if (this.value == 2) {
            $("#fileinput1").show();
        } else {
            //
        }

    });

</script>

<script>
    $(function () {
        var url = "/prisonDashboard_data1"
        $('#dataTable_Details').DataTable({
            processing: true,
            serverSide: true,
            ajax: url,
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'case_no',
                    name: 'case_no'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }
            ]
        });
    });
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
