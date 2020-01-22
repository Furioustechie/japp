<!DOCTYPE html>
<html lang="en">

<head>
  @include('inc.style')
  <style>
.myDiv{
	display:none;
}  

</style>

</head>

<body class="">
    
 {{-- @include('inc.navbar') --}}
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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Appeal Records</h4>
                  <p class="card-category"> Details Appeal Information</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
				      
                    <table id="dataTable_xyz" class="table table-hover table-light display nowrap"   style="width:100%">
                      <div class="card-body">
                          <div class="table-responsive">
                              <thead class="text-primary">
                                  <tr>
                                      <th>ID</th>
                                      <th>Case No</th>
                                      <th>Prison Name</th>
                                      <th>Status</th>
                                      <th>Action</th>
                              </tr>
                          </thead>
                          
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
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#dataTable_z thead th').each( function () {
      
        var title = $(this).text();
        $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#dataTable_z').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
       
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
            
        } );
    } );
} );
</script>
<script>
// $('#dataTable').dataTable( {
//     "paging": false
// } );
</script>
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
                if ( that.search() !== this.value ) {
                    that
                        .search( this.value )
                        .draw();
                }
            } );
        } );
    } );
    </script>
    <script>
    $('.show').hide();
    $('.myselection').change(function() {
    $('.show').show();
});
</script>
{{-- <script>
$('.modal').on('hide', function() {
window.location.reload();
});
</script> --}}

<script>
/* Edit Courts Item */
$(function() {
    var url = "/hc_details"
    $('#dataTable_xyz').DataTable({

        processing: true,

        serverSide: true,
        ajax: url,
        

        columns: [

            { data: 'id', name: 'id' },

            { data: 'case_no', name: 'case_no' },

            { data: 'prison_name', name: 'prison_name' },

            {data: 'status', name: 'status', orderable: false, searchable: false},
            {data: 'action', name: 'action', orderable: false, searchable: false}
            
        ]

    });

});
</script>
</html>
