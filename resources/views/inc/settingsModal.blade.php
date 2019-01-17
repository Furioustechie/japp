<!--Modal For Edit Court Name -->
<div class="modal fade" id="edit_court" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color:#00bcd4;">
                <h5 class="modal-title w-100 font-weight-bold" style="color:white" id="myModalLabel">Modify Courts Name</h5>
            </div>


            <div class="modal-body">
                <form data-toggle="validator" action="editsettings/update/" method="put">
                    <input type="hidden" name="id" class="edit-id">
                    <div class="form-group">
                        <label class="control-label" for="title">Name in English:</label>
                        <input type="text" name="name_en" class="form-control" data-error="Please enter title."
                            required />
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="title">Name in Bangla:</label>
                        <input type="text" name="name_bn" class="form-control" data-error="Please enter description."
                            required></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="court_rename_submit" data-dismiss="modal" class="btn btn-success submit-edit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Modal For Edit Prison Name -->
<div class="modal fade" id="edit_prisonName" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color:#00bcd4;">
                <h5 class="modal-title w-100 font-weight-bold" style="color:white" id="myModalLabel">Modify Courts Name</h5>
            </div>


            <div class="modal-body">
                <form data-toggle="validator" action="editsettings/update_prison_name/" method="put">
                    <input type="hidden" name="id" class="edit-id">
                    <div class="form-group">
                        <label class="control-label" for="title">Prison Name:</label>
                        <input type="text" name="rename_prison"  class="form-control" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="submit" name="rename_prison_submit" data-dismiss="modal" class="btn btn-success submit-prison">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
