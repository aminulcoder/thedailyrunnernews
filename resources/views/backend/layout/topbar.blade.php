@php
    $user   = App\Models\User::get();
    // return $user;
@endphp


<div class="navbar-custom">
    <div class="container-fluid">

        <ul class="list-unstyled topnav-menu float-end mb-0">
            <li class="dropdown d-none d-lg-inline-block">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" style="font-size: 25px" data-toggle="fullscreen" href="#">
                    <i class="fas fa-window-maximize"></i>
                </a>
            </li>





            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light"  style="font-size: 23px" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fa-solid fa-bell"></i>
                    {{-- <i class="fe-bell noti-icon"></i> --}}
                    <span class="badge bg-danger rounded-circle noti-icon-badge" style="font-size: 10px">5</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                            <span class="float-end">
                                <a href="" class="text-dark">
                                    <small>Clear All</small>
                                </a>
                            </span>Notification
                        </h5>
                    </div>


            </li>

            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" style="font-size: 25px" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    {{-- <img src ="{{asset('/employee/photo/'.  Auth::guard('admin')->user()->photo )}}" width="50px" height="50px" class="rounded-circle" alt=""> --}}
                    <span class="pro-user-name ms-1">
                        <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ Auth::guard('admin')->user()->name ??  ''}}</h6>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="ri-account-circle-line"></i>
                        <span>My Account</span>
                    </a>



                    <div class="dropdown-divider"></div>

                    <!-- item-->

                        <a class="dropdown-item notify-item" href="{{ route('admin.logout.submit') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-logout"></i>
                            <span>{{ __('Logout') }}</span>
                            </a>

                            <form id="logout-form" action="{{ route('admin.logout.submit') }}" method="POST" class="d-none">
                                @csrf
                            </form>


                </div>
            </li>

            <li class="dropdown notification-list">
                <a href="javascript:void(0);" style="font-size: 25px" class="nav-link right-bar-toggle waves-effect waves-light">
                    <i class="mdi mdi-cog-outline"></i>
                </a>
            </li>

        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="index.html" class="logo logo-dark text-center">
                <span class="logo-sm">
                    <img src="{{asset('backend/assets/images/images/logo-sm-dark.png')}}" alt="" height="24">
                    <!-- <span class="logo-lg-text-light">Minton</span> -->
                </span>
                <span class="logo-lg">
                    <img src="{{asset('backend/assets/images/images/logo-dark.png')}}" alt="" height="20">
                    <!-- <span class="logo-lg-text-light">M</span> -->
                </span>
            </a>

            <a href="index.html" class="logo logo-light text-center">
                <span class="logo-sm">
                    <img src="{{asset('backend/assets/images/images/logo-sm.png')}}" alt="" height="24">
                </span>
                <span class="logo-lg">
                    <img src="{{asset('backend/assets/images/images/logo-light.png')}}" alt="" height="20">
                </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </li>


        </ul>
        <div class="clearfix"></div>
    </div>
</div>



<link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
{{-- <script src="{{asset('backend/assets/js/pages/fontawesome.init.js')}}"></script> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@push('script')

@endpush
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" integrity="sha512-24XP4a9KVoIinPFUbcnjIjAjtS59PUoxQj3GNVpWc86bCqPuy3YxAcxJrxFCxXe4GHtAumCbO2Ze2bddtuxaRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

