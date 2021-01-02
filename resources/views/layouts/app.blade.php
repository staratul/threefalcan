<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="img/favicon.png" rel="icon" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css?ver=1.14') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
</head>
<body>
    <div id="app">
        @include('inc.navbar')

        <main class="py-4">
            @yield('content')
        </main>

        @include('modals.auth')
    </div>

    <!--important Javascript-->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <script src="{{ asset('js/owl.carousel.js') }}"></script>

    <!--Manual Javascript-->
    <script>
        toastr.info('My name is Inigo Montoya!')
        $(window).scroll(function () {
            if ($(window).scrollTop() >= 50) {
                $(".filter-fixed").addClass("filter-fixed-top shadow-lg");
            } else {
                $(".filter-fixed").removeClass("filter-fixed-top shadow-lg");
            }
        });
    </script>
    <!--Manual Javascript-->
</body>
</html>
