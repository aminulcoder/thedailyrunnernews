@extends('backend.layout.app')
@section('title')
    create News
@endsection
@section('content')
    <div class="container-fluid">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box page-title-box-alt">
                            <h4 class="page-title">Create News</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Heshelghor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                                    <li class="breadcrumb-item active">News List</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <a href="{{ route('news.index') }}" class="btn btn-success mb-2"><i
                                                class="mdi mdi-format-list-bulleted me-1"></i> All News</a>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-md-12">

                                        <form method="POST" action="{{ route('news.update', $news->id) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" class="form-control" id="title"
                                                    value="{{ $news->title }}" spellcheck="false" data-ms-editor="true">

                                                @error('title')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            {{-- <div id="summernote"></div> --}}
                                            <div class="form-group mt-2">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="content" id="summernote">{!! $news->content !!}</textarea>
                                                </div>
                                            </div>
                                            <div class="card mt-2">
                                                <div class="card-header">
                                                    <h4>blog</h4>
                                                </div>
                                                <div class="card-body">

                                                    <div class="mb-2 row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">
                                                            Meta Title</label>
                                                        <div class="col-md-10">
                                                            <input name="meta_title" type="text"
                                                                class="form-control  @error('meta_title') is-invalid @enderror "
                                                                value="{{ $news->meta_title }}">

                                                            <div class="text-danger">
                                                            </div>
                                                        </div>
                                                        @error('meta_title')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">
                                                            Thumbnail</label>
                                                        <div class="col-md-10">
                                                            <input name="thumbnail" type="file"
                                                                class="form-control  @error('thumbnail') is-invalid @enderror "
                                                                value="{{ $news->thumbnail }}">

                                                            <div class="text-danger">
                                                                <img src="{{ asset('storage/images/' . $news->thumbnail) }}"
                                                                    width="100px" height="100px" class="img-thumbnail"
                                                                    alt="{{ $news->thumbnail }}">
                                                            </div>
                                                        </div>
                                                        @error('thumbnail')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">
                                                            video_url</label>
                                                        <div class="col-md-10">
                                                            <input name="video_url" type="text"
                                                                class="form-control  @error('video_url') is-invalid @enderror "
                                                                value="{{ $news->video_url }}">
                                                            <div class="text-danger">
                                                            </div>
                                                        </div>
                                                        @error('video_url')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-2 row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">
                                                            tags</label>
                                                        <select name="tags[]"
                                                            class="form-control select-multiple-tokenization"
                                                            multiple="multiple" data-fouc>
                                                            @if ($news->tags && is_array(json_decode($news->tags)))
                                                                @foreach (json_decode($news->tags) as $keyword)
                                                                    <option value="{{ $keyword }}" selected>
                                                                        {{ $keyword }}
                                                                    </option>
                                                                @endforeach

                                                                @foreach ($tags as $tag)
                                                                    <option value="{{ $tag->name }}"
                                                                        @if ($tag->name == $news->tags) selected @endif>
                                                                        {{ $tag->name }}</option>
                                                                @endforeach

                                                            @endif
                                                        </select>
                                                        @error('tags')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>



                                                    <div class="form-group my-2">
                                                        <label>blog_meta_description<span
                                                                class="text-danger">*</span></label>
                                                        <textarea name="blog_meta_description" id="summernote" type="text"
                                                            class="form-control @error('blog_meta_description') is-invalid @enderror"
                                                            rows="5"
                                                            placeholder="Enter your blog meta description details">{{ $news->blog_meta_description }}</textarea>
                                                        @error('blog_meta_description')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mt-2">
                                                <div class="card-header">
                                                    <h4>Categories </h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="mb-2 row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">
                                                            Category</label>
                                                        <div class="col-md-10">
                                                            <select
                                                                class="form-select @error('category_id') is-invalid @enderror"
                                                                name="category_id">
                                                                <option selected value="">Select Category</option>
                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}"
                                                                        @if ($category->id == $news->category_id) selected @endif>
                                                                        {{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        @error('category_id')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">
                                                            Sub Category</label>
                                                        <div class="col-md-10">
                                                            <select
                                                                class="form-select @error('sub_category_id') is-invalid @enderror"
                                                                name="sub_category_id">
                                                                <option selected value="">Select Sub Category</option>
                                                                @foreach ($subcategories as $subcategory)
                                                                    <option value="{{ $subcategory->id }}"
                                                                        @if ($subcategory->id == $news->sub_category_id) selected @endif>
                                                                        {{ $subcategory->name }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                        @error('sub_category_id')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="card mt-2">
                                                <div class="card-header">
                                                    <h4>Location </h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="mb-2 row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">
                                                            Divission</label>
                                                        <div class="col-md-10">
                                                            <select id="division_id"
                                                                class="form-select @error('division_id') is-invalid @enderror"
                                                                name="division_id">
                                                                <option selected value="">Select Divission</option>
                                                                @foreach ($divissions as $divission)
                                                                    <option value="{{ $divission->id }}"
                                                                        @if ($divission->id == $news->division_id) selected @endif>
                                                                        {{ $divission->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        @error('division_id')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">
                                                            District</label>
                                                        <div class="col-md-10">
                                                            <select id="district_id"
                                                                class="form-select @error('district_id') is-invalid @enderror"
                                                                name="district_id">
                                                                <option selected value="">Select District</option>
                                                                @foreach ($districts as $district)
                                                                    <option value="{{ $district->id }}"
                                                                        @if ($district->id == $news->district_id) selected @endif>
                                                                        {{ $district->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        @error('district_id')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">
                                                            Upzilla</label>
                                                        <div class="col-md-10">
                                                            <select
                                                                class="form-select @error('upazila_id') is-invalid @enderror"
                                                                name="upazila_id">
                                                                <option selected value="">Select District</option>

                                                                @foreach ($upazilas as $upazila)
                                                                    <option value="{{ $upazila->id }}"
                                                                        @if ($upazila->id == $news->upazila_id) selected @endif>
                                                                        {{ $upazila->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        @error('upazila_id')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror

                                                    </div>


                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Add News</button>
                            </form>

                        </div><!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
            </div>
        </div>

    </div>
    <!-- end row -->


    </div> <!-- container -->

    </div> <!-- content -->

    </div>
@endsection
@push('style')
    <style>
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            list-style: none;
        }

    </style>

    <link href="{{ asset('backend/assets/css/material/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/material/multi-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/material/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/material/switchery.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('script')
    <script src="{{ asset('backend/assets/js/pages/selectize.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/pages/select2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/pages/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('backend/assets/js/pages/switchery.min.js') }}"></script>

    <script>
        var division = $('select[name="division_id"]');
        var district = $('select[name="district_id"]');
        var upazila = $('select[name="upazila_id"]');

        $(document).on('change', 'select[name="division_id"]', function() {
            let divisionid = $(this).val()
            console.log(divisionid);

            $.ajax({
                url: `/district-from-division/${divisionid}`,
                type: 'GET',
                success: function(data) {
                    district.empty()
                    district.append(data)
                },
            });

        }); // change event end

        $(document).on('change', 'select[name="district_id"]', function() {
            let districtid = $(this).val()
            // console.log(districtid);

            $.ajax({
                url: `/upazila-from-district/${districtid}`,
                type: 'GET',
                success: function(data) {
                    upazila.empty()
                    upazila.append(data)
                },
            });

        }); // change event end
    </script>

    <script>
        var category = $('select[name="category_id"]');
        var subcategory = $('select[name="sub_category_id"]');


        $(document).on('change', 'select[name="category_id"]', function() {
            let subcategoryid = $(this).val()
            console.log(subcategoryid);

            $.ajax({
                url: `/category-to-subcategory/${subcategoryid}`,
                type: 'GET',
                success: function(data) {
                    subcategory.empty()
                    subcategory.append(data)
                },
            });

        }); // change event end
    </script>
@endpush
