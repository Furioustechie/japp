<!--Modal For Edit Court Name -->
<div class="modal fade" id="edit_court" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color:#00bcd4;">
                <h5 class="modal-title w-100 font-weight-bold" style="color:white" id="myModalLabel">Modify Courts Name
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
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
                        <button type="submit" name="court_rename_submit" data-dismiss="modal"
                            class="btn btn-success submit-edit">Submit</button>
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
                <h5 class="modal-title w-100 font-weight-bold" style="color:white" id="myModalLabel">Modify Courts Name
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
            </div>


            <div class="modal-body">
                <form data-toggle="validator" action="editsettings/update_prison_name/" method="put">
                    <input type="hidden" name="id" class="edit-id">
                    <div class="form-group">
                        <label class="control-label" for="title">Prison Name:</label>
                        <input type="text" name="rename_prison" class="form-control" required>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" name="rename_prison_submit" data-dismiss="modal"
                            class="btn btn-success submit-prison">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Modal For Edit Sentence Name -->
<div class="modal fade" id="edit_sentenceName" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color:#00bcd4;">
                <h5 class="modal-title w-100 font-weight-bold" style="color:white" id="myModalLabel">Modify Sentence
                    Name</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
            </div>


            <div class="modal-body">
                <form data-toggle="validator" action="editsettings/update_sentence_name/" method="put">
                    <input type="hidden" name="id" class="edit-id">
                    <div class="form-group">
                        <label class="control-label" for="title">Sentence Name:</label>
                        <input type="text" name="rename_sentence" class="form-control" required>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" name="rename_sentence_submit" data-dismiss="modal"
                            class="btn btn-success submit-sentence">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Modal For Edit Offence Name -->
<div class="modal fade" id="edit_offenceName" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color:#00bcd4;">
                <h5 class="modal-title w-100 font-weight-bold" style="color:white" id="myModalLabel">Modify Offence
                    Name</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
            </div>


            <div class="modal-body">
                <form data-toggle="validator" action="editsettings/update_offence_name/" method="put">
                    <input type="hidden" name="id" class="edit-id">
                    <div class="form-group">
                        <label class="control-label" for="title">Offence Name:</label>
                        <input type="text" name="rename_offence" class="form-control" required>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" name="rename_offence_submit" data-dismiss="modal"
                            class="btn btn-success submit-offence">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Modal For Edit Status Name -->
<div class="modal fade" id="edit_statusName" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color:#00bcd4;">
                <h5 class="modal-title w-100 font-weight-bold" style="color:white" id="myModalLabel">Modify Status Name
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
            </div>


            <div class="modal-body">
                <form data-toggle="validator" action="editsettings/update_status_name/" method="put">
                    <input type="hidden" name="id" class="edit-id">
                    <div class="form-group">
                        <label class="control-label" for="title">Status Name:</label>
                        <input type="text" name="rename_status" class="form-control" required>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" name="rename_status_submit" data-dismiss="modal"
                            class="btn btn-success submit-status">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Modal For Account Information -->
<div class="modal fade" id="edit_accountName" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color:#00bcd4;">
                <h5 class="modal-title w-100 font-weight-bold" style="color:white" id="myModalLabel">Modify User
                    Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
            </div>


            <div class="modal-body">
                <form data-toggle="validator" action="editsettings/update_accountName/" method="put">
                    <input type="hidden" name="id" class="edit-id">
                    <div class="form-group">
                        <label class="control-label" for="title">User Name:</label>
                        <input type="text" name="rename_name" class="form-control" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="title">e-Mail:</label>
                        <input type="email" name="rename_emailid" class="form-control" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="title">Phone:</label>
                        <input type="number" name="rename_phone" class="form-control" min="0" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    {{-- <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="checked">
                        <label class="custom-control-label" for="defaultUnchecked" id="checkbox_label">User Account
                            Activated</label>
                    </div> --}}
                    <div class="modal-footer">
                        <button type="submit" name="rename_uaccount_submit" data-dismiss="modal"
                            class="btn btn-success submit-accountName">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Modal For Account Status -->
