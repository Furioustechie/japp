<!DOCTYPE html>
<html lang="en">

<head>
  @include('inc.style')


<script>

</script>

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
            <div class="col-md-8 offset-sm-2">
              <div class="card" >
                <div class="card-header card-header-primary" >
                  <h4 class="card-title">Application Form</h4>
                  <p class="card-category">Complete your application</p>
                </div>
                
                <div class="card-body">
                <form action="{{url('appeals')}}" method="POST" enctype="multipart/form-data">
                  
                    <div class="row">  
                        <div class="col-md-6">
                            <div class="form-group" >
                              <label class="bmd-label-floating">Prisoner's No</label>
                              <input type="text" name="prisoner_no" class="form-control" >
                            </div>
                          </div>
                          <div class="col-md-6">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Prisoner's Name</label>
                                  <input type="text" name="prisoner_name" class="form-control" required>
                                </div>
                              </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="Gender" class="bmd-label-floating">Gender</label>
                                <select class="browser-default custom-select" name="prisoner_gender" >
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
                                        <select class="browser-default custom-select" name="prisonid" >
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
                                       @foreach ($courts_name as $cdata)
                                         {{-- <!--@if($cdata->disid == 18)             -->      --}}
                                      <option value="{{$cdata->id}}">{{$cdata->name_en}} </option>
                                      {{-- @endif    --}}
                                      @endforeach
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
                                              <option value="1">Sentence 1</option>
                                              <option value="2">Sentence 2</option>
                                              <option value="3">Sentence 3</option>
                                             </select>
                                        </div>
                                      </div>
                                  <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="bmd-label-floating">Appeal To Court</label>
                                          <select class="browser-default custom-select" name="appeals_to_court" > 
                                              <option hidden >Please Select ..</option>
                                              <option value="1">High Court</option>
                                              <option value="2">Sentencing Court</option>
                                              <option value="3">Other Court</option>
                                             </select>
                                        </div>
                                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="caseno" class="bmd-label-floating">Case No</label>
                          <input type="text" name="caseno" class="form-control" required>
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
                   
                  

                    <!-- boleto__wrapper -->
                    <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox"  name="options" checked>
                          <span class="form-check-sign">
                            <span class="check" name="check"></span>
                          </span>
                          <h5>Attached CC/Acknowledgement Letter</h5>
                        </label>
                      </div>
                      <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"  name="options" unchecked>
                            <span class="form-check-sign">
                              <span class="check" name="check"  data-toggle="modal" data-target="#privacy_policy"  data-id="privacy_policy"></span>
                            </span>
                            <h5>Accept Privacy and Policy</h5>
                          </label>
                        </div>
                      
                     <!-- Input File -->
<!-- Central Modal Medium Warning -->
<div class="modal fade" id="privacy_policy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#00bcd4;">
          <h5 class="modal-title" id="exampleModalLabel">Privacy & Policy Warning</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            We respect your privacy !<br>
            Any personal information you provide to us including and similar to your name, address, 
            telephone number and e-mail address will not be released, sold, 
            or rented to any entities or individuals outside of our organization except as noted below.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">I Agree</button>
        </div>
      </div>
    </div>
</div>
<!-- Central Modal Medium Warning-->


                     <div class="row">
                        <!-- File Uploader open for DocType -->
                            @foreach ($docname as $datas)
                            <div class="input-group control-group increment fup" id= <?php echo "fileinput_{$datas->id}";?> name="fileid[]">
                                <input type="file" id="filename" name="filename[]" class="form-control">
                                <div class="input-group-btn"> 
                                  <button class="btn btn-success" type="button" ><i class="glyphicon glyphicon-plus"></i>Browse</button>
                                </div>
                              </div>
                              @endforeach  
                              
                           </div>
                           
                           <div class="form-group">
                            <div class="progress">
                              <div id="dynamic" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                <span id="current-progress"></span>
                              </div>
                            </div>
                    </div>
                     <!-- End Section -->
                     {{ csrf_field() }}
                     <!-- button to trigger the action -->
                         {{-- <button class="btn btn-primary" onclick="md.showNotification('top','right')">Top Right Notification</button> --}}
                         <button type="submit" class="btn btn-success pull-right" name="submit" value="submit">SUBMIT APPLICATION</button>
                     
                         <div class="clearfix"></div>
                  </form>
                
                </div>
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
 <script>
  $('.progress').hide();
  $('input[type=file]').change(function() { 
  $('.progress').show();
  var current_progress = 0;
  var interval = setInterval(function() {
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

