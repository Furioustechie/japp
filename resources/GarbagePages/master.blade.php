<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS Style Sheet -->
    @include('inc.style')
    <!-- End CSS Style Sheet -->
</head>


<body class="">
    <!--Laravel Messages -->
        @include('inc.messages')
    <!--End Messages -->
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
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
            <!-- Side Navbar  -->
            @include('inc.header')
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Section start -->
                         <div class="col-md-2"></div>
                            <div class="col-md-6">
                              <div class="card" >
                                            <div class="card-header card-header-primary" >
                                                <h4 class="card-title">User Registration </h4>
                                                <p class="card-category"></p>
                                            </div>
                                           <div class="card-body">
                                           
                                           </div>
                                    </div>
                                 </div>
                             </div>
                         <!-- End Section  -->
                        </div>
                    </div>
                 <footer class="footer">
                  <!-- Footer-->
                  @include('inc.footer')
            </footer>
    </div>
 </div>
  <!-- JavaScript Style Sheet -->
    @include('inc.scriptstyle')
</body>
</html>
