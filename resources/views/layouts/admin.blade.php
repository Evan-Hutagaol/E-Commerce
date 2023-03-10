<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    {{-- bootstrap core css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    {{-- material design bootstrap --}}
    <link rel="stylesheet" href="{{ asset('/assets/css/mdb.min.css') }}">
    {{-- your custom style --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- addons css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/addons/datatables.min.css') }}">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <title> @yield('title') | fabcart - Admin</title>

    <style>
        .sidebar-fixed {
            height: 100vh;
            width: 270px;
            -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
            z-index: 1050;
            background-color: #fff;
            padding: 0 1.5rem 1.5rem
        }

        .sidebar-fixed .list-group .active {
            -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
            -webkit-border-radius: 5px;
            border-radius: 5px
        }

        .sidebar-fixed .logo-wrapper {
            padding: 2.5rem
        }

        .sidebar-fixed .logo-wrapper img {
            max-height: 50px
        }

        @media (min-width:1200px) {

            .navbar,
            .page-footer,
            main {
                padding-left: 270px
            }
        }

        @media (max-width:1199.98px) {
            .sidebar-fixed {
                display: none
            }
        }

        .container-for-admin {
            background-color: #red !important;
        }

        .map-container {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-container iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
    </style>
</head>

<body>
    <div class="container-for-admin">
        <!--Main Navigation-->
        <header>
            @include('layouts.inc.adminnavbar')
            @include('layouts.inc.adminsidebar')
        </header>
        <!--Main Navigation-->

        <!--Main layout-->
        <main class="pt-5 mx-lg-5">
            @yield('content')
        </main>

        <!--Footer-->
        <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">
            @include('layouts.inc.adminfooter')
        </footer>

    </div>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/mdb.min.js') }}"></script>
    {{-- datatables js --}}
    <script type="text/javascript" src="{{ asset('assets/js/addons/datatables.min.js') }}"></script>
    <!-- Plugin file -->
    <script src="./js/addons/datatables.min.js"></script>


    @yield('scripts')
    {{-- bootstrap and jquery bundle --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}

</body>

</html>
