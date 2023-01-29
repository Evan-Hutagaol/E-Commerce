<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title') | Fabcart
    </title>
    <!-- Bootsrap core CSS -->
    <link href="{{ asset('assets/css/bootsrap.min.css') }}" rel="stylesgeet">
    <!-- Material Design Bootsrap -->
    <link href="{{ asset('assets/css/mdb.min.css')}}" rel="stylesgeet">
    <!-- Your custom styles (optional) -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesgeet">
</head>
<body>
    @include('layouts.inc.front-navbar')



    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset(''assets/js/jquery.min.js) }}"></script>
    <script type="text/javascript" src="{{ asset(''assets/js/popper.min.js) }}"></script>
    <script type="text/javascript" src="{{ asset(''assets/js/bootsrap.min.js) }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/mdb.min.js') }}"></script>

    
</body>
</html>