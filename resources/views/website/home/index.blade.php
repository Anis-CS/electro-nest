@extends('website.home-master')

@section('title')
    | Home
@endsection

@section('body')
    <!-- START SECTION BANNER -->
    <div class="mt-4 staggered-animation-wrap">
        <div class="custom-container">
            <div class="row">
                <div class="col-lg-7 offset-lg-3">
                    <div class="banner_section shop_el_slider">
                        <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-bs-ride="carousel">
                            @foreach($offers as $offer)
                            <div class="carousel-inner">
                                <div class="carousel-item active background_bg"
                                    data-img-src="{{ asset($offer->image) }}">
                                    <div class="banner_slide_content banner_content_inner">
                                        <div class="col-lg-7 col-10">
                                            <div class="banner_content3 overflow-hidden">
                                                <h5 class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s">Get up to {{ $offer->percentage }}% off!</h5>
                                                <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">{{ $offer->name }}</h2>
                                                <a class="btn btn-fill-out btn-radius staggered-animation text-uppercase" href="{{route('product-offer', ['id' => $offer->id])}}" data-animation="slideInLeft" data-animation-delay="1.5s">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <ol class="carousel-indicators indicators_style3">
                                <li data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#carouselExampleControls" data-bs-slide-to="1"></li>
                                <li data-bs-target="#carouselExampleControls" data-bs-slide-to="2"></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 d-none d-lg-block">
                    <div class="shop_banner2 el_banner1">
                        <a href="#" class="hover_effect1">
                            <div class="el_title text_white">
                                <h6>iphone Collection</h6>
                                <span>25% off</span>
                            </div>
                            <div class="el_img">
                                <img src="{{ asset('/') }}website/assets/images/shop_banner_img6.png"
                                    alt="shop_banner_img6">
                            </div>
                        </a>
                    </div>
                    <div class="shop_banner2 el_banner2">
                        <a href="#" class="hover_effect1">
                            <div class="el_title text_white">
                                <h6>MAC Computer</h6>
                                <span><u>Shop Now</u></span>
                            </div>
                            <div class="el_img">
                                <img src="{{ asset('/') }}website/assets/images/shop_banner_img7.png"
                                    alt="shop_banner_img7">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION BANNER -->

    <!-- END MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section small_pt pb-0">
            <div class="custom-container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading_tab_header">
                                    <div class="heading_s2">
                                        <h4>Latest Products</h4>
                                    </div>
                                    <div class="tab-style2">
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#tabmenubar" aria-expanded="false">
                                            <span class="ion-android-menu"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tab_slider">
                                    <div class="tab-pane fade show active" id="arrival" role="tabpanel"
                                        aria-labelledby="arrival-tab">
                                        <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1"
                                            data-loop="true" data-margin="20"
                                            data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                            @foreach ($products as $product)
                                                <div class="item">
                                                    <div class="product_wrap">
                                                        <span class="pr_flash">New</span>
                                                        <div class="product_img">
                                                            <a href="{{ route('product.details', ['id' => $product->id]) }}">
                                                                <img src="{{ asset($product->image) }}" alt="el_img1">

                                                                @foreach ($productImages as $productImage)
                                                                    @if ($product->id == $productImage->product_id)
                                                                        <img class="product_hover_img"
                                                                            src="{{ asset($productImage->other_images) }}"
                                                                            alt="el_hover_img1">
                                                                    @endif
                                                                @endforeach
                                                            </a>
                                                            <div class="product_action_box">
                                                                <ul class="list_none pr_action_btn">
                                                                    <li class="add-to-cart"><a href="#"><i
                                                                                class="icon-basket-loaded"></i> Add To
                                                                            Cart</a></li>
                                                                    <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                                class="icon-shuffle"></i></a></li>
                                                                    <li><a href="shop-quick-view.html"
                                                                            class="popup-ajax"><i
                                                                                class="icon-magnifier-add"></i></a></li>
                                                                    <li><a href="#"><i class="icon-heart"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product_info">
                                                            <h6 class="product_title"><a
                                                                    href="{{ route('product.details', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                            </h6>
                                                            <div class="product_price">
                                                                <span class="price">BD.{{ $product->selling_price }}TK</span>
                                                                <del>BD.{{ $product->regular_price }}TK</del>
                                                                <div class="on_sale">
                                                                    <span>Offer:{{ $product->discount_amount }}{{ $product->discount_type == 'fixed' ? 'TK' : '%' }} Off</span>
                                                                </div>
                                                            </div>
                                                            <div class="rating_wrap">
                                                                <div class="rating">
                                                                    <div class="product_rate" style="width:80%"></div>
                                                                </div>
                                                                <span class="rating_num">(21)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="sellers" role="tabpanel"
                                        aria-labelledby="sellers-tab">
                                        <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1"
                                            data-loop="true" data-margin="20"
                                            data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="{{ asset('/') }}website/assets/images/el_img7.jpg"
                                                                alt="el_img7">
                                                            <img class="product_hover_img"
                                                                src="{{ asset('/') }}website/assets/images/el_hover_img7.jpg"
                                                                alt="el_hover_img7">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                                                </li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Audio
                                                                Theaters</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:80%"></div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <span class="pr_flash bg-danger">Hot</span>
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="{{ asset('/') }}website/assets/images/el_img8.jpg"
                                                                alt="el_img8">
                                                            <img class="product_hover_img"
                                                                src="{{ asset('/') }}website/assets/images/el_hover_img8.jpg"
                                                                alt="el_hover_img8">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                                                </li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">Surveillance camera</a>
                                                        </h6>
                                                        <div class="product_price">
                                                            <span class="price">$55.00</span>
                                                            <del>$95.00</del>
                                                            <div class="on_sale">
                                                                <span>25% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="{{ asset('/') }}website/assets/images/el_img9.jpg"
                                                                alt="el_img9">
                                                            <img class="product_hover_img"
                                                                src="{{ asset('/') }}website/assets/images/el_hover_img9.jpg"
                                                                alt="el_hover_img9">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                                                </li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">oppo
                                                                Reno3 Pro</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$68.00</span>
                                                            <del>$99.00</del>
                                                            <div class="on_sale">
                                                                <span>20% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:87%"></div>
                                                            </div>
                                                            <span class="rating_num">(25)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <span class="pr_flash bg-success">Sale</span>
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="{{ asset('/') }}website/assets/images/el_img10.jpg"
                                                                alt="el_img10">
                                                            <img class="product_hover_img"
                                                                src="{{ asset('/') }}website/assets/images/el_hover_img10.jpg"
                                                                alt="el_hover_img10">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                                                </li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">classical Headphone</a>
                                                        </h6>
                                                        <div class="product_price">
                                                            <span class="price">$68.00</span>
                                                            <del>$99.00</del>
                                                            <div class="on_sale">
                                                                <span>20% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:87%"></div>
                                                            </div>
                                                            <span class="rating_num">(25)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="{{ asset('/') }}website/assets/images/el_img11.jpg"
                                                                alt="el_img11">
                                                            <img class="product_hover_img"
                                                                src="{{ asset('/') }}website/assets/images/el_hover_img11.jpg"
                                                                alt="el_hover_img11">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                                                </li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">Basics High-Speed HDMI</a>
                                                        </h6>
                                                        <div class="product_price">
                                                            <span class="price">$69.00</span>
                                                            <del>$89.00</del>
                                                            <div class="on_sale">
                                                                <span>20% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:70%"></div>
                                                            </div>
                                                            <span class="rating_num">(22)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="{{ asset('/') }}website/assets/images/el_img12.jpg"
                                                                alt="el_img12">
                                                            <img class="product_hover_img"
                                                                src="{{ asset('/') }}website/assets/images/el_hover_img12.jpg"
                                                                alt="el_hover_img12">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                                                </li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Sound
                                                                Equipment for Low</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:80%"></div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="featured" role="tabpanel"
                                        aria-labelledby="featured-tab">
                                        <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1"
                                            data-loop="true" data-margin="20"
                                            data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <span class="pr_flash bg-danger">Hot</span>
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="{{ asset('/') }}website/assets/images/el_img8.jpg"
                                                                alt="el_img8">
                                                            <img class="product_hover_img"
                                                                src="{{ asset('/') }}website/assets/images/el_hover_img8.jpg"
                                                                alt="el_hover_img8">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                                                </li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">Surveillance camera</a>
                                                        </h6>
                                                        <div class="product_price">
                                                            <span class="price">$55.00</span>
                                                            <del>$95.00</del>
                                                            <div class="on_sale">
                                                                <span>25% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="{{ asset('/') }}website/assets/images/el_img4.jpg"
                                                                alt="el_img4">
                                                            <img class="product_hover_img"
                                                                src="{{ asset('/') }}website/assets/images/el_hover_img4.jpg"
                                                                alt="el_hover_img4">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                                                </li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Audio
                                                                Equipment</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$69.00</span>
                                                            <del>$89.00</del>
                                                            <div class="on_sale">
                                                                <span>20% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:70%"></div>
                                                            </div>
                                                            <span class="rating_num">(22)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="{{ asset('/') }}website/assets/images/el_img11.jpg"
                                                                alt="el_img11">
                                                            <img class="product_hover_img"
                                                                src="{{ asset('/') }}website/assets/images/el_hover_img11.jpg"
                                                                alt="el_hover_img11">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                                                </li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">Basics High-Speed HDMI</a>
                                                        </h6>
                                                        <div class="product_price">
                                                            <span class="price">$69.00</span>
                                                            <del>$89.00</del>
                                                            <div class="on_sale">
                                                                <span>20% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:70%"></div>
                                                            </div>
                                                            <span class="rating_num">(22)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="{{ asset('/') }}website/assets/images/el_img1.jpg"
                                                                alt="el_img1">
                                                            <img class="product_hover_img"
                                                                src="{{ asset('/') }}website/assets/images/el_hover_img1.jpg"
                                                                alt="el_hover_img1">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                                                </li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Red &
                                                                Black Headphone</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:80%"></div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="{{ asset('/') }}website/assets/images/el_img7.jpg"
                                                                alt="el_img7">
                                                            <img class="product_hover_img"
                                                                src="{{ asset('/') }}website/assets/images/el_hover_img7.jpg"
                                                                alt="el_hover_img7">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                                                </li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Audio
                                                                Theaters</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:80%"></div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <span class="pr_flash bg-danger">Hot</span>
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="{{ asset('/') }}website/assets/images/el_img6.jpg"
                                                                alt="el_img6">
                                                            <img class="product_hover_img"
                                                                src="{{ asset('/') }}website/assets/images/el_hover_img6.jpg"
                                                                alt="el_hover_img6">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                                                </li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">Samsung Smart Phone</a>
                                                        </h6>
                                                        <div class="product_price">
                                                            <span class="price">$55.00</span>
                                                            <del>$95.00</del>
                                                            <div class="on_sale">
                                                                <span>25% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="special" role="tabpanel"
                                        aria-labelledby="special-tab">
                                        <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1"
                                            data-loop="true" data-margin="20"
                                            data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="{{ asset('/') }}website/assets/images/el_img2.jpg"
                                                                alt="el_img2">
                                                            <img class="product_hover_img"
                                                                src="{{ asset('/') }}website/assets/images/el_hover_img2.jpg"
                                                                alt="el_hover_img2">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                                                </li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Smart
                                                                Watch External</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$55.00</span>
                                                            <del>$95.00</del>
                                                            <div class="on_sale">
                                                                <span>25% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="{{ asset('/') }}website/assets/images/el_img5.jpg"
                                                                alt="el_img5">
                                                            <img class="product_hover_img"
                                                                src="{{ asset('/') }}website/assets/images/el_hover_img5.jpg"
                                                                alt="el_hover_img5">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                                                </li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Smart
                                                                Televisions</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:80%"></div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="{{ asset('/') }}website/assets/images/el_img9.jpg"
                                                                alt="el_img9">
                                                            <img class="product_hover_img"
                                                                src="{{ asset('/') }}website/assets/images/el_hover_img9.jpg"
                                                                alt="el_hover_img9">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                                                </li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">oppo
                                                                Reno3 Pro</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$68.00</span>
                                                            <del>$99.00</del>
                                                            <div class="on_sale">
                                                                <span>20% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:87%"></div>
                                                            </div>
                                                            <span class="rating_num">(25)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="{{ asset('/') }}website/assets/images/el_img7.jpg"
                                                                alt="el_img7">
                                                            <img class="product_hover_img"
                                                                src="{{ asset('/') }}website/assets/images/el_hover_img7.jpg"
                                                                alt="el_hover_img7">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                                                </li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Audio
                                                                Theaters</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:80%"></div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="{{ asset('/') }}website/assets/images/el_img5.jpg"
                                                                alt="el_img5">
                                                            <img class="product_hover_img"
                                                                src="{{ asset('/') }}website/assets/images/el_hover_img5.jpg"
                                                                alt="el_hover_img5">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                                                </li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Smart
                                                                Televisions</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:80%"></div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="{{ asset('/') }}website/assets/images/el_img12.jpg"
                                                                alt="el_img12">
                                                            <img class="product_hover_img"
                                                                src="{{ asset('/') }}website/assets/images/el_hover_img12.jpg"
                                                                alt="el_hover_img12">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                                                </li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Sound
                                                                Equipment for Low</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:80%"></div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

        <!-- START SECTION BANNER -->
        <div class="section pb_20 small_pt">
            <div class="custom-container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="sale-banner mb-3 mb-md-4">
                            <a class="hover_effect1" href="#">
                                <img src="{{ asset('/') }}website/assets/images/shop_banner_img7.jpg"
                                    alt="shop_banner_img7">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sale-banner mb-3 mb-md-4">
                            <a class="hover_effect1" href="#">
                                <img src="{{ asset('/') }}website/assets/images/shop_banner_img8.jpg"
                                    alt="shop_banner_img8">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sale-banner mb-3 mb-md-4">
                            <a class="hover_effect1" href="#">
                                <img src="{{ asset('/') }}website/assets/images/shop_banner_img9.jpg"
                                    alt="shop_banner_img9">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION BANNER -->

        <!-- START SECTION SHOP -->
        <!-- END SECTION SHOP -->

        <!-- START SECTION SHOP -->
        <div class="section small_pt small_pb">
            <div class="custom-container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading_tab_header">
                                    <div class="heading_s2">
                                        <h4>Trending products</h4>
                                    </div>
                                    <div class="view_all">
                                        <a href="{{ route('website-product') }}" class="text_default"><i
                                                class="linearicons-power"></i> <span>View All</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1"
                                    data-loop="true" data-margin="20"
                                    data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img2.jpg"
                                                        alt="el_img2">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img2.jpg"
                                                        alt="el_hover_img2">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i
                                                                    class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                    class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                    class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart Watch
                                                        External</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img5.jpg"
                                                        alt="el_img5">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img5.jpg"
                                                        alt="el_hover_img5">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i
                                                                    class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                    class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                    class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart
                                                        Televisions</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img9.jpg"
                                                        alt="el_img9">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img9.jpg"
                                                        alt="el_hover_img9">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i
                                                                    class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                    class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                    class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">oppo Reno3
                                                        Pro</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$68.00</span>
                                                    <del>$99.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:87%"></div>
                                                    </div>
                                                    <span class="rating_num">(25)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img7.jpg"
                                                        alt="el_img7">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img7.jpg"
                                                        alt="el_hover_img7">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i
                                                                    class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                    class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                    class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Audio
                                                        Theaters</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img5.jpg"
                                                        alt="el_img5">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img5.jpg"
                                                        alt="el_hover_img5">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i
                                                                    class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                    class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                    class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart
                                                        Televisions</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img12.jpg"
                                                        alt="el_img12">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img12.jpg"
                                                        alt="el_hover_img12">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i
                                                                    class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                    class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                    class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Sound
                                                        Equipment for Low</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->


        <!-- START SECTION SHOP -->
        <div class="section pt-0 pb_20">
            <div class="custom-container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading_tab_header">
                                    <div class="heading_s2">
                                        <h4>Featured Products</h4>
                                    </div>
                                    <div class="view_all">
                                        <a href="#" class="text_default"><span>View All</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="product_slider carousel_slider product_list owl-carousel owl-theme nav_style5"
                                    data-nav="true" data-dots="false" data-loop="true" data-margin="20"
                                    data-responsive='{"0":{"items": "1"}, "380":{"items": "1"}, "640":{"items": "2"}, "991":{"items": "1"}}'>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img2.jpg"
                                                        alt="el_img2">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img2.jpg"
                                                        alt="el_hover_img2">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart Watch
                                                        External</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img1.jpg"
                                                        alt="el_img1">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img1.jpg"
                                                        alt="el_hover_img1">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Red &amp;
                                                        Black Headphone</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <span class="pr_flash">New</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img3.jpg"
                                                        alt="el_img3">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img3.jpg"
                                                        alt="el_hover_img3">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Nikon HD
                                                        camera</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$68.00</span>
                                                    <del>$99.00</del>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:87%"></div>
                                                    </div>
                                                    <span class="rating_num">(25)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img5.jpg"
                                                        alt="el_img5">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img5.jpg"
                                                        alt="el_hover_img5">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart
                                                        Televisions</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img9.jpg"
                                                        alt="el_img9">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img9.jpg"
                                                        alt="el_hover_img9">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">oppo Reno3
                                                        Pro</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$68.00</span>
                                                    <del>$99.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:87%"></div>
                                                    </div>
                                                    <span class="rating_num">(25)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img7.jpg"
                                                        alt="el_img7">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img7.jpg"
                                                        alt="el_hover_img7">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Audio
                                                        Theaters</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading_tab_header">
                                    <div class="heading_s2">
                                        <h4>Top Rated Products</h4>
                                    </div>
                                    <div class="view_all">
                                        <a href="#" class="text_default"><span>View All</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="product_slider carousel_slider product_list owl-carousel owl-theme nav_style5"
                                    data-nav="true" data-dots="false" data-loop="true" data-margin="20"
                                    data-responsive='{"0":{"items": "1"}, "380":{"items": "1"}, "640":{"items": "2"}, "991":{"items": "1"}}'>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img5.jpg"
                                                        alt="el_img5">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img5.jpg"
                                                        alt="el_hover_img5">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart
                                                        Televisions</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img12.jpg"
                                                        alt="el_img12">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img12.jpg"
                                                        alt="el_hover_img12">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Sound
                                                        Equipment for Low</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img4.jpg"
                                                        alt="el_img4">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img4.jpg"
                                                        alt="el_hover_img4">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Audio
                                                        Equipment</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$69.00</span>
                                                    <del>$89.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:70%"></div>
                                                    </div>
                                                    <span class="rating_num">(22)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <span class="pr_flash bg-danger">Hot</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img6.jpg"
                                                        alt="el_img6">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img6.jpg"
                                                        alt="el_hover_img6">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Samsung
                                                        Smart Phone</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <span class="pr_flash bg-danger">Hot</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img8.jpg"
                                                        alt="el_img8">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img8.jpg"
                                                        alt="el_hover_img8">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a
                                                        href="shop-product-detail.html">Surveillance camera</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <span class="pr_flash bg-success">Sale</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img10.jpg"
                                                        alt="el_img10">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img10.jpg"
                                                        alt="el_hover_img10">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">classical
                                                        Headphone</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$68.00</span>
                                                    <del>$99.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:87%"></div>
                                                    </div>
                                                    <span class="rating_num">(25)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading_tab_header">
                                    <div class="heading_s2">
                                        <h4>On Sale Products</h4>
                                    </div>
                                    <div class="view_all">
                                        <a href="#" class="text_default"><span>View All</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="product_slider carousel_slider product_list owl-carousel owl-theme nav_style5"
                                    data-nav="true" data-dots="false" data-loop="true" data-margin="20"
                                    data-responsive='{"0":{"items": "1"}, "380":{"items": "1"}, "640":{"items": "2"}, "991":{"items": "1"}}'>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img11.jpg"
                                                        alt="el_img11">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img11.jpg"
                                                        alt="el_hover_img11">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Basics
                                                        High-Speed HDMI</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$69.00</span>
                                                    <del>$89.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:70%"></div>
                                                    </div>
                                                    <span class="rating_num">(22)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img7.jpg"
                                                        alt="el_img7">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img7.jpg"
                                                        alt="el_hover_img7">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Audio
                                                        Theaters</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <span class="pr_flash bg-danger">Hot</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img8.jpg"
                                                        alt="el_img8">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img8.jpg"
                                                        alt="el_hover_img8">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a
                                                        href="shop-product-detail.html">Surveillance camera</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img5.jpg"
                                                        alt="el_img5">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img5.jpg"
                                                        alt="el_hover_img5">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart
                                                        Televisions</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img9.jpg"
                                                        alt="el_img9">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img9.jpg"
                                                        alt="el_hover_img9">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">oppo Reno3
                                                        Pro</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$68.00</span>
                                                    <del>$99.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:87%"></div>
                                                    </div>
                                                    <span class="rating_num">(25)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{ asset('/') }}website/assets/images/el_img1.jpg"
                                                        alt="el_img1">
                                                    <img class="product_hover_img"
                                                        src="{{ asset('/') }}website/assets/images/el_hover_img1.jpg"
                                                        alt="el_hover_img1">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Red &amp;
                                                        Black Headphone</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                        blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

        <!-- START SECTION SUBSCRIBE NEWSLETTER -->
        <div class="section bg_default small_pt small_pb">
            <div class="custom-container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="newsletter_text text_white">
                            <h3>Join Our Newsletter Now</h3>
                            <p> Register now to get updates on promotions. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- START SECTION SUBSCRIBE NEWSLETTER -->

    </div>
    <!-- END MAIN CONTENT -->
@endsection
