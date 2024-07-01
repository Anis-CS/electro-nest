@extends('website.master')

@section('title')
| CheckOut
@endsection

@section('body')

    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Checkout</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('checkout')}}">Check Out</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="toggle_info">
                            <span><i class="fas fa-user"></i>Returning customer? <a href="{{route('customer.login')}}" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">Click here to login</a></span>
                        </div>
                        <div class="panel-collapse collapse login_form" id="loginform">
                            <div class="panel-body">
                                <p>If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                <form method="post">
                                    <div class="form-group mb-3">
                                        <input type="text" required="" class="form-control" name="email" placeholder="Username Or Email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input class="form-control" required="" type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="login_footer form-group mb-3">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox" id="remember" value="">
                                                <label class="form-check-label" for="remember"><span>Remember me</span></label>
                                            </div>
                                        </div>
                                        <a href="#">Forgot password?</a>
                                    </div>
                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-fill-out btn-block" name="login">Log in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="toggle_info">
                            <span><i class="fas fa-tag"></i>Have a coupon? <a href="#coupon" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">Click here to enter your code</a></span>
                        </div>
                        <div class="panel-collapse collapse coupon_form" id="coupon">
                            <div class="panel-body">
                                <p>If you have a coupon code, please apply it below.</p>
                                <div class="coupon field_form input-group">
                                    <input type="text" value="" class="form-control" placeholder="Enter Coupon Code..">
                                    <div class="input-group-append">
                                        <button class="btn btn-fill-out btn-sm" type="submit">Apply Coupon</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="medium_divider"></div>
                        <div class="divider center_icon"><i class="linearicons-credit-card"></i></div>
                        <div class="medium_divider"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="heading_s1">
                            <h4>Billing Details</h4>
                        </div>

                            <div class="form-group mb-3">
                                <label>Full Name</label>
                                @if(isset($customer->name))
                                    <input type="text" class="form-control" name="name" value="{{ $customer->name }}" readonly required>
                                @else
                                    <input type="text" class="form-control" name="name"  placeholder="Enter Your Name" required>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" required class="form-control" name="lname" placeholder="Last name *">
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" required type="text" name="cname" placeholder="Company Name">
                            </div>
                            <div class="form-group mb-3">
                                <div class="custom_select">
                                    <select class="form-control">
                                        <option value="">Select an option...</option>
                                        <option value="AX">Aland Islands</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="billing_address" required="" placeholder="Address *">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="billing_address2" required="" placeholder="Address line2">
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" required type="text" name="city" placeholder="City / Town *">
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" required type="text" name="state" placeholder="State / County *">
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" required type="text" name="zipcode" placeholder="Postcode / ZIP *">
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" required type="text" name="phone" placeholder="Phone *">
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" required type="text" name="email" placeholder="Email address *">
                            </div>
                            <div class="form-group mb-3">
                                <div class="chek-form">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="createaccount">
                                        <label class="form-check-label label_info" for="createaccount"><span>Create an account?</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group create-account mb-3">
                                <input class="form-control" required type="password" placeholder="Password" name="password" >
                            </div>
                            <div class="ship_detail">
                                <div class="form-group mb-3">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="differentaddress">
                                            <label class="form-check-label label_info" for="differentaddress"><span>Ship to a different address?</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="different_address">
                                    <div class="form-group mb-3">
                                        <input type="text" required class="form-control" name="fname" placeholder="First name *">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" required class="form-control" name="lname" placeholder="Last name *">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input class="form-control" required type="text" name="cname" placeholder="Company Name">
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="custom_select">
                                            <select class="form-control">
                                                <option value="">Select an option...</option>
                                                <option value="AX">Aland Islands</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AL">Albania</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" name="billing_address" required="" placeholder="Address *">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" name="billing_address2" required="" placeholder="Address line2">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input class="form-control" required type="text" name="city" placeholder="City / Town *">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input class="form-control" required type="text" name="state" placeholder="State / County *">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input class="form-control" required type="text" name="zipcode" placeholder="Postcode / ZIP *">
                                    </div>
                                </div>
                            </div>
                            <div class="heading_s1">
                                <h4>Additional information</h4>
                            </div>
                            <div class="form-group mb-0">
                                <textarea rows="5" class="form-control" placeholder="Order notes"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="order_review">
                            <div class="heading_s1">
                                <h4>Your Orders</h4>
                            </div>
                            <div class="table-responsive order_table">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cartsProduct as $product)
                                        <tr>
                                            <td>{{ $product->name }} <span class="product-qty">x {{ $product->qty }}</span></td>
                                            <td>{{ ($product->subtotal) }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>SubTotal</th>
                                        <td class="product-subtotal">{{ Cart::subtotal() }}</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td>Free Shipping</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td class="product-subtotal">$349.00</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment_method">
                                <div class="heading_s1">
                                    <h4>Payment</h4>
                                </div>
                                <div class="payment_option">
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" value="option3" checked="">
                                        <label class="form-check-label" for="exampleRadios3">Direct Bank Transfer</label>
                                        <p data-method="option3" class="payment-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. </p>
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios4">Check Payment</label>
                                        <p data-method="option4" class="payment-text">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios5" value="option5">
                                        <label class="form-check-label" for="exampleRadios5">Paypal</label>
                                        <p data-method="option5" class="payment-text">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-fill-out btn-block">Place Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->


    </div>
    <!-- END MAIN CONTENT -->

@endsection
