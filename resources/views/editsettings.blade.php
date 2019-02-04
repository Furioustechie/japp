<!DOCTYPE html>
<html lang="en">

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
  </style>
  
</head>

<body class="">
    <div id="preloaders" class="preloader"></div>

 @include('inc.messages')
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
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">All Settings</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-2"></div>
            <div class="col-md-8">
               <div class="card card-nav-tabs">
                <div class="card-header card-header-primary">
                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#sentences" data-toggle="tab">
                                        <i class="material-icons">account_balance</i>
                                        Sentences
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#courts" data-toggle="tab">
                                        <i class="material-icons">gavel</i>
                                        Courts
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#prisons" data-toggle="tab">
                                        <i class="material-icons">supervisor_account</i>
                                        Prisons
                                    </a>

                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#offences" data-toggle="tab">
                                      <i class="material-icons">local_library</i>
                                      Offences
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="#status" data-toggle="tab">
                                      <i class="material-icons">wb_sunny</i>
                                      Status
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="#account" data-toggle="tab">
                                      <i class="material-icons">wc</i>
                                      User Account
                                  </a>
                              </li>
                            </ul>
                        </div>
                    </div>
                  </div>
                  <div class="card-body ">
                    <div class="tab-content text-center">
                        <div class="tab-pane active" id="sentences">
                        <a href="#" <button type="button" class="btn btn-raised btn-primary pull-right" data-toggle="modal" data-target="#add_sentence"  data-id="add_sentence" class="add_sentence"><i class="material-icons">add_circle_outline</i> ADD</button> </a>
                          <div class="table-responsive">
                              <table id="dataTableSentences" class="table table-hover table-light table-condensed text-md-left" style="width:100%">
                                  <thead class="text-primary">
                                          <tr>
                                              <th>ID</th>
                                              <th>Sentence Name</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                 </table> 
                      </div>
                    </div>
                        <div class="tab-pane" id="courts">
                          <a href="#" <button type="button" class="btn btn-raised btn-primary pull-right" data-toggle="modal" data-target="#add_sentence"  data-id="add_sentence" class="add_sentence"><i class="material-icons">add_circle_outline</i> ADD</button> </a>

                            <table id="dataTableCourts" class="table table-hover table-light table-condensed text-md-left" style="width:100%">
                                <div class="card-body">
                                        <div class="table-responsive">
                                <thead class="text-primary">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name in English</th>
                                            <th>Name in Bangla</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                               </table> 
                        </div>
                        <div class="tab-pane" id="prisons">
                        <a href="#" <button type="button" class="btn btn-raised btn-primary pull-right" data-toggle="modal" data-target="#add_prison"  data-id="add_prison" class="add_prison"><i class="material-icons">add</i></button> </a>
                            <table id="dataTablePrison" class="table table-hover table-light table-condensed text-md-left" style="width:100%">
                                <div class="card-body">
                                        <div class="table-responsive">
                                <thead class="text-primary">
                                        <tr>
                                            <th>ID</th>
                                            <th> Prison Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                               </table>                         </div>
                        <div class="tab-pane" id="offences">
                        <a href="#" <button type="button" class="btn btn-raised btn-primary pull-right" data-toggle="modal" data-target="#add_offence"  data-id="add_offence" class="add_offence"><i class="material-icons">add</i></button> </a>

                            <table id="dataTableOffences" class="table table-hover table-light table-condensed text-md-left" style="width:100%">
                                <div class="card-body">
                                        <div class="table-responsive">
                                <thead class="text-primary">
                                        <tr>
                                            <th>ID</th>
                                            <th>Offence Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                               </table>
                              </div>
                        <div class="tab-pane" id="status">
                        <a href="#" <button type="button" class="btn btn-raised btn-primary pull-right" data-toggle="modal" data-target="#add_status"  data-id="add_status" class="add_status"><i class="material-icons">add</i></button> </a>

                            <table id="dataTableStatus" class="table table-hover table-light table-condensed text-md-left" style="width:100%">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>ID</th>
                                                <th>Status Name</th>
                                                <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                               </table>
                         </div>
                    </div>
                </div>
                </div>
            <!-- End Tabs with icons on Card -->

       

                <!-- End Block -->
          </div>
        </div>
      </div>
      @include('inc.settingsModal')
       
  
    </div>
  </div>
  <!-- JavaScripts Styles    -->
 
<script>
//   document.onreadystatechange = function () {
//   var state = document.readyState
//   if (state == 'complete') {
//          document.getElementById('interactive');
//          document.getElementById('preloader').style.visibility="hidden";
//   }
// }
</script>

   <script>
      window.setTimeout(function() {
          $(".preloader").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove(); 
          });
      }, 3000);
    </script>
  @include('inc.scriptstyle')
  @include('sweet::alert')
  <footer class="footer">
    @include('inc.footer')
  </footer>
 
</body>

</html>
