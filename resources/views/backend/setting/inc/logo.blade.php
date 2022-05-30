<div class="tab-pane show" id="v-pills-logo" role="tabpanel" aria-labelledby="v-pills-logo-tab">
    <div class="card-body pt-1">
        {{-- @csrf --}}
        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth me-1"></i>
            logo Information</h5>
        <div class="row">
            <div class="col-md-12">
                <div class="mb-2">
                    <label for="site_logo" class="form-label">Site logo</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="mdi mdi-card-text-outline"></i></span>
                        <input name="logo" type="file" class="form-control" id="site_logo" placeholder="Site logo"
                            value="{{ $site->logo ?? '' }}">
                    </div>
                    @isset($site->logo)
                    <img class="img-thumbnail" style="width: 150px; height:100px; padding:5px" src="{{asset('/storage/logo/'.$site->logo  )}}" alt="sdfsdf">
                    @endisset
                </div>
            </div>
            <div class="text-start">
                <button type="submit" onclick="return confirm('Update logo Information ?');"
                    class="btn btn-primary waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i>
                    Save</button>
            </div>
            {{-- </form> --}}
        </div>
    </div>
