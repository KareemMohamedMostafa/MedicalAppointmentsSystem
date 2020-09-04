<!doctype html>

<html class="no-js " lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <meta name="description" content="It is really appropriate system for Doctors, Dentist, Hospitals, Health clinics, Surgeons and Medical organization">

    <title>Medical Appointments System</title>

    <link rel="icon" href="favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="{{ URL::asset('plugins/bootstrap/css/bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ URL::asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}" />

    <link rel="stylesheet" href="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}" />

    <link rel="stylesheet" href="{{ URL::asset('plugins/morrisjs/morris.min.css') }}" />

    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />

    <link rel="stylesheet" href="{{ URL::asset('css/color_skins.css') }}" />

</head>

<body class="theme-cyan menu_dark" id="app-layout">

    <div class="overlay"></div>

    @include('layouts.nav')

    @include('layouts.sidebar')

    @yield('content')

    <script src="{{ URL::asset('bundles/libscripts.bundle.js') }}"></script>

    <script src="{{ URL::asset('bundles/vendorscripts.bundle.js') }}"></script>

    <script src="{{ URL::asset('bundles/morrisscripts.bundle.js') }}"></script>

    <script src="{{ URL::asset('bundles/jvectormap.bundle.js') }}"></script>

    <script src="{{ URL::asset('bundles/knob.bundle.js') }}"></script>

    <script src="{{ URL::asset('bundles/countTo.bundle.js') }}"></script>

    <script src="{{ URL::asset('bundles/sparkline.bundle.js') }}"></script>

    <script src="{{ URL::asset('bundles/mainscripts.bundle.js') }}"></script>

    <script src="{{ URL::asset('js/pages/index.js') }}"></script>

    <script src="{{ URL::ASSET('bundles/datatablescripts.bundle.js') }}"></script>

    <script src="{{ URL::ASSET('plugins/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>

    <script src="{{ URL::ASSET('plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>

    <script src="{{ URL::ASSET('plugins/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>

    <script src="{{ URL::ASSET('plugins/jquery-datatable/buttons/buttons.flash.min.js') }}"></script>

    <script src="{{ URL::ASSET('plugins/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>

    <script src="{{ URL::ASSET('plugins/jquery-datatable/buttons/buttons.print.min.js') }}"></script>

    <script src="{{ URL::ASSET('js/pages/tables/jquery-datatable.js') }}"></script>

</body>

</html>