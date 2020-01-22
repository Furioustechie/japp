<!-- Modal For Offence Name Entry -->

<div class="modal fade" id="modalOffenceForm" tabindex="-1" role="dialog" aria-labelledby="myModalOffence" aria-hidden="true" >
<form action="/editsettings/add_offence" method="POST" name="offenceForm">
    {{ csrf_field() }}
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header text-center" style="background-color:#00bcd4;">
      <h4 class="modal-title w-100 font-weight-bold" style="color:white">Add New Offence Name</h4>
      
    </div>
    <br>
    <div class="col-md-12 ">
        <div class="form-group">
          <label for="offence_name" class="bmd-label-floating text-success ">Offence Name</label>
          <input type="text" name="offence_name" class="form-control" required>
        </div>
      </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="offence_submit">Save</button>
          </div>
    </div>
    
  </div>
</form>
</div>

<!-- Modal For Prion Name Entry -->
<div class="modal fade" id="modalPrisonForm" tabindex="-1" role="dialog" aria-labelledby="myModalPrison"
aria-hidden="true" >
<form action="/editsettings/add_prisonname" method="POST">
    {{ csrf_field() }}
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header text-center" style="background-color:#00bcd4;">
      <h4 class="modal-title w-100 font-weight-bold" style="color:white">Add New Prison Name</h4>
     
    </div>
    <br>
    <div class="col-md-12 ">
        
      <!--Dropdown for District Name primary-->
      <div class="form-group">
            <label for="district_name" class="bmd-label-floating text-success ">District Name</label>
            <select class="browser-default custom-select" name="district_name" required>
                <option value="">Please Select..</option>
                    @foreach ($dname as $data)
                              
                  <option value="{{$data->id}}">{{$data->name}} </option>
                      @endforeach
              </select>
        </div>
      <!--/Dropdown primary-->
    </div>
      <div class="col-md-12">
          <div class="form-group">
            <label for="prison_name" class="bmd-label-floating text-success">Prison Name</label>
            <input type="text" name="prison_name" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" value="submit" name="prison_submit">Save</button>
          </div>
    </div>
    
  </div>
</form>
</div>

<!-- Modal For Sentence Name Entry -->
<div class="modal fade" id="modalSentenceForm" tabindex="-1" role="dialog" aria-labelledby="myModalSentence"
aria-hidden="true" >
<form action="/editsettings/add_sentence" method="POST">
    {{ csrf_field() }}
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header text-center" style="background-color:#00bcd4;">
      <h4 class="modal-title w-100 font-weight-bold" style="color:white">Add New Sentence Name</h4>
     
    </div>
    <br>
    <div class="col-md-12 ">
        <div class="form-group">
          <label for="sentence_name" class="bmd-label-floating text-success ">Sentence Name</label>
          <input type="text" name="sentence_name" class="form-control" required>
        </div>
      </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
            <button type="submit" class="btn btn-primary" value="submit" name="sen_submit">Save</button>
          </div>
    </div>
    
  </div>
</form>
</div>

<!-- Modal For Courts Name Entry -->

<div class="modal fade" id="modalCourtForm" tabindex="-1" role="dialog" aria-labelledby="myModalCourt"
aria-hidden="true" >
<form action="/editsettings/add_courtname" method="POST">
    {{ csrf_field() }}
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header text-center" style="background-color:#00bcd4;">
      <h4 class="modal-title w-100 font-weight-bold" style="color:white">Add New Court Name</h4>
     
    </div>
    <br>
    <div class="col-md-12 ">
         <!--Dropdown for District Name primary-->
      <div class="form-group">
            <label for="district_name" class="bmd-label-floating text-success ">District Name</label>
            <select class="browser-default custom-select" name="district_name" required>
                <option value="">Please Select..</option>
                    @foreach ($dname as $data)
                              
                  <option value="{{$data->id}}">{{$data->name}} </option>
                      @endforeach
              </select>
        </div>
      <!--/Dropdown primary-->
      </div>

      <div class="col-md-12">
          <div class="form-group">
            <label for="prison_name" class="bmd-label-floating text-success">Court Name</label>
            <input type="text" name="court_name" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" value="submit" name="court_submit">Save</button>
          </div>
    </div>
    
  </div>
</form>
</div>

<!-- Modal For Staus Name Entry -->
<div class="modal fade" id="modalStatusForm" tabindex="-1" role="dialog" aria-labelledby="myModalStatus"
aria-hidden="true" >
<form action="/editsettings/add_status" method="POST">
    {{ csrf_field() }}
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header text-center" style="background-color:#00bcd4;">
      <h4 class="modal-title w-100 font-weight-bold" style="color:white">Add New Status</h4>
     
    </div>
    <br>
    <div class="col-md-12 ">
        <div class="form-group">
          <label for="sentence_name" class="bmd-label-floating text-success ">New Status</label>
          <input type="text" name="status_name" class="form-control" required>
        </div>
      </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
            <button type="submit" class="btn btn-primary" value="submit" name="status_submit">Save</button>
          </div>
    </div>
    
  </div>
