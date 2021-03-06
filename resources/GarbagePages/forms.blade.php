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
                        <div class="col-md-12">
                            <div class="form-group">
                              <label class="bmd-label-floating">Prisoner's No</label>
                              <input type="text" name="prisonerno" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                <label for="Gender" class="bmd-label-floating">Gender</label>
                                <select class="browser-default custom-select" name="gender">
                                    <option selected>Open this select menu</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                    <option value="TG">Third Gender</option>
                                    </select>
                              </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Case Type</label>
                                  <select class="browser-default custom-select" name="casetype">
                                      <option selected>Open this select menu</option>
                                      <option value="1">GR Case</option>
                                      <option value="2">Non-GR Case</option>
                                     </select>
                                </div>
                              </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="caseno" class="bmd-label-floating">Case No</label>
                          <input type="text" name="caseno" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Sentencing Court</label>
                          <input type="text" name="sentencingcourt" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleSelect1" class="bmd-label-floating">Sentence Type</label>
                            <select class="form-control" name="sentencetype" id="exampleSelect1">
                              <option>Please Select ...</option>
                              <option>Life Sentence</option>
                              <option>Death Sentence</option>
                              <option>> 10 Years</option>
                              <option>> 5 Years</option>
                              <option>< 5 Years</option>
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Prison Name</label>
                            <select class="browser-default custom-select" name="prisonname">
                                <option>Please Select..</option>
                                    @foreach ($pname as $data)

                                    {{-- <option value="0">Open this select menu</option>
                                     --}}
                                     
                                  <option value="{{$data->id}}">{{$data->name}} </option>
                                      @endforeach
                              </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Conviction Date</label>
                            <input type="date" name="convictiondate" class="form-control">
                          </div>
                        </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Sharok NO</label>
                          <input type="text" name="sharokno" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Appealed To</label>
                          <input type="text" name="appealedto" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Remarks</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Some rough texs for dummmy</label>
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
                          <h5>Attached CC From Sentencing Court</h5>
                        </label>
                       
                      </div>
                     <!-- Input File -->
                     <div class="row">
                        <div class="col-md-6">
                        <label class="card-category">ADD APP FORM :</label>
                                    <div class="file-field">
                                    <div class="btn btn-primary btn-sm float-left" >
                                <input type="file"  name="file_app" >
                            </div><br>
                            
                        </div>
                      
                        <label class="card-category">ADD BJ FORM :</label>
                                    <div class="file-field">
                                    <div class="btn btn-primary btn-sm float-left" >
                                <input type="file"  name="file_bj">
                            </div><br>
                            
                        </div>

                      </div>
                    </div><br>
                     <!-- End Section -->
                     {{ csrf_field() }}
                     
                         <button type="submit" class="btn btn-primary pull-right" name="submit" value="submit">SUBMIT APPLICATION</button>
                    <div class="clearfix"></div>
                  </form>
                 
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
                    <div class="card card-profile">
                      <div class="card-avatar">
                        <a href="#pablo">
                          <img class="img" src="../assets/img/faces/Notes-icon.png" />
                        </a>
                      </div>
                      <div class="card-body">
                        <h6 class="card-category text-gray">Documents Required for an Appeal</h6>
                        <h4 class="card-title">...</h4>
                        <p class="card-description">
                          ...
                        </p>
                        <a href="#pablo" class="btn btn-primary btn-round">Okay !</a>
                      </div>
                    </div>
                  </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  @include('inc.scriptstyle')
</body>

</html>