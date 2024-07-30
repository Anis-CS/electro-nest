<!-- START HEADER -->
<header class="header_wrap fixed-top header_with_topbar">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                        <div class="lng_dropdown me-2">
                            <select name="countries" class="custome_select">
                                <option value='en' data-title="English">English</option>
                                <option value='us' data-title="United States">Bangla</option>
                            </select>
                        </div>
                        <div class="me-3">
                            <select name="countries" class="custome_select">
                                <option value='USD' data-title="USD">USD</option>
                                <option value='EUR' data-title="EUR">EUR</option>
                                <option value='GBR' data-title="GBR">GBR</option>
                            </select>
                        </div>
                        <ul class="contact_detail text-center text-lg-start">
                            <li><i class="ti-mobile"></i><span>123-456-7890</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-end">
                        <ul class="header_list">
                            <li><a href="{{ route('wishlist') }}"><i class="ti-heart"></i><span>Wishlist</span></a></li>

                            <!-- customer -->
                            @if (Session::get('customer_id'))
                                <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#"
                                                                      data-bs-toggle="dropdown"><i class="ti-user"></i><span>
                                            {{ Session::get('customer_name') }}</span></a>
                                    <div class="cart_box dropdown-menu dropdown-menu-right">
                                        <ul class="cart_list">
                                            <li style="border-bottom: 0px solid #3f3f3f;">
                                                <a href="{{ route('customerProfile') }}"><i class="ti-user"></i> Profile</a>
                                            </li>
                                            <li style="border-bottom: 0px solid #3f3f3f;">
                                                <a href="{{route('customer.logout')}}"><i class="fa fa-sign-in-alt"></i> Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('customer.login') }}"><i class="ti-user"></i><span></span></a>
                                </li>
                        @endif
                        <!-- customer -->


                            <li class="dropdown">
                                <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown">Term
                                    & Conditon</a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li>
                                            <a class="dropdown-item nav-link nav_item"
                                               href="{{ route('policyone') }}">{{ $policy->one_name }}</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item nav-link nav_item" href="{{ route('policytwo') }}"
                                                {{ $policy->two_name == null ? 'hidden' : ' ' }}>{{ $policy->two_name }}</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item nav-link nav_item" href="{{ route('policythree') }}"
                                                {{ $policy->three_name == null ? 'hidden' : ' ' }}>{{ $policy->three_name }}</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item nav-link nav_item" href="{{ route('policyfour') }}"
                                                {{ $policy->four_name == null ? 'hidden' : ' ' }}>{{ $policy->four_name }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img class="logo_dark" src="{{ asset('/') }}website/assets/images/el_logo1.png" style="height: 60px; width: 250px;" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-expanded="false">
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end me-5" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="dropdown">
                            <a class="nav-link active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="dropdown dropdown-mega-menu">
                            <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown">Shop</a>
                            <div class="dropdown-menu">
                                <ul class="mega-menu d-lg-flex">
                                    <li class="mega-menu-col col-lg-9">
                                        <ul class="d-lg-flex">
                                            <li class="mega-menu-col col-lg-4">
                                                <ul>
                                                    <li class="dropdown-header">Phone</li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                           href="shop-list.html">shop List view</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                           href="shop-list-left-sidebar.html">shop List Left
                                                            Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                           href="shop-list-right-sidebar.html">shop List Right
                                                            Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                           href="shop-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                           href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                           href="shop-load-more.html">Shop Load More</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-4">
                                                <ul>
                                                    <li class="dropdown-header">Laptop</li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                           href="shop-cart.html">Cart</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                           href="checkout.html">Checkout</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                           href="my-account.html">My Account</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                           href="wishlist.html">Wishlist</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                           href="compare.html">compare</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                           href="order-completed.html">Order Completed</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-4">
                                                <ul>
                                                    <li class="dropdown-header">Speaker</li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                           href="shop-product-detail.html">Default</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                           href="shop-product-detail-left-sidebar.html">Left
                                                            Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                           href="shop-product-detail-right-sidebar.html">Right
                                                            Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                           href="shop-product-detail-thumbnails-left.html">Thumbnails
                                                            Left</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">TV</li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="shop-cart.html">Cart</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="checkout.html">Checkout</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="my-account.html">My
                                                    Account</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="wishlist.html">Wishlist</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="compare.html">compare</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="order-completed.html">Order Completed</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link" href="{{ route('website-product') }}">Product</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown">Term &
                                Conditon</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li>
                                        <a class="dropdown-item nav-link nav_item"
                                           href="{{ route('policyone') }}">{{ $policy->one_name }}</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item nav-link nav_item" href="{{ route('policytwo') }}"
                                            {{ $policy->two_name == null ? 'hidden' : ' ' }}>{{ $policy->two_name }}</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item nav-link nav_item" href="{{ route('policythree') }}"
                                            {{ $policy->three_name == null ? 'hidden' : ' ' }}>{{ $policy->three_name }}</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item nav-link nav_item" href="{{ route('policyfour') }}"
                                            {{ $policy->four_name == null ? 'hidden' : ' ' }}>{{ $policy->four_name }}</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="nav-link nav_item" href="{{ route('contact') }}">Contact Us</a></li>

                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:;" class="nav-link search_trigger"><i
                                class="linearicons-magnifier"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                            <form>
                                <input type="text" placeholder="Search" class="form-control" id="search_input">
                                <button type="submit" class="search_icon"><i
                                        class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <div class="search_overlay"></div>
                    </li>
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="{{ route('cart') }}"
                                                          data-bs-toggle="dropdown"><i class="linearicons-cart"></i></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img
                                            src="{{ asset('/') }}website/assets/images/cart_thamb1.jpg"
                                            alt="cart_thumb1">Variable product 001</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span
                                                class="price_symbole">$</span></span>78.00</span>
                                </li>
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img
                                            src="{{ asset('/') }}website/assets/images/cart_thamb2.jpg"
                                            alt="cart_thumb2">Ornare sed consequat</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span
                                                class="price_symbole">$</span></span>81.00</span>
                                </li>
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span
                                            class="price_symbole">$</span></span>159.00</p>
                                <p class="cart_buttons"><a href="#" class="btn btn-fill-line view-cart">View
                                        Cart</a><a href="#" class="btn btn-fill-out checkout">Checkout</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
