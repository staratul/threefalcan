@extends('layouts.app')

@section('content')

        <!--Slider Section Start-->
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/s1.jpg" class="d-block w-100" alt="" />
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="font-weight-bold font-3rem">
                            <strong>
                                We're a digital <br />
                                agency.
                            </strong>
                        </h2>
                        <p class="font-16 text-light">
                            It is a long established fact that a reader <br />
                            will be distracted by the readable content of a page.
                        </p>
                        <a href="#!" class="btn btn-no-color">Getting Started</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/s2.jpg" class="d-block w-100" alt="" />
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="font-weight-bold font-3rem"><strong>Future Vision.</strong></h2>
                        <p class="font-16 text-light">
                            It is a long established fact that a reader <br />
                            will be distracted by the readable content of a page.
                        </p>
                        <a href="#!" class="btn btn-no-color">Getting Started</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/s3.jpg" class="d-block w-100" alt="" />
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="font-weight-bold font-3rem"><strong>Product Design.</strong></h2>
                        <p class="font-16 text-light">
                            There are many variations of passages of available, <br />
                            but the majority alteration in some form.
                        </p>
                        <a href="#!" class="btn btn-no-color">Getting Started</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/s4.jpg" class="d-block w-100" alt="" />
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="font-weight-bold font-3rem"><strong>Inovative Solutions.</strong></h2>
                        <p class="font-16 text-light">
                            The generated Lorem Ipsum is therefore always <br />
                            free from repetition, injected humour.
                        </p>
                        <a href="#!" class="btn btn-no-color">Getting Started</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Slider Section End-->

        <!--About Descripition Section Start-->
        <div class="section-white border-bottom">
            <div class="container pb-5">
                <h2 class="font-weight-bold font-3rem">
                    <strong>About Us<span class="text-theme-color">.</span></strong>
                </h2>
                <p class="font-16 text-dark">Few Things of About Us</p>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="">
                            <i class="fas fa-question-circle font-25 abt-icon"></i>
                            <h4 class="card-title mt-2">
                                <span class="font-25 font-weight-bold" title=""> Who we are </span>
                            </h4>
                            <div class="py-1">
                                <div class="caption text-muted font-14">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward will have multiple touchpoints for offshoring.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="">
                            <i class="fas fa-lightbulb font-25 abt-icon"></i>
                            <h5 class="card-title mt-2">
                                <span class="font-25 font-weight-bold" title=""> Our philosophy </span>
                            </h5>
                            <div class="py-1">
                                <div class="caption text-muted font-14">A new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="">
                            <i class="fas fa-tools font-25 abt-icon"></i>
                            <h5 class="card-title mt-2">
                                <span class="font-25 font-weight-bold" title=""> How we work </span>
                            </h5>
                            <div class="py-1">
                                <div class="caption text-muted font-14">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps.</div>
                            </div>
                        </div>
                    </div>
                    <a href="#!" class="btn btn-no-color">See More</a>
                </div>
            </div>
        </div>
        <!--About Descripition Section End-->

        <!--Services Section Start-->
        <div class="section-white">
            <div class="container">
                <h2 class="font-weight-bold font-3rem">
                    <strong>Services<span class="text-theme-color">.</span></strong>
                </h2>
                <p class="font-16 text-dark">WE WORK WITH YOU, NOT FOR YOU</p>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="p-4 shadow mb-5 bg-black text-white">
                            <h2 class="font-weight-bold mb-0 font-14">
                                <strong>Logo Design <i class="fas fa-arrow-right float-right text-theme-color"></i> </strong>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 shadow mb-5 bg-black text-white">
                            <h2 class="font-weight-bold mb-0 font-14">
                                <strong>Banner Design <i class="fas fa-arrow-right float-right text-theme-color"></i> </strong>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 shadow mb-5 bg-black text-white">
                            <h2 class="font-weight-bold mb-0 font-14">
                                <strong>Poster Design <i class="fas fa-arrow-right float-right text-theme-color"></i> </strong>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 shadow mb-5 bg-black text-white">
                            <h2 class="font-weight-bold mb-0 font-14">
                                <strong>Flyer Design <i class="fas fa-arrow-right float-right text-theme-color"></i> </strong>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 shadow mb-5 bg-black text-white">
                            <h2 class="font-weight-bold mb-0 font-14">
                                <strong>UI/UX Design<i class="fas fa-arrow-right float-right text-theme-color"></i> </strong>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 shadow mb-5 bg-black text-white">
                            <h2 class="font-weight-bold mb-0 font-14">
                                <strong>Visiting Card Design<i class="fas fa-arrow-right float-right text-theme-color"></i> </strong>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 shadow mb-5 bg-black text-white">
                            <h2 class="font-weight-bold mb-0 font-14">
                                <strong>Company Profile pdf Design<i class="fas fa-arrow-right float-right text-theme-color"></i> </strong>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 shadow mb-5 bg-black text-white">
                            <h2 class="font-weight-bold mb-0 font-14">
                                <strong>Gif/Video Ads Design <i class="fas fa-arrow-right float-right text-theme-color"></i> </strong>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 shadow mb-5 bg-black text-white">
                            <h2 class="font-weight-bold mb-0 font-14">
                                <strong>Website Design <i class="fas fa-arrow-right float-right text-theme-color"></i> </strong>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Services Section End-->

        <!--Technology Section Start-->
        <div class="section-white">
            <div class="container">
                <h2 class="font-weight-bold font-3rem">
                    <strong>Technology<span class="text-theme-color">.</span></strong>
                </h2>
                <p class="font-16 text-dark">THINGS WE'VE USE</p>
                <div class="row mt-5">
                    <div class="col">
                        <div class="stuff-card">
                            <i class="fab fa-html5 stuff-icon"></i>
                            <p class="text-center text-Muted caption font-16 mt-4">Html</p>
                            <a href="#!" class="text-theme-color font-weight-bold font-14">5 PROGRAMS <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="stuff-card">
                            <i class="fab fa-css3-alt stuff-icon"></i>
                            <p class="text-center text-Muted caption font-16 mt-4">Css</p>
                            <a href="#!" class="text-theme-color font-weight-bold font-14">5 PROGRAMS <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="stuff-card">
                            <i class="fab fa-bootstrap stuff-icon"></i>
                            <p class="text-center text-Muted caption font-16 mt-4">Bootstrap</p>
                            <a href="#!" class="text-theme-color font-weight-bold font-14">5 PROGRAMS <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="stuff-card">
                            <i class="fas fa-layer-group stuff-icon"></i>
                            <p class="text-center text-Muted caption font-16 mt-4">Material Css</p>
                            <a href="#!" class="text-theme-color font-weight-bold font-14">5 PROGRAMS <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="stuff-card">
                            <i class="fab fa-wordpress stuff-icon"></i>
                            <p class="text-center text-Muted caption font-16 mt-4">Wordpress</p>
                            <a href="#!" class="text-theme-color font-weight-bold font-14">5 PROGRAMS <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="stuff-card">
                            <i class="fab fa-react stuff-icon"></i>
                            <p class="text-center text-Muted caption font-16 mt-4">React</p>
                            <a href="#!" class="text-theme-color font-weight-bold font-14">5 PROGRAMS <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="stuff-card">
                            <i class="fab fa-angular stuff-icon"></i>
                            <p class="text-center text-Muted caption font-16 mt-4">Angular</p>
                            <a href="#!" class="text-theme-color font-weight-bold font-14">5 PROGRAMS <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="stuff-card">
                            <i class="fab fa-php stuff-icon"></i>
                            <p class="text-center text-Muted caption font-16 mt-4">php</p>
                            <a href="#!" class="text-theme-color font-weight-bold font-14">5 PROGRAMS <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="stuff-card">
                            <i class="fab fa-node stuff-icon"></i>
                            <p class="text-center text-Muted caption font-16 mt-4">Node js</p>
                            <a href="#!" class="text-theme-color font-weight-bold font-14">5 PROGRAMS <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="stuff-card">
                            <i class="fab fa-microsoft stuff-icon"></i>
                            <p class="text-center text-Muted caption font-16 mt-4">.net</p>
                            <a href="#!" class="text-theme-color font-weight-bold font-14">5 PROGRAMS <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Technology Section End-->

        <div class="section-white">
            <div class="container">
                <h2 class="font-weight-bold font-3rem">
                    <strong>Works<span class="text-theme-color">.</span></strong>
                </h2>
                <p class="font-16 text-dark">THINGS WE'VE MADE</p>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="p-4 shadow mb-5 bg-black text-white">
                            <h2 class="font-weight-bold mb-0 font-14">
                                <strong>Logo Design <i class="fas fa-arrow-right float-right text-theme-color"></i> </strong>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 shadow mb-5 bg-black text-white">
                            <h2 class="font-weight-bold mb-0 font-14">
                                <strong>Banner Design <i class="fas fa-arrow-right float-right text-theme-color"></i> </strong>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 shadow mb-5 bg-black text-white">
                            <h2 class="font-weight-bold mb-0 font-14">
                                <strong>Poster Design <i class="fas fa-arrow-right float-right text-theme-color"></i> </strong>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 shadow mb-5 bg-black text-white">
                            <h2 class="font-weight-bold mb-0 font-14">
                                <strong>Flyer Design <i class="fas fa-arrow-right float-right text-theme-color"></i> </strong>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 shadow mb-5 bg-black text-white">
                            <h2 class="font-weight-bold mb-0 font-14">
                                <strong>UI/UX Design<i class="fas fa-arrow-right float-right text-theme-color"></i> </strong>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 shadow mb-5 bg-black text-white">
                            <h2 class="font-weight-bold mb-0 font-14">
                                <strong>Visiting Card Design<i class="fas fa-arrow-right float-right text-theme-color"></i> </strong>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 shadow mb-5 bg-black text-white">
                            <h2 class="font-weight-bold mb-0 font-14">
                                <strong>Company Profile pdf Design<i class="fas fa-arrow-right float-right text-theme-color"></i> </strong>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 shadow mb-5 bg-black text-white">
                            <h2 class="font-weight-bold mb-0 font-14">
                                <strong>Gif/Video Ads Design <i class="fas fa-arrow-right float-right text-theme-color"></i> </strong>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 shadow mb-5 bg-black text-white">
                            <h2 class="font-weight-bold mb-0 font-14">
                                <strong>Social Media Post Design <i class="fas fa-arrow-right float-right text-theme-color"></i> </strong>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