</form>
</div>

<!-- Modal For Test  -->

<div class="modal fade " id="abc" tabindex="-1" role="dialog" aria-labelledby="myModalStatus"
aria-hidden="true" >
<form action="appeals/add_status" method="POST">
    {{ csrf_field() }}
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content ">
    <div class="modal-header text-center" style="background-color:#00bcd4;">
      <h4 class="modal-title w-100 font-weight-bold" style="color:white">Appeal Status</h4>
     
    </div>
    <br>
    <div class="row"> 
        <span class="col-md-5 offset-sm-1 border border-primary"><legend>Application Details</legend><br>
        <div class="col-md-10">
            <div class="form-group">
              <label class="label text-success">Prisoner's No :</label>
              <span> test text .. </span>
            </div>
          </div>
          <div class="col-md-10">
              <div class="form-group">
                <label class="label text-success">Prisoner's Name :</label>
                <span> test text .. </span>
              </div>
            </div>
            <div class="col-md-10">
                <div class="form-group">
                  <label class="label text-success">Gender :</label>
                  <span> test text .. </span>
                </div>
              </div>
              <div class="col-md-10">
                  <div class="form-group">
                    <label class="label text-success">Prison Name :</label>
                    <span> test text .. </span>
                  </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                      <label class="label text-success">Sentencing Court :</label>
                      <span > test text .. </span>
                    </div>
                  </div>
                  <div class="col-md-10">
                      <div class="form-group">
                        <label class="label text-success">Offence Type :</label>
                        <span> test text .. </span>
                      </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                          <label class="label text-success">Sentence Type :</label>
                          <span> test text .. </span>
                        </div>
                      </div>
                      <div class="col-md-10">
                          <div class="form-group">
                            <label class="label text-success">Appealed Court :</label>
                            <span> test text .. </span>
                          </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                              <label class="label text-success">Case NO :</label>
                              <span> test text .. </span>
                            </div>
                          </div>
                          <div class="col-md-10">
                              <div class="form-group">
                                <label class="label text-success">Date of Appeal :</label>
                                <span> test text .. </span>
                              </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                  <label class="label text-success">Documents Name :</label>
                                  <span> test text .. </span>
                                </div>
                              </div>
                              <div class="col-md-10">
                                  <div class="form-group">
                                    <label class="label text-success">Remarks :</label>
                                    <span> test text .. </span>
                                  </div>
                                </div>
        </span>
          <span class="col-md-5  border border-primary"><legend>Application Progress</legend><br>
          <div class="col-md-12">
                <div class="form-group">
                    
                       <!-- Stepers Wrapper -->
                      
                       <div class="bs-vertical-wizard">
                          <ul>
                              <li class="complete">
                                  <a href="#">Application Received<i class="ico fa fa-check ico-green"></i>
                                      <span class="desc"><?php echo date("Y-m-d");?></span>
                                  </a>
                              </li>

                              <li class="complete prev-step">
                                  <a href="#">Application Marked as Complete <i class="ico fa fa-check ico-green"></i>
                                      <span class="desc"><?php echo date("Y-m-d");?></span>
                                  </a>
                              </li>
                              <li class="current">
                                  <a href="#">Case Docket Received 
                                      <span class="desc">Nothing Found</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="#">SC LAC Laywer Assigned
                                      <span class="desc">Nothing Found</span>
                                  </a>
                              </li>
                              <li class="locked">
                                  <a href="#">Upcoming Hearing Date <i class="ico fa fa-lock ico-muted"></i>
                                      <span class="desc">Nothing Found</span>
                                  </a>
                              </li>
                              <li class="locked">
                                  <a href="#">Results <i class="ico fa fa-lock ico-muted"></i>
                                      <span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, cumque.</span>
                                  </a>
                              </li>
                          </ul>
                      </div>
          <!-- /.Stepers Wrapper -->
                        
                </div>
              </div>
            
            </span>
            </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Okay!</button>
          </div>
    </div>
    
  </div>
</form>
</div>


//

<!--Deatils Modal Start -->

