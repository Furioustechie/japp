<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.style')
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<style>
.abc {
    text-align: center;
}
</style>
<body class="">

 @include('inc.messages')
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
        @include('inc.header')
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <div class="abc">
                    <embed src="{{ URL::asset('files/all_records.pdf') }}" type="application/pdf" width="100%" height="800px" />
                </div>          
                </div>
            
                
            </div>
        </div>
          </div>
        </div>
      </div>
      @include('inc.modals')
      <footer class="footer">
        @include('inc.footer')
      </footer>
    </div>
  </div>
  <!-- JavaScripts Styles    -->
  @include('inc.scriptstyle')
  @include('sweet::alert')
</body>



</html>
