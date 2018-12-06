<!-- Modal For Offence Name Entry -->

<div class="modal fade" id="modalOffenceForm" tabindex="-1" role="dialog" aria-labelledby="myModalOffence" aria-hidden="true" >
<form action="" method="POST" name="offenceForm">
    {{ csrf_field() }}
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header text-center" style="background-color:#00bcd4;">
      <h4 class="modal-title w-100 font-weight-bold" style="color:white">Add New Offence Name</h4>
      
    </div>
    <br>
    <div class="col-md-12 ">
        <div class="form-group">
          <label for="district_name" class="bmd-label-floating text-success ">Offence Name</label>
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
<form action="appeals/add_prisonname" method="POST">
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
<form action="appeals/modals" method="POST">
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
<form action="appeals/add_courtname" method="POST">
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
<form action="appeals/add_status" method="POST">
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

