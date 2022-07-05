<div class="tab-pane show" id="v-pills-logo" role="tabpanel" aria-labelledby="v-pills-logo-tab">
    <div class="card-body pt-1">

        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth me-1"></i>
            logo Information</h5>


            <form action="{{ route('admin.setting.logoStore') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row d-flex">
                    <div class="col-md-11">
                        <div class="mb-2">
                            <label for="site_logo" class="form-label">Site logo</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="mdi mdi-card-text-outline"></i></span>
                                <input name="logo" type="file" class="form-control" id="site_logo" placeholder="Site logo"
                                    value="{{ $logo ?? '' }}">
                            </div>
                            @isset($logo)
                            <img class="img-thumbnail" style="width: 150px; height:100px; padding:5px" src="{{asset('/storage/images/'. $logo  )}}" alt="sdfsdf">
                            @endisset
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
