@extends('backend.layout.app')
@section('title')

Online Pull
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dailyrunnernews</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Paper</a></li>
                                    <li class="breadcrumb-item active">Vot List</li>
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
                                        <a href="{{route('vot.index')}}" class="btn btn-success mb-2"><i
                                                class="mdi mdi-format-list-bulleted me-1"></i>Online Servey </a>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-md-12">

                                        <form action="{{ route('vot.store') }}" method="POST" enctype="multipart/form-data"
                                            class="form-horizontal" role="form">
                                            @csrf
                                            <div class="form-group">
                                                <label>Description<span class="text-danger">*</span></label>
                                                <textarea name="description" type="text" class="form-control @error('description') is-invalid @enderror" rows="5"
                                                    placeholder="Enter your  description details">{{ old('description') }}</textarea>
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
                                                    value="{{ old('start_date') }}">
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
                                                    value="{{ old('end_date') }}">
                                                @error('end_date')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-success">
                                                submit</button>
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



