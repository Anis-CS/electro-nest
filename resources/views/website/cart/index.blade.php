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
                                    <th class="product-name">Product Details</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($carts as $cart)
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="{{ asset($cart->options->image) }}" alt="product1"></a></td>
                                            <td class="product-name" data-title="Product"><a href="#">
                                                    <b>Name : </b> {{ $cart->name }} <br/>
                                                    <b>Code :</b> {{$cart->weight}} <br/>
                                                    <b>Color :</b> {{$cart->options->color}} &
                                                    <b>Size :</b> {{$cart->options->size}} <br/>
                                                </a>

                                            </td>
                                            <td class="product-price" data-title="Price">{{ $cart->price }}</td>
                                            <form action="{{ route('carts.update', $cart->rowId) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <td class="product-quantity" data-title="Quantity"><div class="quantity">
                                                    <input type="button" value="-" class="minus">
                                                    <input type="text" name="quantity" min="1" value="{{ $cart->qty }}" title="Qty" class="qty" size="4">
                                                    <input type="button" value="+" class="plus">
                                                    <input type="submit" class="btn btn-success btn-sm" value="Update"/>
                                                </div></td>
                                            </form>
                                            <td class="product-subtotal" data-title="Total">{{ $cart->price * $cart->qty }}</td>
                                            <form action="{{ route('carts.destroy',$cart->rowId) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <td class="product-remove" data-title="Remove"><button type="submit"><i class="ti-close"></i></button></td>
                                            </form>

                                        </tr>
                                    @endforeach
                                </tbody>
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
                                        <td class="cart_total_amount">{{ Cart::subtotal() }}</td>
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
