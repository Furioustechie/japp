@extends('layouts.app')

@section('content')

<br/>
<div class="card border-info mb-3 offset-sm-2" style="max-width: 70%;">
        <div class="card-header">Input Data Here</div>
        <div class="card-body text-info">
            
                <form >
                        <div class="form-row">
                          <div class="col-md-12 mb-3">
                            <label for="validationDefault01">First name</label>
                            <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Mark" required>
                          </div>
                          <div class="col-md-12 mb-3">
                            <label for="validationDefault02">Last name</label>
                            <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
                          </div>
                          <div class="col-md-12 mb-3">
                            <label for="validationDefaultUsername">Username</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend2">@</span>
                              </div>
                              <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col-md-12 mb-3">
                            <label for="validationDefault03">City</label>
                            <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
                          </div>
                          <div class="col-md-12 mb-3">
                            <label for="validationDefault04">State</label>
                            <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
                          </div>
                          <div class="col-md-12 mb-3">
                            <label for="validationDefault05">Zip</label>
                            <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
                          </div>
                        </div>

                        <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                              </div>
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                              Agree to terms and conditions
                            </label>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                      </form>

        </div>
      </div>
    
@endsection