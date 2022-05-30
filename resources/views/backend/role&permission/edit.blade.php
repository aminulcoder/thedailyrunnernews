@extends('backend.layout.app')
@section('title')
    Role Page - Admin Panel
@endsection
@push('style')
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
                <h4 class="page-title">Roles Edit -{{ $role->name }}</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboards</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">All Rolles</a></li>
                        <li class="breadcrumb-item active">Edit Rolles</li>
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
                            <h4 class="header-title">Edit Role</h4>
                            @include('backend.message.error')
                            <form action="{{ route('roles.update', $role->id) }} " method="POST">
                                @method('PUT')
                                @csrf
                                <br>
                                <div class="form-group">

                                    <label class="mb-1" for="exampleInputEmail1">Role Name</label>

                                    <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter a role name"
                                        value="{{ $role->name }}">

                                </div>
                                <br>
                                <div class="form-group">

                                    <label for="name">Permissions</label>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkPermissionAll" value="1"
                                            {{ App\Models\User::roleHasPermissions($role, $all_permissions) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="checkPermissionAll">All</label>
                                    </div>
                                    <hr>
                                    @php $i = 1; @endphp
                                    @foreach ($permission_groups as $group)
                                        <div class="row">
                                            @php
                                                $permissions = App\Models\User::getpermissionsByGroupName($group->name);
                                                $j = 1;
                                            @endphp
                                            <div class="col-3">
                                                <div class="form-check">

                                                    <input type="checkbox" class="form-check-input"
                                                        id="{{ $i }}Management" value="{{ $group->name }}"
                                                        onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox', this)"
                                                        {{ App\Models\User::roleHasPermissions($role, $permissions) ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="checkPermission">{{ $group->name }}</label>
                                                </div>
                                            </div>

                                            <div class="col-9 role-{{ $i }}-management-checkbox">

                                                @foreach ($permissions as $permission)
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            onclick="checkSinglePermission('role-{{ $i }}-management-checkbox', '{{ $i }}Management', {{ count($permissions) }})"
                                                            name="permissions[]"
                                                            {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}
                                                            id="checkPermission{{ $permission->id }}"
                                                            value="{{ $permission->name }}">
                                                        <label class="form-check-label"
                                                            for="checkPermission{{ $permission->id }}">{{ $permission->name }}</label>
                                                    </div>
                                                    @php  $j++; @endphp
                                                @endforeach
                                                <br>
                                            </div>

                                        </div>
                                        @php  $i++; @endphp
                                    @endforeach


                                </div>
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
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
    <script>
        $("#checkPermissionAll").click(function() {
            if ($(this).is(':checked')) {
                // check all the checkbox
                $('input[type=checkbox]').prop('checked', true);
            } else {
                // un check all the checkbox
                $('input[type=checkbox]').prop('checked', false);
            }
        });

        function checkPermissionByGroup(className, checkThis) {
            const groupIdName = $("#" + checkThis.id);
            const classCheckBox = $('.' + className + ' input');

            if (groupIdName.is(':checked')) {
                classCheckBox.prop('checked', true);
            } else {
                classCheckBox.prop('checked', false);
            }
            implementAllChecked();
        }

        function checkSinglePermission(groupClassName, groupID, countTotalPermission) {
            const classCheckbox = $('.'+groupClassName+ ' input');
            const groupIDCheckBox = $("#"+groupID);

            // if there is any occurance where something is not selected then make selected = false
            if($('.'+groupClassName+ ' input:checked').length == countTotalPermission){
                groupIDCheckBox.prop('checked', true);
            }else{
                groupIDCheckBox.prop('checked', false);
            }
            implementAllChecked();
         }

         function implementAllChecked() {
             const countPermissions = {{ count($all_permissions) }};
             const countPermissionGroups = {{ count($permission_groups) }};

            //  console.log((countPermissions + countPermissionGroups));
            //  console.log($('input[type="checkbox"]:checked').length);

             if($('input[type="checkbox"]:checked').length >= (countPermissions + countPermissionGroups)){
                $("#checkPermissionAll").prop('checked', true);
            }else{
                $("#checkPermissionAll").prop('checked', false);
            }
         }
    </script>
@endpush
