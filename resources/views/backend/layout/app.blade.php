<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title','Laravel Role Admin')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- App css -->
    <link href="{{ asset('backend/assets/css/material/bootstrap-material.min.css') }}" rel="stylesheet" type="text/css"
        id="bs-default-stylesheet" />
    <link href="{{asset('backend/assets/css/material/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/material/app-material.min.css') }}" rel="stylesheet" type="text/css"
        id="app-default-stylesheet" />
    <link href="{{ asset('backend/assets/libs/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/libs/quill/quill.bubble.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/libs/quill/quill.core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/material/bootstrap-material-dark.min.css') }}" rel="stylesheet"
        type="text/css" id="bs-dark-stylesheet"/>
    <link href="{{ asset('backend/assets/css/material/app-material-dark.min.css') }}" rel="stylesheet" type="text/css"
        id="app-dark-stylesheet" />
        {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="/public/backend/assets/css/material/bootstrap_limitless.min.css">
        <link rel="stylesheet" href="/public/backend/assets/css/material/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- icons -->
    <link href="{{ asset('backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
    {{-- <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script> --}}
<link rel="stylesheet" href="/public/backend/assets/css/material/style.css">

    @stack('style')
</head>

<body class="loading">
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        @include('backend.layout.topbar')
        <!-- end Topbar -->
        <!-- ========== Left Sidebar Start ========== -->
        @include('backend.layout.leftsidebar')
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">
                    <!-- start page title -->
                    @yield('content')
                    <!-- end page title -->
                </div> <!-- container -->
            </div> <!-- content -->
            <!-- Footer Start -->
            @include('backend.layout.footer')
            <!-- end Footer -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->
    <!-- Right Sidebar -->
    @include('backend.layout.rightsidebar')
    <!-- /Right-bar -->





    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- Vendor js -->
 <script src="{{asset('backend/assets/js/vendor.min.js')}}"></script>

 <!-- KNOB JS -->
 <script src="{{asset('backend/assets/libs/jquery.knob.min.js')}}"></script>
 <!-- Apex js-->
 <script src="{{asset('backend/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

 <!-- Plugins js-->
 <script src="{{asset('backend/assets/js/pages/jquery-jvectormap-1.2.2.min.js')}}"></script>
 <script src="{{asset('backend/assets/libs/jquery-jvectormap-world-mill-en.js')}}"></script>

 <!-- Dashboard init-->
 <script src="{{asset('backend/assets/js/dashboard-sales.init.js')}}"></script>

 <!-- App js -->
 <script src="{{asset('backend/assets/js/app.min.js')}}"></script>
    <!-- Vendor js -->

    <script src="/public/backend/assets/js/pages/jquery.min.js"></script>

    <!-- App js -->
    <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>


    <!-- Plugins js -->
    <script src="{{ asset('backend/assets/libs/quill/quill.min.js') }}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" ></script>

    <script src="/public/backend/assets/js/pages/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="{{ asset('backend/assets/css/material/select2.min.css') }}"></script>
    <script src="{{ asset('backend/assets/js/pages/form_select2.js') }}"></script>
    @stack('script')
    <script>
        $('#summernote').summernote({
            placeholder: 'Post Description',
            tabsize: 2,
              height: 250,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>


</body>

</html>
