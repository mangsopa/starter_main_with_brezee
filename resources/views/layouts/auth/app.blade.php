<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">

<head>

    <meta charset="utf-8" />
    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('alpino/images/logo.svg') }}">

    <!-- custom Css-->
    <link href="{{ asset('alpino/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('alpino/css/main.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('alpino/css/color_skins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('alpino/plugins/morrisjs/morris.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('alpino/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}" rel="stylesheet"
        type="text/css" />

</head>

<body  class="theme-black">

    <div>

        <!-- auth page content -->
        <div>
            <div>
                <!-- content -->
                @yield('content')
                <!-- end content -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        {{-- <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i>
                                by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer> --}}
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('alpino/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('alpino/bundles/libscripts.bundle.js') }}"></script>

    <script src="{{ asset('alpino/bundles/knob.bundle.js') }}"></script>
    <script src="{{ asset('alpino/bundles/jvectormap.bundle.js') }}"></script>
    <script src="{{ asset('alpino/bundles/morrisscripts.bundle.js') }}"></script>
    <script src="{{ asset('alpino/bundles/sparkline.bundle.js') }}"></script>
    <script src="{{ asset('alpino/bundles/doughnut.bundle.js') }}"></script>
    <script src="{{ asset('alpino/js/pages/index.js') }}"></script>
    <script src="{{ asset('alpino/bundles/mainscripts.bundle.js"') }}"></script>

</body>

</html>
