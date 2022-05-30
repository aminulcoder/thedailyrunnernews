@extends('backend.layout.app')
@section('title')
    Admins Page - Admin Panel
@endsection
@push('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        label.form-check-label {
            margin-bottom: 0;
            text-transform: capitalize;
        }

    </style>
@endpush
@section('content')
    <!-- Start Content-->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box page-title-box-alt">
                <h4 class="page-title">Admin Create</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboards</a></li>
                        <li class="breadcrumb-item active">All Admins</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content-inner">
        <!-- page title area end -->
        <div class="main-content-inner">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Create New Admins</h4>
                            @include('backend.message.error')
                            <form action="{{ route('admins.store') }} " method="POST">
                                @csrf
                                <br>
                                <div class="row">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label class="mb-1" for="exampleInputEmail1">Admin Name</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter a user name" required>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-12 ">
                                        <label class="mb-1" for="exampleInputEmail1">Admin Email</label>
                                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter a user email" required>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Enter Password" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12 mt-1">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="password" class="form-control" id="password_confirmation"
                                            name="password_confirmation" placeholder="Enter Password" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="roles">Assign Roles</label>
                                        <select name="roles[]" id="roles" class="form-control select2" multiple required>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label class="mb-1" for="username">Admin Username</label>
                                        <input type="text" class="form-control" name="username" id="username"
                                            aria-describedby="emailHelp" placeholder="Enter a username" required>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Admin</button>
                            </form>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
        </div>
    </div>
@endsection
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        })
    </script>
@endpush
@push('style')
    <link href="{{ asset('backend') }}/assets/libs/mohithg-switchery/switchery.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend') }}/assets/libs/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend') }}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend') }}/assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('backend') }}/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet"
        type="text/css" />

    <style>
        .select2-container .select2-selection--multiple .select2-selection__choice {
            color: #da1818;
        }
    </style>
@endpush
@push('scripts')
    <script src="{{ asset('backend') }}/assets/libs/selectize/js/standalone/selectize.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/mohithg-switchery/switchery.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/multiselect/js/jquery.multi-select.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/jquery.quicksearch/jquery.quicksearch.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/select2/js/select2.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

    <!-- Validation init js-->
    <script src="{{ asset('backend') }}/assets/js/pages/form-validation.init.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-advanced.init.js"></script>

    <script src="{{ asset('backend/assets/libs/jquery.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/jquery.validate.js') }}"></script>


   

@endpush

