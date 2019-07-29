@include('inc.messages')
<div class="modal fade" data-backdrop="static" tabindex="-1" id="appealModal" role="dialog" aria-labelledby="myModalAppeal" aria-hidden="true" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color:#00bcd4;">
                <h5 class="modal-title w-100 font-weight-bold" style="color:white" id="myModalLabel">{{ __('labels.applicationForm_name') }}</h5><span class="float-right"><button type="button" class="close" data-dismiss="modal">&times;</button></span>
            </div>
            <div class="modal-body" >
                <form action="{{url('appeals')}}" method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">{{ __('labels.prisoners_No') }}</label>
                                <input type="text" name="prisoner_no" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">{{ __('labels.prisoners_Name') }}</label>
                                <input type="text" name="prisoner_name" class="form-control" >
                            </div>
                        </div>
                       
                        <!-- Dropdown data from Prison model and Prisonlist Providers -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="caseno" class="bmd-label-floating">{{ __('labels.case_No') }}</label>
                                <input type="text" name="caseno" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating text-info" style="font-size: 14px;">{{ __('labels.prison_Name') }}</label>
                                <input type="text"  value="{{ Auth::user()->prison->name }}" class="form-control" readonly>
                                <input type="hidden" name="prison_id"  value="{{ Auth::user()->prison->id }}" class="form-control">
                            </div>
                        </div>
                        <!-- Dropdown Ends for Prison List -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Gender" class="bmd-label-floating">{{ __('labels.gender') }}</label>
                                <select class="browser-default custom-select" name="prisoner_gender" required>
                                    <option selected value="">Please Select..</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                    <option value="TG">Third Gender</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">{{ __('labels.sentencing_District') }}</label>
                                <select class="browser-default custom-select" id="sentencingDistrict" name="sentencingDistrict" required>
                                    <option selected value="">Please Select..</option>
                                    @foreach ($dname as $districts)
                                    <option value="{{ $districts->id }}">{{$districts->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">{{ __('labels.sentencing_Court') }}</label>
                                <select class="browser-default custom-select" id="sentencingcourt" name="sentencingcourt" required>
                                    
                                    <option selected value="">Please Select..</option>
                                    {{-- @foreach ($courts_Name as $cdata)
                                    <option value="{{ $cdata->id }}">{{$cdata->name_en}} </option>
                                    @endforeach
                                  @endif --}}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">{{ __('labels.offence_details') }}</legend>
                                    <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">{{ __('labels.offence_act') }}</label>
                                                        <select class="browser-default custom-select" name="act_name" id="act" required>
                                                            <option selected value="">Please Select..</option>
                                                            @foreach ($acts as $act)
                                                            <option value="{{ $act->id }}">{{ $act->name }}</option>
                                                            @endforeach
                                                           
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">{{ __('labels.offence_section') }}</label>
                                                            <select class="browser-default custom-select"  id="section" name="section_name[]" multiple="multiple" required>
                                                                {{-- <option selected value="">Please Select..</option>
                                                                @foreach ($sections as $section)
                                                                <option value="{{ $section->id }}">{{ $section->name }}</option>
                                                                @endforeach --}}
                                                               
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                    <div><label for="sentenceType" id="completeSentence" style="color:black"></label>
                                </div>
                            </fieldset>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">{{ __('labels.sentence_Type') }}</label>
                                <select class="browser-default custom-select" name="sentencetype" required>
                                    <option selected value="">Please Select..</option>
                                    @foreach ($sents_name as $sentenceid)
                                    <option value="{{ $sentenceid->id }}">{{ $sentenceid->sentence_name }}</option>
                                    @endforeach                                    
                                   </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">{{ __('labels.appeals_ToCourt') }}</label>
                                <select class="browser-default custom-select" name="appeals_to_court" required>
                                    <option hidden value="">Please Select ..</option>
                                    <option value="3">High Court</option>
                                    <option value="2" disabled>Sentencing Court</option>
                                    <option value="1" disabled>Other Court</option>
                                </select>
                            </div>
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">{{ __('labels.conviction_time') }}</label>
                                <input type="date" name="convictiondate" class="form-control">
                                <!-- <input type="text" name="convictiondate" class="datepicker">  -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">{{ __('labels.dateOf_appeal') }}</label>
                                <input type="date" name="dateofappeal" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">{{ __('labels.sharok_NO') }}</label>
                                <input type="text" name="sharokno" class="form-control">
                            </div>
                        </div>
                        <!-- Dropdown data from Doctype model and dynamiclist providers -->
                       <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">{{ __('labels.doc_attachment') }}</label>
                                <select class="browser-default custom-select myselect" id="doctype" name="doctype[]" multiple="multiple" required>
                                    
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
                                <label>{{ __('labels.remarks') }}</label>
                                <div class="form-group">
                                    <label class="bmd-label-floating"></label>
                                    <textarea class="form-control" rows="5" name="remarks"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- boleto__wrapper -->
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="options" unchecked>
                            <span class="form-check-sign">
                                <span class="check" name="check"></span>
                            </span>
                            <h5>{{__('labels.cc_attached') }}</h5>
                        </label>
                    </div>
                    <div class="form-check">
                            <label class="form-check-label" data-toggle="tooltip" data-placement="top" title="The prisoner has been informed about the implications of electronic data processing and the fact that it is not mandatory. He or she has given their consent to the electronic processing of their jail appeal application.">
                              <input class="form-check-input" type="checkbox"  name="options"  unchecked>
                              <span class="form-check-sign">
                                <span class="check" name="check"></span>
                              </span>
                              <h5 >{{ __('labels.privacy') }}</h5>
                            </label>
                          </div>
                       

                        <div class="row">
                                <!-- File Uploader open for DocType -->
                                    @foreach ($docname as $datas)
                                    <div class="input-group control-group increment fup" id= <?php echo "fileinput_{$datas->id}";?> name="fileid[]">
                                        <input type="file" id="filename" name="filename[]" class="form-control">
                                        <div class="input-group-btn"> 
                                          <button class="btn btn-success" type="button" ><!--For modern browsers-->

                                            <i class="material-icons">open_in_browser</i></i>{{ __('labels.browse') }}</button>
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

<script>
$(document).ready(function(){

$("#sentencingDistrict").change(function(){
    var district_id = $(this).val();
    console.log(district_id);
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
if(district_id == ""){
    $("#sentencingcourt").empty();
    $("#sentencingcourt").append("<option value=''>"+'Please Select ..'+"</option>");
}else{
    $.ajax({
        url: '/dynamicCourtsList/'+ district_id,
        type: 'post',
        //data: {district_id},
        dataType: 'json',
        success:function(response){
            var len = response.length;
            $("#sentencingcourt").empty();
            for( var i = 0; i<len; i++){
                var id = response[i]['id'];
                var name = response[i]['name_en'];
                $("#sentencingcourt").append("<option value='"+id+"'>"+name+"</option>");
            }
        }
    });}
});
$("#act").change(function(){
    var act_id = $(this).val();
    //console.log(act_id);
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

    $.ajax({
        url: '/dynamicSectionList/'+ act_id,
        type: 'post',
        //data: {district_id},
        dataType: 'json',
        success:function(response){
            var len = response.length;
            $("#section").empty();
            for( var i = 0; i<len; i++){
                var id = response[i]['id'];
                var name = response[i]['name'];
                $("#section").append("<option value='"+id+"'>"+name+"</option>");
            }
        }
    });
});
});
</script>
<script>
        $(document).ready(function(){
            $('#section').change(function(){
                var act = $('select#act option:selected').text();
                var section = $('select#section option:selected').text();
                $('#completeSentence').html('Offence is: '+act+' '+section);
        });
        
        });
</script>