<div class="modal fade" id="edit_accountStatus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color:#00bcd4;">
                <h5 class="modal-title w-100 font-weight-bold" style="color:white" id="myModalLabel">Modify User
                    Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
            </div>


            <div class="modal-body">
                <form data-toggle="validator" action="editsettings/update_accountStatus/" method="put">
                    <input type="hidden" name="id" class="edit-id">
                    
                    <div class="form-group">
                        <div class="row">
                            
                            <div class="custom-control custom-checkbox">
                                    <input type="checkbox"  name="check"> Activate/DeActivate User Account
                                  </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="rename_uaccount_StatusSubmit" data-dismiss="modal"
                            class="btn btn-success submit-accountStatus">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Modal For Add  User Information -->
<div class="modal fade" id="add_accountName" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color:#00bcd4;">
                <h5 class="modal-title w-100 font-weight-bold" style="color:white" id="myModalLabel">Add New User
                    Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
            </div>


            <div class="modal-body">
                <form method="POST" action="editsettings/add_userAccount">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-12 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-12">
                            <input id="name" type="text"
                                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="userFromPrison"
                            class="col-md-12 col-form-label text-md-right">{{ __('Prison Name') }}</label>
                        <select class="browser-default custom-select" name="prison_Name">
                            <option value="" disabled selected>Please Select ..</option>
                            @foreach ($prisonName as $pname)
                            <option value="{{ $pname->id }}">{{ $pname->name }}</option>
                            @endforeach

                        </select>

                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-md-12 col-form-label text-md-right">{{ __('Phone') }}</label>

                        <div class="col-md-12">
                            <input id="phone" type="number" class="form-control" name="phone" value="{{ old('phone') }}"
                                min="0" required>


                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="usertype"
                            class="col-md-12 col-form-label text-md-right">{{ __('User Type') }}</label>
                        <select class="browser-default custom-select" name="user_type">
                            <option value="" disabled selected>Please Select ..</option>
                            <option value="user">User Group</option>
                            <option value="admin" disabled>Admin</option>

                        </select>

                    </div>
                    <div class="form-group row">
                        <label for="email"
                            class="col-md-12 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control"
                                data-error="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password"
                            class="col-md-12 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-12">
                            <input id="password" type="password"
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                required>

                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-12 col-form-label text-md-right">{{ __('Confirm
                            Password') }}</label>

                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal For Sentence Name Entry -->
<div class="modal fade" id="modalSentenceForm" tabindex="-1" role="dialog" aria-labelledby="myModalSentence"
    aria-hidden="true">
    <form action="/editsettings/add_sentence" method="POST">
        {{ csrf_field() }}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center" style="background-color:#00bcd4;">
                    <h4 class="modal-title w-100 font-weight-bold" style="color:white">Add New Sentence Name</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
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
    aria-hidden="true">
    <form action="/editsettings/add_courtname" method="POST">
        {{ csrf_field() }}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center" style="background-color:#00bcd4;">
                    <h4 class="modal-title w-100 font-weight-bold" style="color:white">Add New Court Name</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
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
    aria-hidden="true">
    <form action="/editsettings/add_status" method="POST">
        {{ csrf_field() }}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center" style="background-color:#00bcd4;">
                    <h4 class="modal-title w-100 font-weight-bold" style="color:white">Add New Status</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
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

<!-- Modal For Offence Name Entry -->

<div class="modal fade" id="modalOffenceForm" tabindex="-1" role="dialog" aria-labelledby="myModalOffence"
    aria-hidden="true">
    <form action="/editsettings/add_offence" method="POST" name="offenceForm">
        {{ csrf_field() }}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center" style="background-color:#00bcd4;">
                    <h4 class="modal-title w-100 font-weight-bold" style="color:white">Add New Offence Name</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
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
    aria-hidden="true">
    <form action="/editsettings/add_prisonname" method="POST">
        {{ csrf_field() }}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center" style="background-color:#00bcd4;">
                    <h4 class="modal-title w-100 font-weight-bold" style="color:white">Add New Prison Name</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
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
