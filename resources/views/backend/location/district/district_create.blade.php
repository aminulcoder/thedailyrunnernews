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
                        <h4 class="page-title">Create District</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Heshelghor</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                                <li class="breadcrumb-item active">Category List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <a href="{{ route('district.index') }}" class="btn btn-success mb-2"><i
                                            class="mdi mdi-format-list-bulleted me-1"></i> All District</a>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="p-2">
                                                        <form method="POST" action="{{ route('district.store') }}"
                                                            enctype="multipart/form-data" class="form-horizontal"
                                                            role="form">
                                                            @csrf
                                                            <div class="mb-2 row">
                                                                <label class="col-md-2 col-form-label"
                                                                    for="simpleinput">Select Division : </label>
                                                                <div class="col-md-10">
                                                                    <select class="form-select @error('division_id') is-invalid @enderror" name="division_id">
                                                                        <option selected value="">Select Division</option>
                                                                        @foreach ($all_division as $division)
                                                                            <option value="{{$division->id}}">{{$division->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <div class="text-danger">
                                                                        @error('division_id')
                                                                        <span>{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-2 row">
                                                                <label class="col-md-2 col-form-label"
                                                                    for="simpleinput">District Name</label>
                                                                <div class="col-md-10">

                                                                    <input name="name" type="text"
                                                                        class="form-control  @error('name') is-invalid @enderror "
                                                                        placeholder="Please enter your division name ">
                                                                    <div class="text-danger">
                                                                    </div>
                                                                </div>
                                                                @error('name')
                                                                    <div class="invalid-feedback">
                                                                       {{$message}}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <button type="submit" class="btn btn-success">Add
                                                                District</button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div> <!-- end card -->
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
