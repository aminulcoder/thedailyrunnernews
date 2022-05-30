@extends('backend.layout.app')
@section('title')
    Admin Page - Admin Panel
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
                <h4 class="page-title">Admin Edit</h4>
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
                            <h4 class="header-title">Edit Admins</h4>
                            @include('backend.message.error')
                            <form action="{{ route('admins.update', $admin->id) }} " method="POST">
                                @method('PUT')
                                @csrf
                                <br>
                                <div class="row">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label class="mb-1" for="exampleInputEmail1">Admin Name</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $admin->name }}">
                                    </div>

                                    <div class="form-group col-md-6 col-sm-12 mt-2">
                                        <label class="mb-1" for="exampleInputEmail1">Admin Email</label>
                                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $admin->email }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Enter Password">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="password" class="form-control" id="password_confirmation"
                                            placeholder="Enter Password" name="password_confirmation">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="password">Assign Roles</label>
                                        <select name="roles[]" id="roles" class="form-control select2" multiple>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->name }}"
                                                    {{ $admin->hasRole($role->name) ? 'selected' : '' }}>
                                                    {{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label class="mb-1" for="username">Admin Username</label>
                                        <input type="text" class="form-control" name="username" id="username"
                                            aria-describedby="emailHelp" value="{{ $admin->username }}" required>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update Admin</button>
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
    <style>
        .select2-container .select2-selection--multiple .select2-selection__choice {
            color: #0056c1;
        }

    </style>
@endpush
