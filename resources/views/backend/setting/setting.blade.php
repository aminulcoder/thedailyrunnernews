
@extends('backend.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box page-title-box-alt">
                <h4 class="page-title">CRM</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Minton</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                        <li class="breadcrumb-item active">CRM</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col-sm-3 border-end">
                    <h2 class="pb-2 h3 border-bottom">
                        <span> <i class="mdi mdi-menu"></i></span>
                        Settings
                    </h2>
                    <div class="nav flex-column nav-pills nav-pills-tab" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link border-bottom show active mb-1 " id="v-pills-home-tab" data-bs-toggle="pill"
                            href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">
                            <span> <i class="mdi mdi-youtube-studio"></i></span>
                            Header </a>
                        <a class="nav-link border-bottom mb-1" id="v-pills-profile-tab" data-bs-toggle="pill"
                            href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">
                            <span> <i class="mdi mdi-wrench-outline"></i></span>
                            Footer</a>
                        <a class="nav-link border-bottom mb-1" id="v-pills-social-media-tab" data-bs-toggle="pill"
                            href="#v-pills-social-media" role="tab" aria-controls="v-pills-profile" aria-selected="true">
                            <span> <i class="mdi mdi-facebook"></i></span>
                            Social Media</a>
                        <a class="nav-link border-bottom mb-1" id="v-pills-contact-tab" data-bs-toggle="pill"
                            href="#v-pills-contact" role="tab" aria-controls="v-pills-contact" aria-selected="false">
                            <span> <i class="mdi mdi-account-box"></i></span>
                            Contact</a>
                        <a class="nav-link border-bottom mb-1" id="v-pills-logo-tab" data-bs-toggle="pill"
                            href="#v-pills-logo" role="tab" aria-controls="v-pills-logo" aria-selected="false">
                            <span> <i class="mdi mdi-account-box"></i></span>
                            Logo</a>

                        <a class="nav-link border-bottom mb-1" id="v-pills-payment-tab" data-bs-toggle="pill"
                            href="#v-pills-payment" role="tab" aria-controls="v-pills-payment" aria-selected="false">
                            <span> <i class="mdi mdi-bank"></i></span>
                            Payment</a>
                        <a class="nav-link border-bottom mb-1" id="v-pills-settings-tab" data-bs-toggle="pill"
                            href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            Settings</a>
                    </div>
                </div> <!-- end col-->
                <div class="col-sm-9">

                    <div class="tab-content pt-0">
                        @include('backend.setting.inc.header')

                        
                            @include('backend.setting.inc.contact')

                            @include('backend.setting.inc.footer')
                            {{-- Social Media --}}
                            {{-- Contacts --}}
                            @include('backend.setting.inc.payment-setting')
                            {{-- Payment --}}
                            @include('backend.setting.inc.socialmedia')
                            {{-- -----------logo------- --}}
                            @include('backend.setting.inc.logo')
                        </div>

                    </div> <!-- end col-->
            </div> <!-- end row-->

        </div>
    </div>

    <!-- end row -->
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
    <style>
        .dropify-message .file-icon p {
            font-size: 14px;
        }

        .dropify-wrapper {
            width: 500px;
            height: 120px;
        }

    </style>
@endpush

@push('scripts')
    {{-- Dropify --}}
    <script src="{{ asset('js/dropify.min.js') }}"></script>
    <script>
        $('.dropify').dropify({
            messages: {
                'default': 'Drag and drop profile new photo or click',
                'replace': 'Drag and drop or click to replace',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
    </script>
@endpush
