@extends('website.master')

@section('title')
    | Cart
@endsection

@section('body')

    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Shopping Cart</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('cart')}}">Cart</a></li>
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
                    <div class="col-12">
                        <div class="table-responsive shop_cart_table">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="{{ asset('/') }}website/assets/images/product_img1.jpg" alt="product1"></a></td>
                                    <td class="product-name" data-title="Product"><a href="#">Blue Dress For Woman</a></td>
                                    <td class="product-price" data-title="Price">$45.00</td>
                                    <td class="product-quantity" data-title="Quantity"><div class="quantity">
                                            <input type="button" value="-" class="minus">
                                            <input type="text" name="quantity" value="2" title="Qty" class="qty" size="4">
                                            <input type="button" value="+" class="plus">
                                        </div></td>
                                    <td class="product-subtotal" data-title="Total">$90.00</td>
                                    <td class="product-remove" data-title="Remove"><a href="#"><i class="ti-close"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="{{ asset('/') }}website/assets/images/product_img2.jpg" alt="product2"></a></td>
                                    <td class="product-name" data-title="Product"><a href="#">Lether Gray Tuxedo</a></td>
                                    <td class="product-price" data-title="Price">$55.00</td>
                                    <td class="product-quantity" data-title="Quantity"><div class="quantity">
                                            <input type="button" value="-" class="minus">
                                            <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                            <input type="button" value="+" class="plus">
                                        </div></td>
                                    <td class="product-subtotal" data-title="Total">$55.00</td>
                                    <td class="product-remove" data-title="Remove"><a href="#"><i class="ti-close"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="{{ asset('/') }}website/assets/images/product_img3.jpg" alt="product3"></a></td>
                                    <td class="product-name" data-title="Product"><a href="#">woman full sliv dress</a></td>
                                    <td class="product-price" data-title="Price">$68.00</td>
                                    <td class="product-quantity" data-title="Quantity"><div class="quantity">
                                            <input type="button" value="-" class="minus">
                                            <input type="text" name="quantity" value="3" title="Qty" class="qty" size="4">
                                            <input type="button" value="+" class="plus">
                                        </div></td>
                                    <td class="product-subtotal" data-title="Total">$204.00</td>
                                    <td class="product-remove" data-title="Remove"><a href="#"><i class="ti-close"></i></a></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="6" class="px-0">
                                        <div class="row g-0 align-items-center">

                                            <div class="col-lg-4 col-md-6 mb-3 mb-md-0">
                                                <div class="coupon field_form input-group">
                                                    <input type="text" value="" class="form-control form-control-sm" placeholder="Enter Coupon Code..">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-fill-out btn-sm" type="submit">Apply Coupon</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6  text-start  text-md-end">
                                                <button class="btn btn-line-fill btn-sm" type="submit">Update Cart</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="medium_divider"></div>
                        <div class="divider center_icon"><i class="ti-shopping-cart-full"></i></div>
                        <div class="medium_divider"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="heading_s1 mb-3">
                            <h6>Calculate Shipping</h6>
                        </div>
                        <form class="field_form shipping_calculator">
                            <div class="form-row">
                                <div class="form-group col-lg-12 mb-3">
                                    <div class="custom_select">
                                        <select class="form-control">
                                            <option value="">Choose a option...</option>
                                            <option value="AX">Aland Islands</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AL">Albania</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6 mb-3">
                                    <input required="required" placeholder="State / Country" class="form-control" name="name" type="text">
                                </div>
                                <div class="form-group col-lg-6 mb-3">
                                    <input required="required" placeholder="PostCode / ZIP" class="form-control" name="name" type="text">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-12 mb-3">
                                    <button class="btn btn-fill-line" type="submit">Update Totals</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="border p-3 p-md-4">
                            <div class="heading_s1 mb-3">
                                <h6>Cart Totals</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td class="cart_total_label">Cart Subtotal</td>
                                        <td class="cart_total_amount">$349.00</td>
                                    </tr>
                                    <tr>
                                        <td class="cart_total_label">Shipping</td>
                                        <td class="cart_total_amount">Free Shipping</td>
                                    </tr>
                                    <tr>
                                        <td class="cart_total_label">Total</td>
                                        <td class="cart_total_amount"><strong>$349.00</strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="#" class="btn btn-fill-out">Proceed To CheckOut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->


    </div>
    <!-- END MAIN CONTENT -->

@endsection
