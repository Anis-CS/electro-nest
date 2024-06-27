<header class="header_wrap">
    <div class="top-header light_skin bg_dark d-none d-md-block">
        <div class="custom-container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="header_topbar_info">
                        <div class="header_offer">
                            <span>Free Ground Shipping Over $250</span>
                        </div>
                        <div class="download_wrap">
                            <span class="me-3">Download App</span>
                            <ul class="icon_list text-center text-lg-start">
                                <li><a href="#"><i class="fab fa-apple"></i></a></li>
                                <li><a href="#"><i class="fab fa-android"></i></a></li>
                                <li><a href="#"><i class="fab fa-windows"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="lng_dropdown">
                            <select name="countries" class="custome_select">
                                <option value='en' data-title="English">English</option>
                                <option value='fn' data-title="France">Bangla</option>
                            </select>
                        </div>
                        <div class="ms-3">
                            <select name="countries" class="custome_select">
                                <option value='USD' data-title="USD">USD</option>
                                <option value='EUR' data-title="EUR">EUR</option>
                                <option value='GBR' data-title="GBR">GBR</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-header dark_skin">
        <div class="custom-container">
            <div class="nav_block">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img class="logo_dark ms-5" src="{{ asset('/') }}website/assets/images/el_logo1.png" style="height: 70px; width: 250px;" alt="logo" />
                </a>
                <div class="product_search_form rounded_input">
                    <form>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="custom_select">
                                    <select class="first_null">
                                        <option value="">All Category</option>
                                        <option value="Dresses">Dresses</option>
                                        <option value="Shirt-Tops">Shirt & Tops</option>
                                        <option value="T-Shirt">T-Shirt</option>
                                        <option value="Pents">Pents</option>
                                        <option value="Jeans">Jeans</option>
                                    </select>
                                </div>
                            </div>
                            <input class="form-control" placeholder="Search Product..." required="" type="text">
                            <button type="submit" class="search_btn2"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">

                    <!-- customer -->

                    @if (Session::get('customer_id'))

                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#"
                            data-bs-toggle="dropdown"><i class="ti-user"></i><span> {{ Session::get('customer_name') }}</span></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                <li style="border-bottom: 0px solid #3f3f3f;">
                                    <a href="#"><i class="ti-user"></i> Prodile</a>
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

                    <li><a href="{{ route('wishlist') }}" class="nav-link"><i class="linearicons-heart"></i></a></li>
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="{{ route('cart') }}"
                            data-bs-toggle="dropdown"><i class="linearicons-bag2"></i></a>
                        <div class="cart_box cart_right dropdown-menu dropdown-menu-right">
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
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase border-top border-bottom">
        <div class="custom-container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-3">
                    @include('website.includes.category-sidebar')
                </div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-9">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler side_navbar_toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSidetoggle" aria-expanded="false">
                            <span class="ion-android-menu"></span>
                        </button>
                        <div class="pr_search_icon">
                            <a href="javascript:;" class="nav-link pr_search_trigger"><i
                                    class="linearicons-magnifier"></i></a>
                        </div>
                        <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
                            <ul class="navbar-nav">
                                <li class="dropdown">
                                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="dropdown dropdown-mega-menu">
                                    <a class="dropdown-toggle nav-link" href="#"
                                        data-bs-toggle="dropdown">Shop</a>
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
                                                                    href="shop-right-sidebar.html">Right Sidebar</a>
                                                            </li>
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
                                                                    href="order-completed.html">Order Completed</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-4">
                                                        <ul>
                                                            <li class="dropdown-header">Speaker</li>
                                                            <li>
                                                                <a class="dropdown-item nav-link nav_item"
                                                                    href="shop-product-detail.html">Default</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item nav-link nav_item"
                                                                    href="shop-product-detail-left-sidebar.html">Left
                                                                    Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item nav-link nav_item"
                                                                    href="shop-product-detail-right-sidebar.html">Right
                                                                    Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item nav-link nav_item"
                                                                    href="shop-product-detail-thumbnails-left.html">Thumbnails
                                                                    Left</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-3">
                                                <ul>
                                                    <li class="dropdown-header">TV</li>
                                                    <li>
                                                        <a class="dropdown-item nav-link nav_item"
                                                            href="shop-cart.html">Cart</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item nav-link nav_item"
                                                            href="checkout.html">Checkout</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item nav-link nav_item"
                                                            href="my-account.html">My Account</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item nav-link nav_item"
                                                            href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item nav-link nav_item"
                                                            href="compare.html">compare</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item nav-link nav_item"
                                                            href="order-completed.html">Order Completed</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link" href="{{ route('website-product') }}">Product</a>
                                </li>
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
                                                <a class="dropdown-item nav-link nav_item"
                                                    href="{{ route('policytwo') }}"
                                                    {{ $policy->two_name == null ? 'hidden' : ' ' }}>{{ $policy->two_name }}</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item nav-link nav_item"
                                                    href="{{ route('policythree') }}"
                                                    {{ $policy->three_name == null ? 'hidden' : ' ' }}>{{ $policy->three_name }}</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item nav-link nav_item"
                                                    href="{{ route('policyfour') }}"
                                                    {{ $policy->four_name == null ? 'hidden' : ' ' }}>{{ $policy->four_name }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="nav-link nav_item" href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="contact_phone contact_support">
                            <i class="linearicons-phone-wave"></i>
                            <span>123-456-7689</span>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
