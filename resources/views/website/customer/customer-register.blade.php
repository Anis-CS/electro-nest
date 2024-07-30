@extends('website.master')

@section('title')
    | Registration Page
@endsection

@section('body')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Register</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('customer.register') }}">Register</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START LOGIN SECTION -->
        <div class="login_register_wrap section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-md-10">
                        <div class="login_wrap">
                            <div class="padding_eight_all bg-white">
                                <div class="heading_s1">
                                    <h3>Create an Account</h3>
                                    <h4 class="text-danger text-center">{{ Session::get('message') }}</h4>
                                </div>
                                <form class="form-horizontal" action="{{ route('customer.register') }}" method="post">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <input type="text" required="" class="form-control" name="name"
                                            placeholder="Enter Your Name">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" required="" class="form-control" name="email"
                                            placeholder="Enter Your Email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input class="form-control" required="" type="number" name="phone"
                                            placeholder="Enter Your Phone">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input class="form-control" type="password" name="password"
                                            placeholder="Password">
                                    </div>
                                    <div class="login_footer form-group mb-3">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox"
                                                    id="exampleCheckbox2" value="Yes" required>
                                                <label class="form-check-label" for="exampleCheckbox2"><span>I agree to
                                                        terms &amp; Policy.</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-fill-out btn-block">Register</button>
                                    </div>
                                </form>
                                <div class="different_login">
                                    <span> or</span>
                                </div>
                                <div class="form-note text-center">Already have an account? <a
                                        href="{{ route('customer.login') }}">Log in</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END LOGIN SECTION -->


    </div>
    <!-- END MAIN CONTENT -->
@endsection
