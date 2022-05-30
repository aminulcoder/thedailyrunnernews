@extends('backend.layout.app')
@section('title')
    Admins Page - Admin Panel
@endsection
@section('content')
    <!-- Start Content-->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box page-title-box-alt">
                <h4 class="page-title">Admin List</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboards</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Edit Admin</a></li>
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
                            <h4 class="header-title float-left"> Admin List</h4>
                            <p class="float-right mb-2">
                                @if (Auth::guard('admin')->user()->can('admin.create'))
                                     <a class="btn btn-success text-white" href="{{ route('admins.create') }}">Create a new
                                    Admin</a>
                                 @endif
                            </p>
                            <div class="clearfix">
                            </div>
                            @include('backend.message.error')
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th width="5%">Sl</th>
                                        <th width="20%">Name</th>
                                        <th width="20%">Email</th>
                                        <th width="20%">Roles</th>
                                        <th width="20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admins as $admin)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $admin->name }}</td>
                                            <td>{{ $admin->email }}</td>
                                            <td>
                                                @foreach ($admin->roles as $role)
                                                    <span class="badge bg-success">
                                                        {{ $role->name }}
                                                    </span>
                                                @endforeach
                                            </td>
                                            <td>
                                                @if (Auth::guard('admin')->user()->can('admin.edit'))
                                                    <a class="btn btn-success text-white" href="{{ route('admins.edit', $admin->id) }}">Edit</a>
                                                @endif
                                                @if (Auth::guard('admin')->user()->can('admin.delete'))
                                                <a class="btn btn-danger text-white" href="{{ route('admins.destroy', $admin->id) }}"
                                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $admin->id }}').submit();">
                                                    Delete
                                                </a>
                                                <form id="delete-form-{{ $admin->id }}" action="{{ route('admins.destroy', $admin->id) }}" method="POST" style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                                @endif
                                            </td>


                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
        </div>
    </div>

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> &copy; Minton theme by <a href="">Coderthemes</a>
                </div>
                <div class="col-md-6">
                    <div class="text-md-end footer-links d-none d-sm-block">
                        <a href="javascript:void(0);">About Us</a>
                        <a href="javascript:void(0);">Help</a>
                        <a href="javascript:void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
@endsection
