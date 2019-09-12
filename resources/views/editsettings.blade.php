<!DOCTYPE html>
<html lang="en">

<head>
  @include('inc.style')
  
  <style>
  span.mycus-class2 {
    color: red;
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
     @include('inc.header')
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
                                        {{ __('labels.Sentences') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#courts" data-toggle="tab">
                                        <i class="material-icons">gavel</i>
                                        {{ __('labels.Courts') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#prisons" data-toggle="tab">
                                        <i class="material-icons">supervisor_account</i>
                                        {{ __('labels.Prisons') }}
                                    </a>

                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#offences" data-toggle="tab">
                                      <i class="material-icons">local_library</i>
                                      {{ __('labels.Offences') }}
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="#status" data-toggle="tab">
                                      <i class="material-icons">wb_sunny</i>
                                      {{ __('labels.Status') }}
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="#uaccount" data-toggle="tab">
                                      <i class="material-icons">wc</i>
                                      {{ __('labels.User_Account') }}
                                  </a>
                              </li>
                            </ul>
                        </div>
                    </div>
                  </div>
                  <div class="card-body ">
                    <div class="tab-content text-center">
                        <div class="tab-pane active" id="sentences">
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalSentenceForm"  data-id="add_sentence">{{ __('labels.Add_New_Sentence') }}</button>     

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
                          <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalCourtForm"  data-id="add_courts">{{ __('labels.Add_New_Court') }}</button>     

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
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalPrisonForm"  data-id="add_prison">{{ __('labels.Add_New_Prison') }}</button>     
  
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
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalOffenceForm"  data-id="add_offence">{{ __('labels.Add_New_Offence') }}</button>     

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
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalStatusForm"  data-id="add_status">{{ __('labels.Add_New_Status') }}</button>     

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
                         <div class="tab-pane" id="uaccount">
                           <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#add_accountName"  data-id="add_accountName">{{ __('labels.Add_New_User') }}</button>     
                           <table id="dataTableuaccount" class="table table-hover table-light table-condensed text-md-left" style="width:100%">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <thead class="text-primary">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Status</th>
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
    <footer class="footer">
        @include('inc.footer')
    </footer>
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

  
  @include('inc.scriptstyle')
  @include('sweet::alert')
  <footer class="footer">
    @include('inc.footer')
  </footer>
  {!! Toastr::message() !!}
</body>

</html>
