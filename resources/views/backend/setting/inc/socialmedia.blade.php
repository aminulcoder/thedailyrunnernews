<div class="tab-pane fade" id="v-pills-social-media" role="tabpanel" aria-labelledby="v-pills-social-media-tab">
    <div class="card-body pt-1">

        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth me-1"></i> Social
            Media Links</h5>


        <form action="{{ route('admin.setting.facebooklinkStore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row d-flex">
                <div class="col-md-11">
                    <div class="mb-2">
                        <label for="facebook_page_link" class="form-label">Facebook Profile</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                            <input name="facebook_link" type="text" class="form-control" id="facebook_page_link"
                                placeholder="Facebook Link" value="{{ $facebook ?? '' }}">
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
        <form action="{{ route('admin.setting.facebookpagelinkStore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row d-flex">
                <div class="col-md-11">
                    <div class="mb-2">
                        <label for="facebook_page_link" class="form-label">Facebook Page</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                            <input name="facebook_page_link" type="text" class="form-control" id="facebook_page_link"
                                placeholder="Facebook Page Link" value="{{ $facebook_page ?? '' }}">
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
        <form action="{{ route('admin.setting.facebookgrouplinkStore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row d-flex">
                <div class="col-md-11">
                    <div class="mb-2">
                        <label for="facebook_group_link" class="form-label">Facebook
                            Group</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                            <input name="facebook_group_link" type="text" class="form-control" id="facebook_group_link"
                                placeholder="Facebook Group Link" value="{{ $facebook_group ?? '' }}">
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
        <form action="{{ route('admin.setting.twitterlinkStore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row d-flex">
                <div class="col-md-11">
                    <div class="mb-2">
                        <label for="twitter_link" class="form-label">Twitter</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                            <input name="twitter_link" type="text" class="form-control" id="twitter_link"
                                placeholder="Twitter Link" value="{{ $twitter ?? '' }}">
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
        <form action="{{ route('admin.setting.instagramlinkStore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row d-flex">
                <div class="col-md-11">
                    <div class="mb-2">
                        <label for="social-insta" class="form-label">Instagram</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                            <input name="instagram_link" type="text" class="form-control" id="social-insta"
                                placeholder="Instagram Link" value="{{ $instagram ?? '' }}">
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
        <form action="{{ route('admin.setting.linkedinlinkStore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row d-flex">
                <div class="col-md-11">
                    <div class="mb-2">
                        <label for="social-lin" class="form-label">Linkedin</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fab fa-linkedin"></i></span>

                            <input name="linkedin_link" type="text" class="form-control" id="social-lin"
                                placeholder="Linkedin Company Link" value="{{ $linkedin ?? '' }}">
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
        <form action="{{ route('admin.setting.youtubelinkStore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row d-flex">
                <div class="col-md-11">
                    <div class="mb-2">
                        <label for="social-gh" class="form-label">Youtube</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fab fa-youtube"></i></span>

                            <input name="youtube_link" type="text" class="form-control" id="social-gh"
                                placeholder="Youtube Channel Link" value="{{ $youtube ?? '' }}">
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
        <form action="{{ route('admin.setting.introvideolinkStore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row d-flex">
                <div class="col-md-11">
                    <div class="mb-2">
                        <label for="social-gh" class="form-label">Intro Video</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fab fa-youtube"></i></span>

                            <input name="intro_video_link" type="text" class="form-control" id="social-gh"
                                placeholder="Intro video link" value="{{ $intro ?? '' }}">
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
