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
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
          <!--Import Google Icon Font-->
          <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <link href="https://cdn.jsdelivr.net/npm/materialize-stepper@2.1.4/materialize-stepper.css" rel="stylesheet">
          
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
          <!-- Materializecss compiled and minified JavaScript -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
          <!-- jQueryValidation Plugin -->
          <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
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
                                <button type="button" class="btn btn-raised btn-primary pull-right" data-toggle="modal" data-target="#appealModal"  data-id="appealModal" >Create New Appeal</button>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                Button with data-target
                                              </button>
                                            </p>
                                            <div class="collapse" id="collapseExample">
                                              <div class="card card-body">
                                                        <div>
                                                                        <form>
                                                                                    <ul class="stepper parallel horizontal">
                                                                                      <li class="step active">
                                                                                        <div class="step-title waves-effect waves-dark">Step 1</div>
                                                                                        <div class="step-content">
                                                                                          <div class="row">
                                                                                            <div class='form-field col s12'>
                                                                                              <p>Step with custom validation</p>
                                                                                              <span>For this step we want to have a custom validator that checks if if at least one checkbox is checked</span>
                                                                                              <p>
                                                                                                <input name='checkbox1' type="checkbox" class="filled-in"
                                                                                                       id="checkbox1" value='checkbox1'/>
                                                                                                <label for="checkbox1">Checkbox 1</label>
                                                                                              </p>
                                                                                              <p>
                                                                                                <input name='checkbox2' type="checkbox" class="filled-in"
                                                                                                       id="checkbox2" value='checkbox2'/>
                                                                                                <label for="checkbox2">Checkbox 2</label>
                                                                                              </p>
                                                                                            </div>
                                                                                          </div>
                                                                                          <div class="step-actions">
                                                                                            <button class="waves-effect waves-dark btn next-step" data-validator="validateStepOne">CONTINUE</button>
                                                                                            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                                                                                          </div>
                                                                                        </div>
                                                                                      </li>
                                                                                      <li class="step">
                                                                                        <div class="step-title waves-effect waves-dark">Step 2</div>
                                                                                        <div class="step-content">
                                                                                          <div class="row">
                                                                                            <div class='form-field col s12'>
                                                                                              <p>Step with no custom validation</p>
                                                                                              <div class="input-field col s12">
                                                                                                <input type="text" name="textfield" class="required validate"/>
                                                                                                <label for="textfield">Random textfield</label>
                                                                                              </div>
                                                                                            </div>
                                                                                          </div>
                                                                                          <div class="step-actions">
                                                                                            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                                                                                            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                                                                                          </div>
                                                                                        </div>
                                                                                      </li>
                                                                                      <li class="step">
                                                                                        <div class="step-title waves-effect waves-dark">Step 3</div>
                                                                                        <div class="step-content">
                                                                                          <div class="row">
                                                                                            <div class='form-field'>
                                                                                              <p>Step with feedback and custom validation</p>
                                                                                              <p>
                                                                                                <input name='checkbox3' type="checkbox" class="filled-in"
                                                                                                       id="checkbox3" value='checkbox3'/>
                                                                                                <label for="checkbox3">Checkbox 3</label>
                                                                                              </p>
                                                                                              <p>
                                                                                                <input name='checkbox4' type="checkbox" class="filled-in"
                                                                                                       id="checkbox4" value='checkbox4'/>
                                                                                                <label for="checkbox4">Checkbox 4</label>
                                                                                              </p>
                                                                                            </div>
                                                                                            <div class="input-field col s12">
                                                                                              <input type="text" id="textfield2" name="textfield2" class="required validate"/>
                                                                                              <label for="textfield2">This field should contain the word materialize</label>
                                                                                            </div>
                                                                                          </div>
                                                                                          <div class="step-actions">
                                                                                            <button class="waves-effect waves-dark btn next-step" data-feedback="nextStepThreeHandler" data-validator="validateStepThree">SUBMIT</button>
                                                                                            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                                                                                          </div>
                                                                                        </div>
                                                                                      </li>
                                                                                      <li class="step">
                                                                                        <div class="step-title waves-effect waves-dark">Step 4</div>
                                                                                        <div class="step-content">
                                                                                          <div class="row">
                                                                                            <div class='form-field'>
                                                                                              <p>Submit phase</p>
                                                                                            </div>
                                                                                          </div>
                                                                                          <div class="step-actions">
                                                                                            <input type="submit" class="waves-effect waves-dark btn next-step" value="SUBMIT"/>
                                                                                            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                                                                                          </div>
                                                                                        </div>
                                                                                      </li>
                                                                                    </ul>
                                                                                  </form>
                                                                                  </div>                                              </div>
                                            </div>
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

            <footer class="footer">
                @include('inc.footer')
            </footer>
        </div>
    </div>
    @include('inc.scriptstyle')
    <script type="text/javascript">

        $(document).ready(function() {
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
$(function() {
    var url = "/prisonDashboard_data"
    $('#dataTable_Details').DataTable({

        processing: true,

        serverSide: true,
        ajax: url,
        

        columns: [

            { data: 'id', name: 'id' },

            { data: 'case_no', name: 'case_no' },

          
            
            {data: 'action', name: 'action', orderable: false, searchable: false}
            
        ]

    });

});

</script>
<script>
$(document).ready(function() {
  $('.stepper').activateStepper();
})

function validateStepOne() {
  // Extract the checked checkboxes from the first step
  if($('.step').first().find('input[type="checkbox"]:checked').length)
    return true;
  return false;
}

function validateStepThree() {
  var validation = true;
  if($('.step:nth-child(3) input[type="text"]').val().indexOf('materialize') === -1)
    validation = false;
  if($('.step:nth-child(3) input[type="checkbox"]:checked').length === 0)
    validation = false;
  return validation;
  
}

function nextStepThreeHandler() {
  if(validateStepThree())
    $('.stepper').nextStep();
  else {
    $('.stepper ').destroyFeedback();              $('.stepper').getStep($('.stepper').getActiveStep()).addClass('wrong');
  }
}




/* Materializecss Stepper - By Kinark 2016
// https://github.com/Kinark/Materialize-stepper
// JS v2.1.3
*/

var validation = $.isFunction($.fn.valid) ? 1 : 0;

$.fn.isValid  = function() {
   if(validation){
      return this.valid();
   } else {
      return true;
   }
};

if (validation) {
   $.validator.setDefaults({
      errorClass: 'invalid',
      validClass: "valid",
      errorPlacement: function (error, element) {
         if(element.is(':radio') || element.is(':checkbox')) {
            error.insertBefore($(element).parent());
         } else {
            error.insertAfter(element); // default error placement.
            // element.closest('label').data('error', error);
            // element.next().attr('data-error', error);
         }
      },
      success: function (element) {
         if(!$(element).closest('li').find('label.invalid:not(:empty)').length){
            $(element).closest('li').removeClass('wrong');
         }
      }
   });

   // When parallel stepper is defined we need to consider invisible and
   // hidden fields
   if($('.stepper.parallel').length) $.validator.setDefaults({ignore:''});
}

$.fn.getActiveStep  = function() {
   var active = this.find('.step.active');
   return $(this.children('.step:visible')).index($(active))+1;
};

$.fn.activateStep  = function(callback) {
   if($(this).hasClass('step')) return;
   var stepper = $(this).closest('ul.stepper');
   stepper.find('>li').removeAttr("data-last");
   if(window.innerWidth < 993 || !stepper.hasClass('horizontal')) {
      $(this).addClass("step").stop().slideDown(400, function(){
         $(this).css({'height':'auto', 'margin-bottom': '','display': 'inherit'});if(callback)callback();
         stepper.find('>li.step').last().attr('data-last', 'true');
      });
   } else {
      $(this).addClass("step").stop().css({'width':'0%','display': 'inherit'}).animate({width:'100%'}, 400, function(){
         $(this).css({'height':'auto', 'margin-bottom': '','display': 'inherit'});if(callback)callback();
         stepper.find('>li.step').last().attr('data-last', 'true');
      });
   }
};

$.fn.deactivateStep  = function(callback) {
   if(!$(this).hasClass('step')) return;
   var stepper = $(this).closest('ul.stepper');
   stepper.find('>li').removeAttr("data-last");
   if(window.innerWidth < 993 || !stepper.hasClass('horizontal')) {
      $(this).stop().css({'transition':'none', '-webkit-transition':'margin-bottom none'}).slideUp(400, function(){
         $(this).removeClass("step").css({'height':'auto','margin-bottom':'','transition':'margin-bottom .4s','-webkit-transition':'margin-bottom .4s'});
         if(callback)callback();
         stepper.find('>li').removeAttr("data-last");
         stepper.find('>li.step').last().attr('data-last', 'true');
      });
   } else {
      $(this).stop().animate({width:'0%'}, 400, function(){
         $(this).removeClass("step").hide().css({'height':'auto', 'margin-bottom': '','display': 'none', 'width': ''});
         if(callback)callback();
         stepper.find('>li.step').last().attr('data-last', 'true');
      });
   }
};

$.fn.showError  = function(error) {
   if(validation) {
      var name = this.attr('name');
      var form = this.closest('form');
      var obj = {};
      obj[name] = error;
      form.validate().showErrors(obj);
      this.closest('li').addClass('wrong');
   } else {
      this.removeClass('valid').addClass('invalid');
      this.next().attr('data-error', error);
   }
};

$.fn.activateFeedback  = function() {
   var active = this.find('.step.active:not(.feedbacking)').addClass('feedbacking').find('.step-content');
   active.prepend('<div class="wait-feedback"> <div class="preloader-wrapper active"> <div class="spinner-layer spinner-blue"> <div class="circle-clipper left"> <div class="circle"></div></div><div class="gap-patch"> <div class="circle"></div></div><div class="circle-clipper right"> <div class="circle"></div></div></div><div class="spinner-layer spinner-red"> <div class="circle-clipper left"> <div class="circle"></div></div><div class="gap-patch"> <div class="circle"></div></div><div class="circle-clipper right"> <div class="circle"></div></div></div><div class="spinner-layer spinner-yellow"> <div class="circle-clipper left"> <div class="circle"></div></div><div class="gap-patch"> <div class="circle"></div></div><div class="circle-clipper right"> <div class="circle"></div></div></div><div class="spinner-layer spinner-green"> <div class="circle-clipper left"> <div class="circle"></div></div><div class="gap-patch"> <div class="circle"></div></div><div class="circle-clipper right"> <div class="circle"></div></div></div></div></div>');
};

$.fn.destroyFeedback  = function() {
   var active = this.find('.step.active.feedbacking');
   if(active) {
      active.removeClass('feedbacking');
      active.find('.wait-feedback').remove();
   }
   return true;
};

$.fn.resetStepper  = function(step) {
   if(!step) step = 1;
   var form = $(this).closest('form');
   $(form)[0].reset();
   Materialize.updateTextFields();
   return $(this).openStep(step);
};

$.fn.submitStepper  = function(step) {
   var form = this.closest('form');
   if(form.isValid()) {
      form.submit();
   }
};

$.fn.nextStep = function(callback, activefb, e) {
   var stepper = this;
   var settings = $(stepper).data('settings');
   var form = this.closest('form');
   var active = this.find('.step.active');
   var next = $(this.children('.step:visible')).index($(active))+2;
   var feedback = active.find('.next-step').length > 1 ? (e ? $(e.target).data("feedback") : undefined) : active.find('.next-step').data("feedback");
   // If the stepper is parallel, we want to validate the input of the current active step. Not all elements.
   if((settings.parallel && $(active).validateStep()) || (!settings.parallel && form.isValid())) {
      if(feedback && activefb) {
         if(settings.showFeedbackLoader) stepper.activateFeedback();
         return window[feedback].call();
      }
      active.removeClass('wrong').addClass('done');
      this.openStep(next, callback);
      return this.trigger('nextstep');
   } else {
      return active.removeClass('done').addClass('wrong');
   }
};

$.fn.prevStep = function(callback) {
   var active = this.find('.step.active');
   if(active.hasClass('feedbacking')) return;
   var prev = $(this.children('.step:visible')).index($(active));
   active.removeClass('wrong');
   this.openStep(prev, callback);
   return this.trigger('prevstep');
};

$.fn.openStep = function(step, callback) {
   var settings = $(this).closest('ul.stepper').data('settings');
   var $this = this;
   var step_num = step - 1;
   step = this.find('.step:visible:eq('+step_num+')');
   if(step.hasClass('active')) return;
   var active = this.find('.step.active');
   var next;
   var prev_active = next = $(this.children('.step:visible')).index($(active));
   var order = step_num > prev_active ? 1 : 0;
   if(active.hasClass('feedbacking')) $this.destroyFeedback();
   active.closeAction(order);
   step.openAction(order, function(){
      if(settings.autoFocusInput) step.find('input:enabled:visible:first').focus();
      $this.trigger('stepchange').trigger('step'+(step_num+1));
      if(step.data('event')) $this.trigger(step.data('event'));
      if(callback)callback();
   });
};

$.fn.closeAction = function(order, callback) {
   var closable = this.removeClass('active').find('.step-content');
   if(window.innerWidth < 993 || !this.closest('ul').hasClass('horizontal')) {
      closable.stop().slideUp(300,"easeOutQuad", callback);
   } else {
      if(order==1) {
         closable.animate({left: '-100%'},function(){closable.css({display: 'none', left: '0%'}, callback);});
      } else {
         closable.animate({left: '100%'},function(){closable.css({display: 'none', left: '0%'}, callback);});
      }
   }
};

$.fn.openAction = function(order, callback) {
   var openable = this.removeClass('done').addClass('active').find('.step-content');
   if(window.innerWidth < 993 || !this.closest('ul').hasClass('horizontal')) {
      openable.slideDown(300,"easeOutQuad", callback);
   } else {
      if(order==1) {
         openable.css({left: '100%', display: 'block'}).animate({left: '0%'}, callback);
      } else {
         openable.css({left: '-100%', display: 'block'}).animate({left: '0%'}, callback);
      }
   }
};

$.fn.activateStepper = function(options) {
   var settings = $.extend({
      linearStepsNavigation: true,
      autoFocusInput: true,
      showFeedbackLoader: true,
      autoFormCreation: true,
      parallel: false // By default we don't assume the stepper is parallel
   }, options);
   $(document).on('click', function(e){
      if(!$(e.target).parents(".stepper").length){
         $('.stepper.focused').removeClass('focused');
      }
   });

   $(this).each(function(){
      var $stepper = $(this);
      if(!$stepper.parents("form").length && settings.autoFormCreation) {
         var method = $stepper.data('method');
         var action = $stepper.data('action');
         var method = (method ? method : "GET");
         action = (action ? action : "?");
         $stepper.wrap( '<form action="'+action+'" method="'+method+'"></form>' );
      }

      $stepper.data('settings', {linearStepsNavigation: settings.linearStepsNavigation,autoFocusInput: settings.autoFocusInput,showFeedbackLoader:settings.showFeedbackLoader, parallel:$stepper.hasClass('parallel')});
      $stepper.find('li.step.active').openAction(1);
      $stepper.find('>li').removeAttr("data-last");
      $stepper.find('>li.step').last().attr('data-last', 'true');

      $stepper.on("click", '.step:not(.active)', function () {
         var object = $($stepper.children('.step:visible')).index($(this));
         if($stepper.data('settings').parallel && validation) { // Invoke parallel stepper behaviour
            $(this).addClass('temp-active');
            $stepper.validatePreviousSteps()
            $stepper.openStep(object + 1);
            $(this).removeClass('temp-active');
         } else if(!$stepper.hasClass('linear')) {
            $stepper.openStep(object+1);
         } else if(settings.linearStepsNavigation) {
            var active = $stepper.find('.step.active');
            if($($stepper.children('.step:visible')).index($(active))+1 == object) {
               $stepper.nextStep(undefined, true, undefined);
            } else if ($($stepper.children('.step:visible')).index($(active))-1 == object) {
               $stepper.prevStep(undefined);
            }
         }
      }).on("click", '.next-step', function(e) {
         e.preventDefault();
         $stepper.nextStep(undefined, true, e);
      }).on("click", '.previous-step', function(e) {
         e.preventDefault();
         $stepper.prevStep(undefined);
      }).on("click", "button:submit:not(.next-step, .previous-step)", function (e) {
         e.preventDefault();
         feedback = e ? $(e.target).data("feedback") : undefined;
         var form = $stepper.closest('form');
         if(form.isValid()) {
            if(feedback) {
               stepper.activateFeedback();
               return window[feedback].call();
            }
            form.submit();
         }
      }).on("click", function () {
         $('.stepper.focused').removeClass('focused');
         $(this).addClass('focused');
      });
   });
};

/**
 * Return the step element on given index.
 *
 * @param step, index of the step to be returned
 * @returns {*}, the step requested
 */
$.fn.getStep = function(step) {
    var settings = $(this).closest('ul.stepper').data('settings');
    var $this = this;
    var step_num = step - 1;
    step = this.find('.step:visible:eq('+step_num+')');
    return step;
};

/**
 * Run validation over all previous steps from the steps this
 * function is called on.
 */
$.fn.validatePreviousSteps = function() {
    var active = $(this).find('.step.temp-active');
    var index = $(this.children('.step')).index($(active));
    // We assume that the validator is set to ignore nothing.
    $(this.children('.step')).each(function(i) {
        if (i >= index) {
            $(this).removeClass('wrong done');
        } else {
            $(this).validateStep();
        }
    });
};

/**
 * Validate the step that this function is called on.
 */
$.fn.validateStep = function() {
    var stepper = this.closest('ul.stepper');
    var form = this.closest('form');
    var step = $(this);
    // Retrieve the custom validator for that step if exists.
    var validator = step.find('.next-step').data("validator");
    if(this.validateStepInput()) { // If initial base validation succeeded go on
      if(validator) { // If a custom validator is given also call that validator
         if (window[validator].call()) {
             step.removeClass('wrong').addClass('done');
             return true;
         }
         else {
             step.removeClass('done').addClass('wrong');
             return false;
         }
      }
      step.removeClass('wrong').addClass('done');
      return true;
    } else {
      step.removeClass('done').addClass('wrong');
      return false;
    }
};

/**
 * Uses the validation variable set by the stepper constructor
 * to run standard validation on the current step.
 * @returns {boolean}
 */
$.fn.validateStepInput = function() {
    var valid = true;
    if (validation) {
        // Find all input fields dat need validation in current step.
        $(this).find('input.validate').each(function() {
            if (!$(this).valid()) {
                valid = false;
                return false;
            }
        });
    }
    return valid;
};
</script>
</html>
