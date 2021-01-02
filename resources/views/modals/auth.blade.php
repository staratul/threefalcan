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
                        @csrf
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
                        @csrf
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

                    <form class="py-3 signup-content" method="POST" action="{{ route('register') }}" id="formregister" name="formregister" style="display: none;">
                        @csrf
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