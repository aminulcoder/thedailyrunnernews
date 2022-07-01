@extends('backend.layout.app')
@section('title')
Edit Online Pull
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
                                    <li class="breadcrumb-item active">Edit Vot</li>
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
                                        <a href="" class="btn btn-success mb-2"><i
                                                class="mdi mdi-format-list-bulleted me-1"></i>Online Servey </a>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-md-12">

                                        <form action="{{ route('vot.update',$vot->id) }}" method="POST" enctype="multipart/form-data"
                                            class="form-horizontal" role="form">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label>Description<span class="text-danger">*</span></label>
                                                <textarea name="description" type="text" class="form-control @error('description') is-invalid @enderror" rows="5"
                                                    placeholder="Enter your  description details">{{$vot->description}}</textarea>
                                                @error('description')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>




                                            <div class="form-group">
                                                <label class="col-xm-3">Start Date<span
                                                        class="text-danger">*</span></label>
                                                <input name="start_date"
                                                    class="col-xm-9 form-control @error('start_date') is-invalid @enderror"
                                                    type="date" placeholder="Enter your start_date"
                                                    value="{{$vot->start_date->format('Y-m-d')}}">
                                                @error('start_date')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label class="col-xm-3">Start Date<span
                                                        class="text-danger">*</span></label>
                                                <input name="end_date"
                                                    class="col-xm-9 form-control @error('end_date') is-invalid @enderror"
                                                    type="date" placeholder="Enter your end_date"
                                                    value="{{$vot->end_date->format('Y-m-d')}}">
                                                @error('end_date')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-success mt-3">
                                                Update</button>
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