<div class="modal fade " id="abc_{{$appeal_stat->id}}" tabindex="-1"
    role="dialog" aria-labelledby="myModalStatus" aria-hidden="true">
    <?php 
                $applId = $appeal_stat->id;
                $url = "appeals/update/".$applId; 
                $dd = DB::select('SELECT doctype.docname, documents.filename
                                        FROM newappeals na
                                        
                                            INNER JOIN documents ON na.id = documents.appealid
                                            INNER JOIN doctype ON doctype.id = documents.doctypeid
                                        
                                            WHERE na.id="'.$applId.'"');
                                        // print_r($ddd);
                                        
                $appStatus = DB::select('SELECT status.status_name, appealstatus.statusid
                                        FROM newappeals na
                                                                                                
                                        INNER JOIN appealstatus ON na.id = appealstatus.newappeals_id
                                        INNER JOIN status ON appealstatus.statusid = status.id

                                        WHERE na.id="'.$applId.'"');

                // Custom Query for Displaying Status  
                $apStatus = DB::select('SELECT S.status_name, IFNULL((SELECT statusid FROM appealstatus WHERE statusid=S.id AND newappeals_id="'.$applId.'"),0) AS statusid
                    FROM status AS S');
                // Custom Query for Max StatusID Status
                $laststate = DB::Select ('SELECT max(statusid) AS laststate FROM appealstatus WHERE newappeals_id = "'.$applId.'"');

  ?>

    <form action="appeals/add_status" method="POST">
        {{ csrf_field() }}
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header text-center" style="background-color:#00bcd4;">
                    <h4 class="modal-title w-100 font-weight-bold"
                        style="color:white">Appeal Status</h4>

                </div>
                <br>
                <div class="row">
                    <span class="col-md-5 offset-sm-1 border border-primary">
                        <legend>Application Details</legend><br>
                        <!-- Material input -->
                        <div class="md-form form-group mt-2">
                            <input type="text" class="form-control"
                                id="" value="{{$appeal_stat->id}}"
                                disabled>
                            <label class="label text-success font-weight-bold"
                                for="">Appeal ID</label>
                        </div>
                        <div class="md-form form-group mt-2">
                            <input type="text" class="form-control"
                                id="" value="{{$appeal_stat->prison_name}}"
                                disabled>
                            <label class="label text-success font-weight-bold"
                                for="">Prison Name</label>
                        </div>
                        <div class="md-form form-group mt-2">
                            <input type="text" class="form-control"
                                id="" value="{{$appeal_stat->court_name}}"
                                disabled>
                            <label class="label text-success font-weight-bold"
                                for="">Sentencing Court</label>
                        </div>
                        <div class="md-form form-group mt-2">
                            <input type="text" class="form-control"
                                id="" value="{{$appeal_stat->prisoner_name}}"
                                disabled>
                            <label class="label text-success font-weight-bold"
                                for="">Prisoner Name</label>
                        </div>
                        <div class="md-form form-group mt-2">
                            <input type="text" class="form-control"
                                id="" value="{{$appeal_stat->offence_name}}"
                                disabled>
                            <label class="label text-success font-weight-bold"
                                for="">Offence Name</label>
                        </div>
                        <div class="md-form form-group mt-2">
                            <input type="text" class="form-control"
                                id="" value="{{$appeal_stat->case_no}}"
                                disabled>
                            <label class="label text-success font-weight-bold"
                                for="">Case NO</label>
                        </div>
                        <div class="md-form form-group mt-2">
                            <label class="label text-success font-weight-bold"
                                for="">Attachemnts:</label><br>
                            @foreach($dd as $d)
                            @if($d->docname == 'BJ_Form')
                            <label class="md-form form-group">BJ
                                Form: </label><a href="{{ asset('/files/') }}/{{$d->filename}}"
                                target="_blank"> <span class="label label-default">{{$d->filename}}</span></a><br>
                            @endif
                            @if($d->docname == 'APP_Form')
                            <label class="md-form form-group">Application
                                Form: </label><a href="{{ asset('/files/') }}/{{$d->filename}}"
                                target="_blank"> <span class="label label-default ">{{$d->filename}}</span></a>
                            @endif
                            @if($d->docname == 'ACK Letter')
                            <label class="md-form form-group">Letter
                                From Prison:</label><a href="{{ asset('/files/') }}/{{$d->filename}}"
                                target="_blank"> <span class="label label-default ">{{$d->filename}}</span></a>
                            @endif
                            @endforeach
                        </div>
                    </span>
                    <span class="col-md-5  border border-primary">
                        <legend>Application Progress</legend><br>
                        <div class="col-md-12">
                            <div class="form-group">

                                <!-- Stepers Wrapper -->

                                <div class="bs-vertical-wizard">

                                    <ul>

                                        @foreach($status_name as $pp)

                                        @php $item = null; @endphp

                                        @foreach($apStatus as $struct)
                                        @if ($pp->id == $struct->statusid)
                                        @php
                                        $item = $struct;
                                        break;
                                        @endphp

                                        @endif
                                        @endforeach

                                        @if($item)

                                        <li class="complete">
                                            <a href="#">{{
                                                $pp->status_name }}
                                                <i class="ico fa fa-check ico-green"></i>
                                                <span class="desc">
                                                    <?php echo date("Y-m-d");?>
                                                </span>
                                            </a>
                                        </li>
                                        @else

                                        <li>
                                            <a href="#">{{
                                                $pp->status_name }}
                                                <span class="desc">Nothing
                                                    Found</span>
                                            </a>
                                        </li>
                                        @endif

                                        @endforeach



                                    </ul>

                                </div>

                                <!-- /.Stepers Wrapper -->

                            </div>
                        </div>

                    </span>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-info"
                        data-dismiss="modal">Okay!</button>
                </div>
            </div>

        </div>
    </form>
</div>
