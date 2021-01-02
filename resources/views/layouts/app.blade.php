<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="img/favicon.png" rel="icon" />
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css?ver=1.14') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
</head>
<body>
    <div id="app">
         <div>
            <!--upper header start-->
            <nav class="navbar navbar-expand-lg navbar-first bg-black fixed-top filter-fixed p-3">
                <a class="navbar-brand" href="index.html"> <img class="img-fluid" src="img/logo.png" width="180px" /> </a>

                <button class="navbar-toggler navbar-toggler-right sidebar" type="button">
                    <i class="material-icons text-white font-2rem">menu</i>
                </button>
                <div id="ddmenu" class="display-none-media collapse navbar-collapse" id="navbarNavDropdown">
                    <div class="navbar-nav mr-auto"></div>
                    <form class="form-inline ml-auto">
                        <a class="nav-link ml-0 font-14" href=""> Home</a>
                        <a class="nav-link ml-0 font-14" href=""> Why Us</a>
                        <a class="nav-link ml-0 font-14" href=""> Our Projects</a>
                        <a class="nav-link ml-0 font-14" href=""> About Us</a>
                        <a class="nav-link ml-0 font-14" href=""> Contact Us</a>
                        <a class="nav-link ml-0 font-14" href=""> Blogs</a>
                        <div class="btn-group">
                            <button type="button" class="btn btn-no-color btn-block px-4" data-toggle="modal" data-target="#login-popup">Login/Signup</button>
                            <!--<button type="button" class="btn btn-no-color dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Login / Signup
                    </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item pl-2 pr-1" href="#!">Log Out</a> 
                        </div>-->
                        </div>
                    </form>
                </div>
            </nav>
            <!--upper header END-->

            <!--sidebar start-->
            <div class="sbac"></div>
            <div class="sidebar-show">
                <div class="sliderbgclass">
                    <button id="sidebar-close-btn" type="button" class="close" aria-label="Close">
                        <span aria-hidden="true" style="font-size: 35px;">&times;</span>
                    </button>
                    <div class="border-bottom bg-no-color">
                        <img class="img-fluid pt-3 pb-2 pl-3" src="img/logo.png" style="margin-bottom: 0.3rem; width: 160px;" />
                    </div>

                    <div class="row col-md-12 p-3 ml-0">
                        <a href="" class="sidebar-icon mt-3 p-0 col-md-12"> <span class="gray-text">Buy</span></a>
                        <a href="" class="sidebar-icon mt-3 p-0 col-md-12"> <span class="gray-text"> rent</span></a>
                        <a href="" class="sidebar-icon mt-3 p-0 col-md-12"> <span class="gray-text"> sell</span></a>
                        <a href="" class="sidebar-icon mt-3 p-0 col-md-12"> <span class="gray-text"> Home Loans</span></a>
                        <a href="" class="sidebar-icon mt-3 p-0 col-md-12"> <span class="gray-text"> +65 69 800 900</span></a>
                    </div>
                    <form class="row col-md-12 p-3 ml-0 border-top">
                        <div class="col-md-12 mt-4 btn-group">
                            <button type="button" class="btn btn-no-color btn-block" data-toggle="modal" data-target="#login-popup">Login/Signup</button>
                            <!-- <button type="button" class="btn btn-no-color dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Login/Signup
                    </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item pl-2 pr-1" href="#!">Log Out</a> 
                        </div>-->
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <main class="py-4">
            @yield('content')
        </main>

        <!--popup-START-->
        <div class="modal fade bd-example-modal-lg pr-0" id="login-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header pt-3 pb-2 mb-3" style="z-index: 10;">
                        <h3 class="caption text-black font-weight-bolder font-20 text-left mb-2">
                            <span class="login-content">Login</span>
                            <span class="signup-content" style="display: none;">Register</span>
                            <span class="forgot-content" style="display: none;">Forgot Password</span>
                        </h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="row card-row-set">
                        <div class="col-md-12">
                            <form id="loginform" class="py-3 login-content" method="post">
                                <div class="">
                                    <div class="text-center">
                                        <div class="jsom-message-alert"></div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control knocked-input border" name="email" type="email" placeholder="Your Email" id="example-email-input" />
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control knocked-input border" name="email" type="password" placeholder="Password" id="example-email-input" />
                                    </div>
                                    <button type="submit" class="btn btn-no-color btn-block text-black knocked-input mb-3" id="">Log In</button>

                                    <a class="float-right text-dark font-weight-bold" id="register-btn" href="#!">Register</a>
                                    <a class="text-dark font-weight-bold" id="forgot-btn" href="#!">Forget Password</a>
                                </div>
                            </form>

                            <form id="forgotform" class="py-3 forgot-content" method="post" style="display: none;">
                                <div class="">
                                    <div class="text-center">
                                        <div class="jsom-message-alert"></div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control knocked-input border" name="email" type="email" placeholder="Your Email" id="example-email-input" />
                                    </div>
                                    <button type="submit" class="btn btn-no-color btn-block text-black knocked-input mb-3" id="">Get New Password</button>
                                </div>
                            </form>

                            <form class="py-3 signup-content" method="post" id="formregister" name="formregister" style="display: none;">
                                <div class="form-group">
                                    <input type="text" name="registername" class="form-control knocked-input border" placeholder="Name" />
                                </div>

                                <div class="form-group">
                                    <input type="email" name="registeremail" class="form-control knocked-input border" placeholder="Email Address" />
                                </div>

                                <div class="form-group">
                                    <input type="text" name="registermobile" class="form-control knocked-input border" placeholder="Mobile No" />
                                </div>

                                <div class="form-group">
                                    <input type="password" name="registerpassword" id="registerpassword" class="form-control knocked-input border" placeholder="Password" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="registercpassword" class="form-control knocked-input border" placeholder="Confirm Password" />
                                </div>

                                <div class="form-group" id="registerdiv">
                                    <button type="submit" class="btn btn-no-color btn-block text-black knocked-input" name="">Register</button>
                                </div>

                                <p class="font-14 text-muted">By registering your details, you agree with our Terms &amp; Conditions , and Privacy and Cookie Policy.</p>
                                <hr />
                                <a class="text-dark font-weight-bold" id="login-btn" href="#!">Already have an account? | Login</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--popup-END-->
    </div>
    <!--important for bootstrap 4 slider-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!--important for bootstrap 4 slider-->

    <!--important for bootstrap 4 carasoul slider-->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <!--important for bootstrap 4  carasoul  slider-->

    <!--sidebar script start-->
    <script>
        $(".sidebar").click(function () {
            $(".sidebar-show").css("left", "0px");
        });
        $("#sidebar-close-btn").click(function () {
            $(".sidebar-show").css("left", "-100%");
        });
        $(".sbac").click(function () {
            $(".sidebar-show").css("left", "-100%");
        });

        $(".sidebar").click(function () {
            $(".sbac").addClass("sidebarclassadd");
        });
        $(".sbac").click(function () {
            $(".sbac").removeClass("sidebarclassadd");
        });
        $("#sidebar-close-btn").click(function () {
            $(".sbac").removeClass("sidebarclassadd");
        });
        $("#sidebar-close-btn").click(function () {
            $(".sbac").removeClass("sidebarclassadd");
        });

        $(".viewbenefits").click(function () {
            $(".viewbenefitsshow").css("right", "0px");
        });
    </script>

    <!--header-top-fixed start-->
    <script>
        $(window).scroll(function () {
            if ($(window).scrollTop() >= 50) {
                $(".filter-fixed").addClass("filter-fixed-top shadow-lg");
            } else {
                $(".filter-fixed").removeClass("filter-fixed-top shadow-lg");
            }
        });
    </script>
    <!--header-top-fixed End-->

    <script>
        $("#register-btn").click(function () {
            $(".login-content").hide();
            $(".signup-content").show();
            $(".forgot-content").hide();
        });

        $("#forgot-btn").click(function () {
            $(".forgot-content").show();
            $(".login-content").hide();
            $(".signup-content").hide();
        });

        $("#login-btn").click(function () {
            $(".login-content").show();
            $(".signup-content").hide();
            $(".forgot-content").hide();
        });
    </script>
</body>
</html>
