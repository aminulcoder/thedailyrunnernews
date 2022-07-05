<div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
    <div class="card-body">
        {{-- <form action="{{ route('admin.setting.store') }}" method="POST"> --}}
        {{-- @csrf --}}
        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth me-1"></i> Contat information
        </h5>


        <form action="{{ route('admin.setting.mobileNoStore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row d-flex">
                <div class="col-md-11">
                    <div class="mb-2">
                        <label for="social-tw" class="form-label">Mobile</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="mdi mdi-cellphone-basic"></i></span>
                            <input name="mobile_no" type="text" class="form-control" id="social-tw"
                                placeholder="Mobile Number" value="{{ $mobile ?? '' }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="text-start">
                        <button type="submit" onclick="return confirm('Update Header Information ?');"
                            class="btn btn-primary waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i>
                            Save</button>
                    </div>
                </div>
            </div>
        </form>
        <form action="{{ route('admin.setting.addressStore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row d-flex">
                <div class="col-md-11">
                    <div class="mb-2">
                        <label for="social-tw" class="form-label">Address</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="mdi mdi-map"></i></span>
                            <input name="address" type="text" class="form-control" id="social-tw" placeholder="Address"
                                value="{{ $address ?? '' }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="text-start">
                        <button type="submit" onclick="return confirm('Update Header Information ?');"
                            class="btn btn-primary waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i>
                            Save</button>
                    </div>
                </div>
            </div>
        </form>
        <form action="{{ route('admin.setting.workingdayStore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row d-flex">
                <div class="col-md-11">
                    <div class="mb-2">
                        <label for="social-tw" class="form-label">Working Day</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                            <input name="working_day" type="text" class="form-control" id="social-tw"
                                placeholder="Working Days" value="{{ $working_day ?? '' }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="text-start">
                        <button type="submit" onclick="return confirm('Update Header Information ?');"
                            class="btn btn-primary waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i>
                            Save</button>
                    </div>
                </div>
            </div>
        </form>
        <form action="{{ route('admin.setting.workingtimeStore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row d-flex">
                <div class="col-md-11">
                    <div class="mb-2">
                        <label for="social-tw" class="form-label">Office Time</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                        <input name="working_time" name="working_time" type="text" class="form-control"
                            id="social-tw" placeholder="Office Time" value="{{ $working_time ?? '' }}">
                    </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="text-start">
                        <button type="submit" onclick="return confirm('Update Header Information ?');"
                            class="btn btn-primary waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i>
                            Save</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
