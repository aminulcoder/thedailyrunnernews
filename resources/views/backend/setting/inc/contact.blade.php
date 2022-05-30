<div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
    <div class="card-body">
        {{-- <form action="{{ route('admin.setting.store') }}" method="POST"> --}}
            {{-- @csrf --}}
            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth me-1"></i> Contat information
               </h5>
            <div class="row">

                <div class="col-md-12">
                    <div class="mb-2">
                        <label for="social-tw" class="form-label">Mobile</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="mdi mdi-cellphone-basic"></i></span>
                            <input name="mobile_no" type="text" class="form-control" id="social-tw"
                                placeholder="Mobile Number" value="{{$site->mobile_no ?? ''}}">
                        </div>
                    </div>
                </div> <!-- end col -->
                <!-- end col -->
                <div class="col-md-12">
                    <div class="mb-2">
                        <label for="social-tw" class="form-label">Address</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="mdi mdi-map"></i></span>
                            <input name="address" type="text" class="form-control" id="social-tw"
                                placeholder="Address" value="{{$site->address ?? ''}}">
                        </div>
                    </div>
                </div> <!-- end col -->
                <div class="col-md-12">
                    <div class="mb-2">
                        <label for="social-tw" class="form-label">Working Day</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                            <input name="working_day" type="text" class="form-control" id="social-tw"
                                placeholder="Working Days" value="{{$site->working_day ?? ''}}">
                        </div>
                    </div>
                </div> <!-- end col -->
                <div class="col-md-12">
                    <div class="mb-2">
                        <label for="social-tw" class="form-label">Office Time</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                            <input name="working_time" name="working_time" type="text" class="form-control"
                                id="social-tw" placeholder="Office Time" value="{{$site->working_time ?? ''}}">
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


            <div class="text-start">
                <button type="submit" onclick="return confirm('Are you sure update informarion ?')"
                    class="btn btn-primary waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save
                </button>
            </div>
        {{-- </form> --}}
    </div>
</div>
