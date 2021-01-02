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
    <script src="{{ asset('js/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/jquery-validation/additional-methods.min.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <script src="{{ asset('js/owl.carousel.js') }}"></script>

    <!--Manual Javascript-->
    <script>
        $(window).scroll(function () {
            if ($(window).scrollTop() >= 50) {
                $(".filter-fixed").addClass("filter-fixed-top shadow-lg");
            } else {
                $(".filter-fixed").removeClass("filter-fixed-top shadow-lg");
            }
        });
        $(() => {
            $('#formregister').validate({
                rules: {
                    name: {
                        required: true,
                        string: true,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 8
                    },
                    mobile: {
                        required: true
                    },
                },
                messages: {
                    email: {
                        required: "Please enter a email address",
                        email: "Please enter a vaild email address"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    name: "Please enter your full name",
                    mobile: "Please enter a valid mobile number"
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#formregister").on("submit", function(e) {
                e.preventDefault();
                if($("#formregister").valid()) {
                    $.ajax({
                        url: "{{ route('register') }}",
                        method: "POST",
                        data: $("#formregister").serialize(),
                        success: function(response) {
                            toastr.success("success");
                        },
                        error: function(reject) {
                            $.each(reject.responseJSON.errors, function (key, item) {
                                toastr.error(item);
                            });
                        }
                    });
                }
            });
        });
    </script>
    <!--Manual Javascript-->
</body>
</html>
