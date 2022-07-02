@extends('backend.layout.app')
@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
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

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">TOTAL USERS</h5>
                                <h3 class="my-2 py-1"><span data-plugin="counterup">{{$totalUser}}</span></h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-primary rounded">
                                    <i class="ri-stack-line font-20 text-primary"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="New Leads">TOTAL ADMIN</h5>
                                <h3 class="my-2 py-1"><span data-plugin="counterup">{{$totalAdmin}}</span></h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-danger me-2"><span class="mdi mdi-arrow-down-bold"></span>
                                        3.27%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-primary rounded">
                                    <i class="ri-slideshow-2-line font-20 text-primary"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Deals">TOTAL SUB CATEGOREY</h5>
                                <h3 class="my-2 py-1"><span data-plugin="counterup">{{$totalSubCategory}}</span></h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 8.58%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-primary rounded">
                                    <i class="ri-hand-heart-line font-20 text-primary"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Booked Revenue">TOTAL ONLINE POLING
                                </h5>
                                <h3 class="my-2 py-1"><span data-plugin="counterup">{{$totalVot}}</span></h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span>
                                        34.61%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-primary rounded">
                                    <i class="ri-money-dollar-box-line font-20 text-primary"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">TOTAL NEWS</h5>
                                <h3 class="my-2 py-1"><span data-plugin="counterup">{{$totalNews}}</span></h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-primary rounded">
                                    <i class="ri-stack-line font-20 text-primary"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="New Leads">TOTAL CATEGORIES</h5>
                                <h3 class="my-2 py-1"><span data-plugin="counterup">{{$totalCategory}}</span></h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-danger me-2"><span class="mdi mdi-arrow-down-bold"></span>
                                        3.27%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-primary rounded">
                                    <i class="ri-slideshow-2-line font-20 text-primary"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Deals">TOTAL PHOTOS</h5>
                                <h3 class="my-2 py-1"><span data-plugin="counterup">34,521</span></h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 8.58%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-primary rounded">
                                    <i class="ri-hand-heart-line font-20 text-primary"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Booked Revenue">TOTAL SUBSCRIBERS
                                </h5>
                                <h3 class="my-2 py-1">$<span data-plugin="counterup">89,357</span></h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span>
                                        34.61%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-primary rounded">
                                    <i class="ri-money-dollar-box-line font-20 text-primary"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="header-title">Campaigns</h4>
                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-xs btn-light active">Today</button>
                                <button type="button" class="btn btn-xs btn-light">Weekly</button>
                                <button type="button" class="btn btn-xs btn-light">Monthly</button>
                            </div>
                        </div>
                        <div class="mt-3" dir="ltr">
                            <div id="campaigns-chart" class="apex-charts" data-colors="#f7b84b,#1abc9c,#0056c1"></div>
                        </div>
                        <div class="row text-center mt-2">
                            <div class="col-sm-4">
                                <h4 class="fw-normal mt-3">
                                    <span>6,510</span>
                                </h4>
                                <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-warning"></i>
                                    Total Sent</p>
                            </div>
                            <div class="col-sm-4">
                                <h4 class="fw-normal mt-3">
                                    <span>3,487</span>
                                </h4>
                                <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i>
                                    Reached</p>
                            </div>
                            <div class="col-sm-4">
                                <h4 class="fw-normal mt-3">
                                    <span>1,568</span>
                                </h4>
                                <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i>
                                    Opened</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->

            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="header-title">Revenue</h4>
                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-xs btn-light active">Today</button>
                                <button type="button" class="btn btn-xs btn-light">Weekly</button>
                                <button type="button" class="btn btn-xs btn-light">Monthly</button>
                            </div>
                        </div>

                        <div class="row mt-4 text-center">
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Current Month</p>
                                <h4><i class="fe-arrow-up text-success me-1"></i>$1.4k</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Previous Month</p>
                                <h4><i class="fe-arrow-down text-danger me-1"></i>$15k</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                <h4><i class="fe-arrow-down text-danger me-1"></i>$7.8k</h4>
                            </div>
                        </div>

                        <div class="mt-3" dir="ltr">
                            <div id="revenue-chart" class="apex-charts" data-colors="#0056c1,#ced4dc"></div>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->



    </div> <!-- container -->

    </div> <!-- content -->

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


