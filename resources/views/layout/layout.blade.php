<!DOCTYPE html>
<html lang="en" data-menu="flush-menu" data-nav-size="nav-default">
        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard | Revel eCommerce Admin</title>

        <link rel="shortcut icon" href="{{asset('favicon.png')}}">
        <link rel="stylesheet" href="{{asset('dashboad/assets/vendor/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('dashboad/assets/vendor/css/OverlayScrollbars.min.css')}}">
        <link rel="stylesheet" href="{{asset('dashboad/assets/vendor/css/jquery.dataTables.min.css')}}">
        <link rel="stylesheet" href="{{asset('dashboad/assets/vendor/css/daterangepicker.css')}}">
        <link rel="stylesheet" href="{{asset('dashboad/assets/vendor/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('dashboad/assets/css/style.css')}}">
        <link rel="stylesheet" id="primaryColor" href="{{asset('dashboad/assets/css/orange-color.css')}}">
        </head>
        <body>
            @include('inc.header')

            @yield('content')

            @include('inc.footer')

            <script src="{{asset('dashboad/assets/vendor/js/jquery-3.6.0.min.js')}}"></script>
            <script src="{{asset('dashboad/assets/vendor/js/jquery.overlayScrollbars.min.js')}}"></script>
            <script src="{{asset('dashboad/assets/vendor/js/apexcharts.js')}}"></script>
            <script src="{{asset('dashboad/assets/vendor/js/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('dashboad/assets/vendor/js/moment.min.js')}}"></script>
            <script src="{{asset('dashboad/assets/vendor/js/daterangepicker.js')}}"></script>
            <script src="{{asset('dashboad/assets/vendor/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('dashboad/assets/js/dashboard.js')}}"></script>
            <script src="{{asset('dashboad/assets/js/main.js')}}"></script>
         </body>
</html>






