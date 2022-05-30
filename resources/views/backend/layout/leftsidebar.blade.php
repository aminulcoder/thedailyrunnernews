@php
$usr = Auth::guard('admin')->user();
@endphp

<div class="left-side-menu">

    <!-- LOGO -->
    <div class="logo-box">
        <a href="{{ route('admin.dashboard') }}" class="logo logo-dark text-center">
            <span class="logo-sm">
                <img src="{{ asset('backend/assets/images/images/runner/Logo-Icon-White-Color--Copy.png') }}" alt="" style="width:50px">
                <!-- <span class="logo-lg-text-light">Minton</span> -->
            </span>
            <span class="logo-lg">
                <img src="{{ asset('frontend/asset/img/daily runner for heshelghor white text-01.png') }}" alt=""style="width:150px" >
                <!-- <span class="logo-lg-text-light">M</span> -->
            </span>
        </a>

        <a href="{{ route('admin.dashboard') }}" class="logo logo-light text-center">
            <span class="logo-sm">
                <img src="{{ asset('backend/assets/images/images/runner/Logo-Icon-White-Color--Copy.png') }}" alt="" style="width:50px">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('frontend/asset/img/daily runner for heshelghor white text-01.png') }}" alt="" style="width:150px">
            </span>
        </a>
    </div>

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="#" class="text-reset dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown">Nik
                    Patel</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-reset">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">



                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                @if ($usr->can('role.create') || $usr->can('role.view') || $usr->can('role.edit') || $usr->can('role.delete'))
                <li>
                    <a href="#sidebarRoles" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarRoles">
                        <i class="mdi mdi-lock-minus"></i>
                        <span>Role & Permissions</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse {{ Route::is('roles.create') || Route::is('roles.index') || Route::is('roles.edit') || Route::is('roles.show') ? 'in' : '' }}"
                        id="sidebarRoles">
                        <ul class="nav-second-level ">
                            @if ($usr->can('role.create'))
                            <li class="{{ Route::is('roles.create') ? 'active' : '' }}"><a
                                    href="{{ route('roles.create') }}">Create Role</a></li>
                            @endif
                            @if ($usr->can('role.view'))
                            <li class="{{ Route::is('roles.index') || Route::is('roles.edit') ? 'active' : '' }}"><a
                                    href="{{ route('roles.index') }}">All Roles</a></li>
                            @endif
                        </ul>
                    </div>
                </li>
                @endif

                @if ($usr->can('admin.create') || $usr->can('admin.view') || $usr->can('admin.edit') || $usr->can('admin.delete'))
                <li>
                    <a href="#sidebarAdmin" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarAdmin">
                        <i class="mdi mdi-account-circle"></i>
                        <span>Admins</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse {{ Route::is('admins.create') || Route::is('admins.index') || Route::is('admins.edit') || Route::is('admin.show') ? 'in' : '' }}"
                        id="sidebarAdmin">
                        <ul class="nav-second-level">
                            @if ($usr->can('admin.view'))
                            <li class="{{ Route::is('admins.index') || Route::is('admins.edit') ? 'active' : '' }}">
                                <a href="{{ route('admins.index') }}">All Admins</a></li>
                            @endif
                            @if ($usr->can('admin.create'))
                            <li class="{{ Route::is('admins.create') ? 'active' : '' }}"><a
                                    href="{{ route('admins.create') }}">Create Admin</a></li>
                            @endif
                        </ul>
                    </div>
                </li>
                @endif

                <li>
                    <a href="#sidebarBlog" data-bs-toggle="collapse" aria-expanded="false" aria-controls="sidebarBlog">
                        <i class="mdi mdi-blogger"></i>

                        <span>News </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarBlog">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('news.create') }}">Create News</a>
                            </li>
                            <li>
                                <a href="{{ route('category.index') }}">Category</a>
                            </li>
                            <li>
                                <a href="{{ route('subcategory.index') }}">Sub Category</a>
                            </li>
                            <li>
                                <a href="{{ route('tags.index') }}">Tags</a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarvot" data-bs-toggle="collapse" aria-expanded="false" aria-controls="sidebarBlog">
                        <i class="mdi mdi-vote"></i>

                        <span> Online poll </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarvot">
                        <ul class="nav-second-level">

                            <li>
                                <a href="{{ route('vot.index') }}"> All poll</a>
                            </li>
                            <li>
                                <a href="{{ route('vot.create') }}"> Add poll</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#sidebarlocation" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="sidebarBrand">
                        <i class="mdi mdi-map-marker"></i>
                        <span> Location </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarlocation">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">All Location</a>
                            </li>
                            <li>
                                <a href="{{ route('division.index') }}">Division</a>
                            </li>
                            <li>
                                <a href="{{ route('district.index') }}">District</a>
                            </li>
                            <li>
                                <a href="{{ route('upazila.index') }}">Upzilla</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{ route('admin.setting.create') }}">
                        <i class="mdi mdi-youtube-studio"></i>
                        <span> Setting </span>
                    </a>
                </li>


                <li>
                    <a class="dropdown-item notify-item" href="{{ route('admin.logout.submit') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-logout"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>

                    <form id="logout-form" action="{{ route('admin.logout.submit') }}" method="POST"
                        class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>



@push('style')
    <style>
/* span.logo-lg img {
    width: 50% !important;
} */

    </style>
@endpush
