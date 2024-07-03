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
                    <div class="col-12">
                        <div class="divider center_icon"><i class="linearicons-credit-card"></i></div>
                    </div>
                </div>
                <form action="{{ route('new-order') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading_s1">
                                <h4>Billing Details</h4>
                            </div>
                            <div class="form-group mb-3">
                                @if(isset($customer->name))
                                    <input type="text" class="form-control" name="name" value="{{ $customer->name }}" readonly required>
                                @else
                                    <input type="text" class="form-control" name="name"  placeholder="Enter Your Name." required>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                @if(isset($customer->phone))
                                    <input type="text" class="form-control" name="phone" value="{{ $customer->phone }}" readonly>
                                @else
                                    <input type="number" required class="form-control" name="phone"  placeholder="Inter Your Phone Number.">
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                @if(isset($customer->email))
                                    <input type="email" class="form-control" value="{{ $customer->email }}" name="email" readonly>
                                @else
                                    <input type="email" required class="form-control" name="email" placeholder="Inter Your Email Address.">
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                @if(isset($customer->address))
                                    <input type="text" class="form-control" value="{{ $customer->address }}" name="address" readonly>
                                @else
                                    <input type="text" class="form-control" name="address" placeholder="Inter Your Address.">
                                @endif
                            </div>

                            <div class="form-group mb-0">
                                <h4>Inter Product Recived Location</h4>
                                <div class="form-group mb-3">
                                    <div class="custom_select">
                                        <select name="area" class="form-control" required onchange="getPrice(this.value)">
                                            <option selected disabled>Select an District</option>
                                            @foreach($areas as $area)
                                                <option value="{{ $area->id }}">{{ $area->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <textarea rows="3" class="form-control" name="shippingAddress" placeholder="Product Recived Location." required></textarea>
                            </div>
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
                                            <td class="product-subtotal" id="subTotal">{{ Cart::subtotal() }}</td>
                                            <input type="hidden" value="{{ Cart::subtotal() }}" name="subTotal">
                                        </tr>
                                        <tr>
                                            <th>Total Tax(21%)</th>
                                            <td id="taxTotal">{{ $tax = Cart::tax() }}</td>
                                            <input type="hidden" value="{{ $tax }}" name="tax_total">
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            @php($shipping = 0)
                                            <input type="hidden" name="shipping_total" value="{{ $shipping }}" id="showPriceInput">
                                            <td><label for="free-shipping" id="showPrice">{{ $shipping }}</label></td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td class="product-subtotal" id="totalPayableInput">{{ $orderTotal = Cart::total() }}</td>
                                            <input type="hidden" value="{{ $orderTotal }}" name="order_total" id="totalPayableInput">
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
                                            <label class="form-check-label" for="exampleRadios3">Cash On Delivery</label>
                                            <p data-method="option3" class="payment-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. </p>
                                        </div>
                                        <div class="custome-radio">
                                            <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios4" value="option4">
                                            <label class="form-check-label" for="exampleRadios4">Online Payment</label>
                                            <p data-method="option4" class="payment-text">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                        <div class="custome-radio">
                                            <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios5" value="option5">
                                            <label class="form-check-label" for="exampleRadios5">Check Payment</label>
                                            <p data-method="option5" class="payment-text">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-fill-out btn-block">Place Order</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!-- END SECTION SHOP -->


    </div>
    <!-- END MAIN CONTENT -->

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the elements
        const subTotalElement = document.getElementById('subTotal');
        const taxTotalElement = document.getElementById('taxTotal');
        const shippingElement = document.getElementById('showPrice');
        const totalPayableElement = document.getElementById('totalPayableInput');

        // Parse the values
        const subTotal = parseFloat(subTotalElement.textContent.replace(/[^\d.-]/g, ''));
        const taxTotal = parseFloat(taxTotalElement.textContent.replace(/[^\d.-]/g, ''));
        const shipping = parseFloat(shippingElement.textContent.replace(/[^\d.-]/g, ''));

        // Calculate the total
        const totalPayable = subTotal + taxTotal + shipping;

        // Update the total payable element
        totalPayableElement.textContent = totalPayable.toFixed(2);
    });

    function getPrice(id) {
        $.ajax({
            type: "GET",
            url: "{{ route('get-price-by-area') }}",
            data: {id: id},
            dataType: "JSON",
            success: function(response) {
                var shippingTotal = Number(response.price);
                var subTotal = parseFloat($('#subTotal').text().replace(/[^\d.-]/g, ''));
                var taxAmount = parseFloat($('#taxTotal').text().replace(/[^\d.-]/g, ''));
                var totalPayable = subTotal + taxAmount + shippingTotal;
                $('#showPrice').text(shippingTotal.toFixed(2));
                $('#showPriceInput').val(shippingTotal.toFixed(2));
                $('#totalPayableInput').text(totalPayable.toFixed(2));
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                // Handle error if needed
            }
        });
    }
</script>
