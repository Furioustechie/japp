@include('inc.messages')
<div class="modal fade" data-backdrop="static" tabindex="-1" id="appealModal" role="dialog" aria-labelledby="myModalAppeal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color:#00bcd4;">
                <h5 class="modal-title w-100 font-weight-bold" style="color:white" id="myModalLabel">Jail
                    Appeal Application Form</h5>
            </div>
            <div class="modal-body" >
                <form action="{{url('appeals')}}" method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Prisoner's No</label>
                                <input type="text" name="prisoner_no" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Prisoner's Name</label>
                                <input type="text" name="prisoner_name" class="form-control" >
                            </div>
                        </div>
                       
                        <!-- Dropdown data from Prison model and Prisonlist Providers -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="caseno" class="bmd-label-floating">Case No</label>
                                <input type="text" name="caseno" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating text-info" style="font-size: 14px;">Prison Name</label>
                                <input type="text"  value="{{ Auth::user()->prison->name }}" class="form-control" readonly>
                                <input type="hidden" name="prison_id"  value="{{ Auth::user()->prison->id }}" class="form-control">
                            </div>
                        </div>
                        <!-- Dropdown Ends for Prison List -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Gender" class="bmd-label-floating">Gender</label>
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
                                <label class="bmd-label-floating">Sentencing Court</label>
                                <select class="browser-default custom-select" name="sentencingcourt" required>
                                    <option selected value="">Please Select..</option>
                                    @foreach ($courts_name as $cdata)
                                    {{--
                                    <!--@if($cdata->disid == 18)             --> --}}
                                    <option value="{{$cdata->id}}">{{$cdata->name_en}} </option>
                                    {{-- @endif --}}
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Offence Type</label>
                                <select class="browser-default custom-select" name="offencetype" required>
                                    <option selected value="">Please Select..</option>
                                    @foreach ($offence_name as $offence_names)
                                    <option value="{{ $offence_names->id }}">{{ $offence_names->name }}</option>
                                    @endforeach
                                   
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Sentence Type</label>
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
                                <label class="bmd-label-floating">Appeal To Court</label>
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
                                <label class="bmd-label-floating">Conviction Date</label>
                                <input type="date" name="convictiondate" class="form-control">
                                <!-- <input type="text" name="convictiondate" class="datepicker">  -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Date of Appeal</label>
                                <input name="dateofappeal" class="form-control" value=<?php echo date("Y-m-d");?>
                                disabled>
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
                                <label>Remarks</label>
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


                        <div class="row">
                                <!-- File Uploader open for DocType -->
                                    @foreach ($docname as $datas)
                                    <div class="input-group control-group increment fup" id= <?php echo "fileinput_{$datas->id}";?> name="fileid[]">
                                        <input type="file" id="filename" name="filename[]" class="form-control">
                                        <div class="input-group-btn"> 
                                          <button class="btn btn-success" type="button" ><!--For modern browsers-->

                                            <i class="material-icons">open_in_browser</i></i>Browse</button>
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
                    <a href="#"><button type="button" class="btn btn-warning pull-right" data-dismiss="modal">CLOSE</button></a>
                    <button type="submit" class="btn btn-success pull-right" name="submit" value="submit"><i class="material-icons">send</i> SUBMIT</button>

                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
  
   
</div>

