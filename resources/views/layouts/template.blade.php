<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>IOT PROJECT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('assets/images/favicon.ico') }}">
    <!-- Bootstrap Css -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="{{ url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ url('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />    
</head>

<body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <h3 class="text-white mt-4">IOT</h3>
                            </span>
                            <span class="logo-lg">
                                <h3 class="text-white mt-4">IOT PROJECT</h3>
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <h3 class="text-white mt-4">IOT</h3>
                            </span>
                            <span class="logo-lg">
                                <h3 class="text-white mt-4">IOT PROJECT</h3>
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            data-bs-toggle="fullscreen">
                            <i class="bx bx-fullscreen"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="/user/profile"><i class="bx bx-user font-size-16 align-middle me-1"></i>
                                <span key="t-profile">Profile</span></a>
                            <a class="dropdown-item d-block" href="#"><span
                                    class="badge bg-success float-end">11</span><i
                                    class="bx bx-wrench font-size-16 align-middle me-1"></i> <span
                                    key="t-settings">Settings</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i
                                    class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                                    key="t-logout">Logout</span></a>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="bx bx-cog bx-spin"></i>
                        </button>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">Menu</li>

                        <li class="mm-active">
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-home-circle"></i>
                                <span key="t-dashboards">Dashboards</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="index.html" key="t-default">Overview<span
                                            class="badge rounded-pill text-bg-success float-end"
                                            key="t-new">New</span></a></li>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active">Informasi update hari ini</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card overflow-hidden">
                                <div class="bg-primary bg-soft">
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="text-primary p-3">
                                                <h5 class="text-primary">Welcome Back !</h5>
                                                <p>IMPLEMENTASI SISTEM SMART HOME UNTUK MONITORING DAN KONTROL PERALATAN
                                                    RUMAH BERBASIS INTERNET OF THINGS</p>
                                            </div>
                                        </div>
                                        <div class="col-5 align-self-end">
                                            <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="avatar-md profile-user-wid mb-4">
                                                <img src="assets/images/users/avatar-1.jpg" alt=""
                                                    class="img-thumbnail rounded-circle">
                                            </div>
                                            <h5 class="font-size-15 text-truncate">Henry Price</h5>
                                            <p class="text-muted mb-0 text-truncate">Admin Sistem</p>
                                        </div>

                                        <div class="col-sm-8">
                                            <div class="pt-4">

                                                <div class="row">
                                                    <div class="col-6">
                                                        <h5 class="font-size-15">{{ now() }}</h5>
                                                        <p class="text-muted mb-0">Last Login</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="font-size-15">{{ $ip_address }}</h5>
                                                        <p class="text-muted mb-0">IP Address</p>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="/user/profile"
                                                        class="btn btn-primary waves-effect waves-light btn-sm">View
                                                        Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Pengaturan Sistem</h4>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="text-muted mb-0">Mode sistem :</p>
                                            <select name="mode" class="form-select" onchange="changeMode()" id="mode">
                                                @if ($mode == '1')
                                                <option value="1" selected>Otomatis</option>
                                                <option value="0">Manual</option>
                                                @else
                                                <option value="1">Otomatis</option>
                                                <option value="0" selected>Manual</option>
                                                @endif
                                            </select>
                                            <p class="text-muted mb-0 mt-3 mb-1">Status :</p>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="text-muted mx-0 my-0">Button 1</p>
                                                    <div class="square-switch">
                                                        @if ($relay_1 == '1')
                                                        <input type="checkbox" id="square-switch1" switch="none"
                                                            onchange="changeButton1()" checked />
                                                        @else
                                                        <input type="checkbox" id="square-switch1" switch="none"
                                                            onchange="changeButton1()" />
                                                        @endif
                                                        <label for="square-switch1" data-on-label="On"
                                                            data-off-label="Off"></label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="text-muted mx-0 my-0">Button 2</p>
                                                    <div class="square-switch">
                                                        @if ($relay_2 == '1')
                                                        <input type="checkbox" id="square-switch2" switch="none"
                                                            onchange="changeButton2()" checked />
                                                        @else
                                                        <input type="checkbox" id="square-switch2" switch="none"
                                                            onchange="changeButton2()" />
                                                        @endif
                                                        <label for="square-switch2" data-on-label="On"
                                                            data-off-label="Off"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-4 mt-sm-0">
                                                <div class="text-center">
                                                    <div class="mb-4">
                                                        <i class="mdi mdi-theme-light-dark text-primary display-4"></i>
                                                    </div>
                                                    <h3 id="value">0</h3>
                                                    <p>value Saat Ini</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-muted fst-italic mb-0">Relay dapat dikontrol dengan mode sistem
                                            manual.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium">Rata - rata Intensitas</p>
                                                    <h4 class="mb-0">{{ number_format($average) }}</h4>
                                                </div>

                                                <div class="flex-shrink-0 align-self-center">
                                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                        <span class="avatar-title">
                                                            <i class="bx bx-copy-alt font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium">Intensitas Tertinggi</p>
                                                    <h4 class="mb-0">{{ number_format($max)}}</h4>
                                                </div>

                                                <div class="flex-shrink-0 align-self-center ">
                                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bx-archive-in font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium">Intensitas Terendah</p>
                                                    <h4 class="mb-0">{{ number_format($min)}}</h4>
                                                </div>

                                                <div class="flex-shrink-0 align-self-center">
                                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="card">
                                <div class="card-body">
                                    <div class="d-sm-flex flex-wrap">
                                        <h4 class="card-title mb-4">Email Sent</h4>
                                        <div class="ms-auto">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Week</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Month</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#">Year</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div id="stacked-column-chart" class="apex-charts"
                                        data-colors='["--bs-primary", "--bs-warning", "--bs-success"]' dir="ltr"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Table Data</h4>
                                    <div class="table-responsive">
                                        <table id="datatable2" class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="align-middle">Tanggal</th>
                                                    <th class="align-middle">Waktu</th>
                                                    <th class="align-middle">Intensitas Cahaya</th>
                                                    <th class="align-middle">Mode Sistem</th>
                                                    <th class="align-middle">Status Relay 1</th>
                                                    <th class="align-middle">Status Relay 2</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- end table-responsive -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © IOT PROJECT.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                IMPLEMENTASI SISTEM SMART HOME UNTUK MONITORING DAN KONTROL PERALATAN RUMAH BERBASIS
                                INTERNET OF THINGS
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-1.jpg" class="img-thumbnail" alt="layout images">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-2.jpg" class="img-thumbnail" alt="layout images">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>
            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ url('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ url('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ url('assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ url('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ url('assets/js/pages/dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ url('assets/js/app.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ url('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ url('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ url('assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ url('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ url('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ url('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ url('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    
    <!-- Responsive examples -->
    <script src="{{ url('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <script src="https://cdn.socket.io/4.6.0/socket.io.min.js"
        integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous">
    </script>
    <script>
        var table;
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            table = $('#datatable2').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                        url: "{{ route('dashboard.create') }}",
                        type: "GET",
                },
                columns: [
                    {data: 'tanggal', name: 'tanggal'},
                    {data: 'waktu', name: 'waktu'},
                    {data: 'intensitas', name: 'intensitas', searchable: true},
                    {data: 'mode', name: 'mode'},
                    {data: 'relay_1', name: 'relay_1'},
                    {data: 'relay_2', name: 'relay_2'},
                ]
            });

            // check mode
            var mode = document.getElementById('mode').value;
            // check mode
            if (mode == '1') {
                console.log('mode otomatis');
                // disable button
                document.getElementById('square-switch1').disabled = true;
                document.getElementById('square-switch2').disabled = true;
            } else {
                console.log('mode manual');
                // enable button
                document.getElementById('square-switch1').disabled = false;
                document.getElementById('square-switch2').disabled = false;
            }
            
        });

        // socket.io
        const serverurl = 'http://connectis.my.id:3000';
        const websocket = io(serverurl, {
            transports : ['websocket'],
            withCredentials: false,
        });

        // on message from server
        websocket.on('ws-ldr-value', function(value) {
            // ldr_min value
            var ldr_min = {{ $ldr_min }};
            // set value
            document.getElementById('value').innerHTML = value;
            console.log('ldr value : ' + value);
            // check mode
            var mode = document.getElementById('mode').value;
            // if mode automatic
            if(mode == '1') {
                // check value
                if(value <= ldr_min) {
                    // square-switch1 checked
                    document.getElementById('square-switch1').checked = true;
                    // square-switch2 checked
                    document.getElementById('square-switch2').checked = true; 
                } else {
                    // square-switch1 checked
                    document.getElementById('square-switch1').checked = false;
                    // square-switch2 checked
                    document.getElementById('square-switch2').checked = false;
                }
            }
            // reload datatable
            table.ajax.reload();
        });

        function changeButton1() {
            // get button status
            var status = document.getElementById('square-switch1').checked;
            // check status
            if (status == true) {
                status_relay = 1;
            } else {
                status_relay = 0;
            }
            // send to server with ajax
            $.ajax({
                url: "/api/data/1?relay=relay_1&value=" + status_relay,
                type: "GET",
                success: function(data) {
                    console.log(data);
                }
            });
            // disable button on 2 seconds
            document.getElementById('square-switch1').disabled = true;
            setTimeout(function() {
                document.getElementById('square-switch1').disabled = false;
            }, 2000);
        }

        function changeButton2() {
            // get button status
            var status = document.getElementById('square-switch2').checked;
            // check status
            if (status == true) {
                status_relay = 1;
            } else {
                status_relay = 0;
            }
            // send to server with ajax
            $.ajax({
                url: "/api/data/1?relay=relay_2&value=" + status_relay,
                type: "GET",
                success: function(data) {
                    console.log(data);
                }
            });
            // disable button on 2 seconds
            document.getElementById('square-switch2').disabled = true;
            setTimeout(function() {
                document.getElementById('square-switch2').disabled = false;
            }, 2000);
        }

        function changeMode(){
            // get mode status
            var status = document.getElementById('mode').value;
            // send to server with ajax
            $.ajax({
                url: "/api/data/create?mode=" + status,
                type: "GET",
                success: function(data) {
                    console.log(data);
                    // disable button on 2 seconds
                    document.getElementById('mode').disabled = true;
                    setTimeout(function() {
                        document.getElementById('mode').disabled = false;
                    }, 2000);
                }
            });
            // if mode is manual, disable button
            if (status == '1') {
                console.log('mode otomatis');
                // disable button
                document.getElementById('square-switch1').disabled = true;
                document.getElementById('square-switch2').disabled = true;
            } else {
                console.log('mode manual');
                // enable button
                document.getElementById('square-switch1').disabled = false;
                document.getElementById('square-switch2').disabled = false;
            }
        }

    </script>
</body>


</html>