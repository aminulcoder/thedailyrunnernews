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
                                                class="mdi mdi-format-list-bulleted me-1"></i> Edit Category</a>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-md-12">

                                        <form action="{{ route('category.update',$category->id) }}" method="POST"
                                            enctype="multipart/form-data" class="form-horizontal" role="form">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label>Category name<span class="text-danger">*</span></label>
                                                <input name="name" type="name"
                                                    class="form-control  @error('name') is-invalid @enderror "
                                                    placeholder="Category name" value="{{$category->name}}">
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group my-2">
                                                <label>Description <span class="text-danger">*</span></label>
                                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="example-textarea"
                                                    rows="5"
                                                    placeholder="Category description...">{{ $category->description}}</textarea>
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-success">Update
                                                Category</button>
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
