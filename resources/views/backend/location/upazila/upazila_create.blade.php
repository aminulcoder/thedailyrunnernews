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
                            <h4 class="page-title">Create Upazilla</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dailyrunnernews</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Paper</a></li>
                                    <li class="breadcrumb-item active">Upzilla</li>
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
                                        <a href="{{ route('upazila.index') }}" class="btn btn-success mb-2"><i
                                                class="mdi mdi-format-list-bulleted me-1"></i> All Upazila</a>
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
                                                            <form method="POST" action="{{ route('upazila.store') }}"
                                                                enctype="multipart/form-data" class="form-horizontal"
                                                                role="form">
                                                                @csrf

                                                                <div class="mb-2 row">
                                                                    <label class="col-md-2 col-form-label"
                                                                        for="simpleinput">Select Division : <span
                                                                        class="text-danger">*</span></label>
                                                                    <div class="col-md-10">
                                                                        <select
                                                                            class="form-select @error('division_id') is-invalid @enderror"
                                                                            name="division_id">
                                                                            <option selected value="">Select Division
                                                                            </option>
                                                                            @foreach ($all_division as $division)
                                                                                <option value="{{ $division->id }}">
                                                                                    {{ $division->name }}</option>
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
                                                                        for="simpleinput">Select District : <span
                                                                        class="text-danger">*</span></label>
                                                                    <div class="col-md-10" style="position: relative">
                                                                        <select
                                                                            class="form-select @error('district_id') is-invalid @enderror"
                                                                            name="district_id">
                                                                            <option selected value=""></option>
                                                                        </select>

                                                                        <div class="text-danger">
                                                                            @error('district_id')
                                                                                <span>{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-2 row">
                                                                    <label class="col-md-2 col-form-label"
                                                                        for="simpleinput">Upazila Name <span
                                                                        class="text-danger">*</span></label>
                                                                    <div class="col-md-10">

                                                                        <input name="name" type="text"
                                                                            class="form-control  @error('name') is-invalid @enderror "
                                                                            placeholder="Please enter your division name ">
                                                                        <div class="text-danger">
                                                                        </div>
                                                                    </div>
                                                                    @error('name')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <button type="submit" class="btn btn-success">Add
                                                                    Upazilla</button>
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
@push('css')
    <!-- third party css -->
    <link href="{{ asset('backend') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('backend') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
@endpush
@push('script')
    <!-- third party js -->
    <script src="{{ asset('backend') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
    </script>
    <script src="{{ asset('backend') }}/assets/libs/jquery-datatables-checkboxes/js/dataTables.checkboxes.min.js">
    </script>
    <!-- third party js ends -->

    @push('script')
    <script>
        var division = $('select[name="division_id"]');
        var district = $('select[name="district_id"]');
        var upazila = $('select[name="upazila_id"]');

        $(document).on('change', 'select[name="division_id"]', function() {
            let divisionid = $(this).val()
            console.log(divisionid);

            $.ajax({
                url: `/district-division/${divisionid}`,
                type: 'GET',
                success: function(data) {
                    district.empty()
                    district.append(data)
                },
            });

        }); // change event end


    </script>

@endpush
