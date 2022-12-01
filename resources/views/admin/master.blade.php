<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Showroom Honda Jogja Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('/dashboard/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('/dashboard/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/dashboard/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('/dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('/dashboard/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('/dashboard/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('/dashboard/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="/admin"><img
                        src="{{ asset('/dashboard/images/logo.svg') }}" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="/admin"><img
                        src="{{ asset('/dashboard/images/logo-mini.svg') }}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{ asset('/dashboard/images/faces/face28.jpg') }}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">INPUT DATA</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/catalog/create">Input Catalog</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="/car/create">Input Data
                                        Mobil</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                            aria-controls="form-elements">
                            <i class="icon-columns menu-icon"></i>
                            <span class="menu-title">LIST DATA</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="form-elements">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="/catalog/listcatalog">Data
                                        Katalog</a></li>
                                <li class="nav-item"><a class="nav-link" href="/car/listcar">Data Mobil</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            @yield('content')
            <!-- partial -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022. All
                        rights reserved.</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('/dashboard/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('/dashboard/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('/dashboard/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('/dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('/dashboard/js/dataTables.select.min.js') }}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('/dashboard/js/off-canvas.js') }}"></script>
    <script src="{{ asset('/dashboard/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('/dashboard/js/template.js') }}"></script>
    <script src="{{ asset('/dashboard/js/settings.js') }}"></script>
    <script src="{{ asset('/dashboard/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('/dashboard/js/dashboard.js') }}"></script>
    <script src="{{ asset('/dashboard/js/Chart.roundedBarCharts.js') }}"></script>
    <!-- End custom js for this page-->

    <script src="{{ asset('/dashboard/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('/dashboard/vendors/select2/select2.min.js') }}"></script>
    <!-- End plugin js for this page -->

    <!-- Custom js for this page-->
    <script src="{{ asset('/dashboard/js/file-upload.js') }}"></script>
    <script src="{{ asset('/dashboard/js/typeahead.js') }}"></script>
    <script src="{{ asset('/dashboard/js/select2.js') }}"></script>
    <!-- End custom js for this page-->
</body>

</body>

</html>
