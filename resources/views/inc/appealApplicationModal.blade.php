@include('inc.messages')
<div class="modal" data-backdrop="static" tabindex="-1" id="appealModal" role="dialog" aria-labelledby="myModalAppeal" aria-hidden="true" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color:#00bcd4;">
                <h5 class="modal-title w-100 font-weight-bold" style="color:white" id="myModalLabel">{{ __('labels.applicationForm_name') }}</h5><span class="float-right"><button type="button" class="close" data-dismiss="modal">&times;</button></span>
            </div>
            <div class="modal-body" >
                <form action="{{url('appeals')}}" method="POST" enctype="multipart/form-data">

                    
                    <!-- boleto__wrapper -->
                    {{-- <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="options" unchecked>
                            <span class="form-check-sign">
                                <span class="check" name="check"></span>
                            </span>
                            <h5 class="w-100 font-weight-bold" style="color:black">{{__('labels.cc_attached') }}</h5>
                        </label>
                    </div> --}}
                   
                    <div class="form-group form-check ">
                            <label class="form-check-label" data-toggle="tooltip" data-placement="top" title="">
                              <input class="form-check-input" type="checkbox"  name="options" id="options"  unchecked required>
                              <span class="form-check-sign">
                                <span class="check" name="check"></span>
                              </span>
                              <h5 class="w-100 font-weight-bold" style="color:black">The prisoner has been informed about the implications of electronic data processing and the fact that it is not mandatory. He or she has given their consent to the electronic processing of their jail appeal application.</h5>
                            </label>
                          </div>
                        
                            
                    <!-- End Section -->
                    {{ csrf_field() }}
                    <!-- button to trigger the action -->
                    {{-- <button class="btn btn-primary" onclick="md.showNotification('top','right')">Top Right
                        Notification</button> --}}
                    <a href="#"><button type="button" class="btn btn-warning pull-right" data-dismiss="modal">{{ __('labels.close') }}</button></a>
                    <button type="submit" class="btn btn-success pull-right" name="submit" value="submit"><i class="material-icons">send</i> {{ __('labels.submit') }}</button>

                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
  
   
</div>



