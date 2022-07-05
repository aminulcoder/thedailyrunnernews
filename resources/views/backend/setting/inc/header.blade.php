            <div class="tab-pane active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="card-body pt-1 ">
                    {{-- <form action="{{ route('admin.setting.store') }}" method="POST"> --}}
                    {{-- @csrf --}}
                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth me-1"></i>
                        Header Information</h5>

                    <form action="{{ route('admin.setting.storetitle') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row d-flex">
                            <div class="col-md-11">
                                <div class="mb-2">
                                    <label for="site_title" class="form-label">Site Title</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="mdi mdi-card-text-outline"></i></span>
                                        <input name="site_title" type="text" class="form-control" id="site_title"
                                            placeholder="Site Title" value="{{ $sitetitle ?? '' }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-1">
                                <div class="text-start">
                                    <button type="submit" onclick="return confirm('Update Header Information ?');"
                                        class="btn btn-primary waves-effect waves-light mt-2"><i
                                            class="mdi mdi-content-save"></i>
                                        Save</button>
                                </div>
                            </div>

                        </div>

                    </form>
                    <form action="{{ route('admin.setting.siteEmailstore') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row d-flex">
                            <div class="col-md-11">
                                <div class="mb-2">
                                    <label for="email-fb" class="form-label">Support Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="mdi mdi-email"></i></span>
                                        <input name="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" id="email-fb"
                                            placeholder="info Email " value="{{ $siteEmail ?? '' }}">
                                        {{-- <x-error name='email' /> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-1">
                                <div class="text-start">
                                    <button type="submit" onclick="return confirm('Update Header Information ?');"
                                        class="btn btn-primary waves-effect waves-light mt-2"><i
                                            class="mdi mdi-content-save"></i>
                                        Save</button>
                                </div>
                            </div>

                        </div>
                    </form>
                    <form action="{{ route('admin.setting.siteTelephonenoStore') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row d-flex">
                            <div class="col-md-11">
                                <div class="mb-2">
                                    <label for="telephone_no" class="form-label">Customer Care</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="mdi mdi-phone"></i></span>
                                        <input name="telephone_no" type="text" class="form-control" id="telephone_no"
                                            placeholder="Telephone Number" value="{{ $siteTelephone ?? '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="text-start">
                                    <button type="submit" onclick="return confirm('Update Header Information ?');"
                                        class="btn btn-primary waves-effect waves-light mt-2"><i
                                            class="mdi mdi-content-save"></i>
                                        Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
