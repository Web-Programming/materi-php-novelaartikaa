<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-4.0.0-beta3/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        {{-- Header --}}
        @include('layout.header')

        {{-- Sidebar --}}
        @include('layout.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        {{-- Footer --}}
        @include('layout.footer')

    </div>

    <!-- AdminLTE JS -->
    <script src="{{ asset('AdminLTE-4.0.0-beta3/dist/js/adminlte.min.js') }}"></script>
</body>
</html>

