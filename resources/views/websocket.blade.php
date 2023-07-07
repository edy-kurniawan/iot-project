<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <!-- Bootstrap Css -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container mt-5">
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
                                        <input type="checkbox" id="square-switch1" switch="none" onchange="changeButton1()" checked />
                                    @else
                                        <input type="checkbox" id="square-switch1" switch="none" onchange="changeButton1()" />
                                    @endif
                                    <label for="square-switch1" data-on-label="On" data-off-label="Off"></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <p class="text-muted mx-0 my-0">Button 2</p>
                                <div class="square-switch">
                                    @if ($relay_2 == '1')
                                        <input type="checkbox" id="square-switch2" switch="none" onchange="changeButton2()" checked />
                                    @else
                                        <input type="checkbox" id="square-switch2" switch="none" onchange="changeButton2()" />
                                    @endif
                                    <label for="square-switch2" data-on-label="On" data-off-label="Off"></label>
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
                </div>
            </div>
        </div>
    </div>
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
    <script src="https://cdn.socket.io/4.6.0/socket.io.min.js"
        integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
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