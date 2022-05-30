@extends('backend.layout.app')
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
                                        <a href="#" class="btn btn-success mb-2"><i
                                                class="mdi mdi-format-list-bulleted me-1"></i> All News</a>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-md-12">

                                        <form method="POST" action="{{ route('news.update',$news->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text"  name="title"  class="form-control"id="title"
                                                    value="{{$news->title}}" spellcheck="false" data-ms-editor="true">
                                                @error('title')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>


                                            <div class="form-group mt-2">
                                                <label>Content<span class="text-danger">*</span></label>
                                                <textarea id="snow-editor" name="content" id="summernote" type="text" class="form-control @error('content') is-invalid @enderror"
                                                    rows="10"
                                                   >{!!$news->content!!}</textarea>
                                                @error('content')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="card mt-2">
                                                <div class="card-header">
                                                    <h4>blog</h4>
                                                </div>
                                                <div class="card-body">

                                                    <div class="mb-2 row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">
                                                            Meta Tags</label>
                                                        <div class="col-md-10">
                                                            <input name="meta_title" type="text"
                                                                class="form-control  @error('meta_title') is-invalid @enderror "
                                                                value="{{$news->meta_title}}">
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
                                                                value="{{$news->thumbnail}}">
                                                                <img src="{{ asset('storage/images/' . $news->thumbnail) }}"
                                                                width="100px" height="100px" class="img-thumbnail"  alt="{{ $news->thumbnail }}">
                                                            <div class="text-danger">
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
                                                                value="{{$news->video_url}}">
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
                                                        <div class="col-md-10">
                                                            <input name="tags" type="text"
                                                                class="form-control  @error('tags') is-invalid @enderror "
                                                                value="{{$news->tags}}">
                                                            <div class="text-danger">
                                                            </div>
                                                        </div>
                                                        @error('tags')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group my-2">
                                                        <label>blog_meta_description<span
                                                                class="text-danger">*</span></label>
                                                        <textarea id="bubble-editor" name="blog_meta_description" type="text"
                                                            class="form-control @error('blog_meta_description') is-invalid @enderror"
                                                            rows="5">{{$news->blog_meta_description}}</textarea>
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
                                                                    <option value="{{ $category->id }}"@if ($category->id == $news->category_id) selected @endif >
                                                                        {{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    @error('category_id')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
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
                                                            <select
                                                                class="form-select @error('division_id') is-invalid @enderror"
                                                                name="division_id">
                                                                <option selected value="">Select Divission</option>
                                                                @foreach ($divissions as $divission)
                                                                    <option value="{{ $divission->id }}" @if ($divission->id == $news->division_id) selected @endif>
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
                                                            <select
                                                                class="form-select @error('district_id') is-invalid @enderror"
                                                                name="district_id">
                                                                <option selected value="">Select District</option>
                                                                @foreach ($districts as $district)
                                                                    <option value="{{ $district->id }}" @if ($district->id == $news->district_id) selected @endif>
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
                                                                class="form-select @error('upzilla_id') is-invalid @enderror"
                                                                name="upzilla_id">
                                                                <option selected value="">Select District</option>
                                                                @foreach ($upzillas as $upzilla)
                                                                    <option value="{{ $upzilla->id }}"  @if ($upzilla->id == $news->upzilla_id) selected @endif>
                                                                        {{ $upzilla->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        @error('upzilla_id')
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

                            <button type="submit" class="btn btn-success">Update News</button>
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
@endpush
@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.bubble.css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.min.js"></script>
@endpush
