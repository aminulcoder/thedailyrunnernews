<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('auth_title','Authentication- Admin Panel') </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('backend')}}/assets/images/favicon.ico">

		<!-- App css -->
		<link href="{{asset('backend')}}/assets/css/material/bootstrap-material.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="{{asset('backend')}}/assets/css/material/app-material.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="{{asset('backend')}}/assets/css/material/bootstrap-material-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="{{asset('backend')}}/assets/css/material/app-material-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="{{asset('backend')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading">

        @yield('auth-content')

        <footer class="footer footer-alt">
            <script>document.write(new Date().getFullYear())</script> &copy; Minton theme by <a href="" class="text-dark">Coderthemes</a>
        </footer>

        <!-- Vendor js -->
        <script src="{{asset('backend')}}/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="{{asset('backend')}}/assets/js/app.min.js"></script>

    </body>
</html>
