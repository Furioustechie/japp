<!DOCTYPE html>
<html lang="en">

<head>
  @include('inc.style')
  
  
</head>

<body class="">
        @include('inc.navbar')
        @include('inc.messages')
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            Jail Appeal
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="/dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/appeals">
              <i class="material-icons">person</i>
              <p>Appeal List</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="/appealForm">
              <i class="material-icons">content_paste</i>
              <p>Appeal Now</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./typography.html">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Prisoner's Profile</a>
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
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Application Form</h4>
                  <p class="card-category">Complete your application</p>
                </div>
                <div class="card-body">
                <form action="{{url('appeals')}}" method="POST" enctype="multipart/form-data">
                    <div class="row">  
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating">Prisoner's No</label>
                              <input type="text" name="prisonerno" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Prisoner's Name</label>
                                  <input type="text" name="prisonername" class="form-control">
                                </div>
                              </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="Gender" class="bmd-label-floating">Gender</label>
                                <select class="browser-default custom-select" name="gender">
                                    <option selected>Please Select..</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                    <option value="TG">Third Gender</option>
                                    </select>
                              </div>
                            </div>
                             <!-- Dropdown data from Prison model and Prisonlist Providers -->
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Prison Name</label>
                                        <select class="browser-default custom-select" name="prisonname">
                                            <option>Please Select..</option>
                                                @foreach ($pname as $data)
                                                          
                                              <option value="{{$data->id}}">{{$data->name}} </option>
                                                  @endforeach
                                          </select>
                                    </div>
                                  </div>
                              <!-- Dropdown Ends for Prison List -->

                            <div class="col-md-6">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Sentencing Court</label>
                                  <select class="browser-default custom-select" name="sentencingcourt">
                                      <option selected>Please Select..</option>
                                      <option value="1">Lower Court 1</option>
                                      <option value="2">Lower Court 2</option>
                                     </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Offence Type</label>
                                      <select class="browser-default custom-select" name="offencetype">
                                          <option selected>Please Select..</option>
                                          <option value="1">Offence 1</option>
                                          <option value="2">Offence 2</option>
                                          <option value="3">Offence 3</option>
                                         </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="bmd-label-floating">Sentence Type</label>
                                          <select class="browser-default custom-select" name="sentencetype">
                                              <option selected>Please Select..</option>
                                              <option value="1">Sentence Type 1</option>
                                              <option value="2">Sentence Type 2</option>
                                              <option value="3">Sentence Type 3</option>
                                             </select>
                                        </div>
                                      </div>
                                  <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="bmd-label-floating">Appeal To Court</label>
                                          <select class="browser-default custom-select" name="appealcourt"> 
                                              <option hidden >Please Select ..</option>
                                              <option value="1">High Court</option>
                                              <option value="2">Supreme Court</option>
                                              <option value="3">Lower Court</option>
                                             </select>
                                        </div>
                                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="caseno" class="bmd-label-floating">Case No</label>
                          <input type="text" name="caseno" class="form-control">
                        </div>
                      </div>
                    
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Conviction Date</label>
                            <input type="date" name="convictiondate" class="form-control">
                            <!-- <input type="text" name="convictiondate" class="datepicker">  -->
                          </div>
                        </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Date of Appeal</label>
                                      <input  name="dateofappeal" class="form-control" value= <?php echo date("Y-m-d");?> disabled>
                                    </div>
                                  </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Sharok No</label>
                          <input type="text" name="sharokno" class="form-control">
                        </div>
                      </div>
                      <!-- Dropdown data from Doctype model and dynamiclist providers -->
                       <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Documents Name</label>
                                        <select class="browser-default custom-select myselect" id="doctype" name="doctype[]" multiple="multiple">
                                            
                                                @foreach ($docname as $data)
                                                       <option value="{{$data->id}}">{{$data->docname}} </option>
                                                  @endforeach
                                          </select>
                                    </div>
                                  </div>
                       <!-- Dropdown End for Documents type -->
                    </div>
                   
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Remarks</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"></label>
                            <textarea class="form-control" rows="5" name="remarks" ></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox"  name="options" checked>
                          <span class="form-check-sign">
                            <span class="check" name="check"></span>
                          </span>
                          <h5>Attached CC/Acknowledgement Letter</h5>
                        </label>
                       
                      </div>
                     <!-- Input File -->
                     <div class="row">
                        <!-- <div class="col-md-4">
                        <label class="card-category">ADD APP FORM :</label>
                                    <div class="file-field">
                                    <div class="btn btn-primary btn-sm float-left" >
                                <input type="file"  name="file_app" >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                            <label class="card-category">ADD BJ FORM :</label>
                            <div class="file-field">
                                    <div class="btn btn-primary btn-sm float-left" >
                                <input type="file"  name="file_bj">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                                <label class="card-category">ADD Letter :</label>
                                <div class="file-field">
                                        <div class="btn btn-primary btn-sm float-left" >
                                    <input type="file"  name="file_letter">
                                    </div>
                                </div>
                            </div> -->

                           <!-- File Uploader open for DocType -->

                            @foreach ($docname as $datas)
                            <div class="input-group control-group increment fup" id= <?php echo "fileinput_{$datas->id}";?> name="fileid[]">
                                <input type="file" id="filename" name="filename[]" class="form-control">
                                <div class="input-group-btn"> 
                                  <button class="btn btn-success" type="button" ><i class="glyphicon glyphicon-plus"></i>Add</button>
                                </div>
                              </div>
                              @endforeach
                             
                              <!-- <div class="input-group control-group increment fup" id="fileinput_2" >
                                  <input type="file" name="filename[]" class="form-control">
                                  <div class="input-group-btn"> 
                                    <button class="btn btn-success" type="button" ><i class="glyphicon glyphicon-plus"></i>Add</button>
                                  </div>
                                </div>

                                <div class="input-group control-group increment fup" id="fileinput_3" >
                                    <input type="file" name="filename[]" class="form-control">
                                    <div class="input-group-btn"> 
                                      <button class="btn btn-success" type="button" ><i class="glyphicon glyphicon-plus"></i>Add</button>
                                    </div>
                                  </div>
                              <div class="clone hide" id="fileinput1">
                                <div class="control-group input-group" style="margin-top:10px">
                                  <input type="file" name="filename[]" class="form-control">
                                  <div class="input-group-btn"> 
                                    <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                  </div>
                                </div>
                              </div> -->
       

                      </div>
                    </div>
                     <!-- End Section -->
                     {{ csrf_field() }}
                     
                         <button type="submit" class="btn btn-success pull-center" name="submit" value="submit">SUBMIT APPLICATION</button>
                     
                         <div class="clearfix"></div>
                  </form>
                
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
           
          </nav>
          <div class="copyright float-right">
          
           
           
          </div>
        </div>
      </footer>
    </div>
  </div>
  @include('inc.scriptstyle')
  <script type="text/javascript">

    $(document).ready(function() {
      $('.fup').hide();

      $('.myselect').select2({
        placeholder: 'Select an option'
      });

      // $(".btn-success").click(function(){ 
      //     var html = $(".clone").html();
      //     $(".increment").after(html);
      // });

      // $("body").on("click",".btn-danger",function(){ 
      //     $(this).parents(".control-group").remove();
      // });
    

    });

</script>

</body>

</html>
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

<script>
  
</script>