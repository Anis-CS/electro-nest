@extends('website.master')

@section('title')
    {{ $product->name }}
@endsection

@section('body')

    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Product Detail</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item">{{ $product->name }}</li>
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
                    <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                        <div class="product-image">
                            <div class="product_img_box">
                               <img id="product_img" src="{{ asset($product->image) }}" data-zoom-image="website/assets/images/product_zoom_img1.jpg" alt="product_img1" >
                                <a href="#" class="product_img_zoom" title="Zoom">
                                    <span class="linearicons-zoom-in"></span>
                                </a>
                            </div>
                            <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
                                @foreach($productImages as $productImage)
                                <div class="item">
                                    <a href="#" class="product_gallery_item active" data-image="assets/images/product_img1.jpg" data-zoom-image="assets/images/product_zoom_img1.jpg">
                                        <img src="{{ asset($productImage->other_images) }}" alt="product_small_img1" />
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">

                        <form action="{{ route('carts.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$product->id}}">
                            <input type="hidden" name="name" value="{{$product->name}}">
                            <input type="hidden" name="code" value="{{$product->code}}">

                            <div class="pr_detail">
                                <div class="product_description">
                                    <h4 class="product_title"><a href="#">{{ $product->name }}</a></h4>
                                    <h5 >Product Code :{{ $product->code }}</a></h5>
                                    <div class="product_price">
                                        @if($product->selling_price <= 0)
                                            <span class="price">BD.{{ $product->regular_price }} /-</span>
                                            <input type="hidden" name="price" value="{{$product->regular_price}}">
                                        @else
                                            <span class="price">BD.{{ $product->selling_price }} /-</span>
                                            <del>BD.{{ $product->regular_price }}/- </del>
                                            <input type="hidden" name="price" value="{{$product->selling_price}}">
                                            <div class="on_sale">
                                                <span>Offer :{{ $product->discount_amount }}{{ $product->discount_type == "percent" ? ' %' : '/-' }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:80%"></div>
                                        </div>
                                        <span class="rating_num">(21)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p>{!! $product->short_description !!}</p>
                                    </div>
                                    <div class="product_sort_info">
                                        <ul>
                                            <li><i class="linearicons-shield-check"></i> 1 Year AL Jazeera Brand Warranty</li>
                                            <li><i class="linearicons-sync"></i> 30 Day Return Policy</li>
                                            <li><i class="linearicons-bag-dollar"></i> Cash on Delivery available</li>
                                        </ul>
                                    </div>
                                    <h6 class="product-title">Select color</h6>
                                    <div class="color-selector inline">
                                        @foreach($productColors as $key1 => $productColor)
{{--                                                        <label> <input type="radio" {{ $key1 == 0 ? 'checked' : '' }} name="color" value="{{$productColor->color->name}}"/> {{$productColor->color->name}} </label>--}}
{{--                                                        <label> <input type="checkbox" {{ $key1 == 0 ? 'checked' : '' }} name="color" value="{{$productColor->color->name}}"/> {{$productColor->color->name}} </label>--}}
                                            <label class="text-center">
                                                <input type="checkbox" class="textcheck" style="accent-color:{{ $productColor->color->code }}" {{ $key1 == 0 ? 'checked' : ' '}} name="color" value="{{ $productColor->color->name }}"/>
                                                <b style="font-size: 1.2rem">{{ $productColor->color->name }}</b>
                                            </label>
                                        @endforeach
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <span class="switch_lable">Size</span>
                                        @foreach($productSizes as $key1 => $productSize)
                                        <div class="product_size_switch">
                                            <span>{{ $productSize->size->name }}</span>
                                            <input type="hidden" name="size" value="{{ $productSize->size->name }}"/>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <hr />
                                <div class="cart_extra">
                                    <div class="cart-product-quantity">
                                        <div class="quantity">
                                            <input type="button" value="-" class="minus">
                                            <input type="text" name="qty" value="1" title="Qty" class="qty" size="4">
                                            <input type="button" value="+" class="plus">
                                        </div>
                                    </div>
                                    <div class="cart_btn">
                                        <button class="btn btn-fill-out btn-addtocart" type="submit"><i class="icon-basket-loaded"></i> Add to cart</button>
                                        <a class="add_compare" href="#"><i class="icon-shuffle"></i></a>
                                        <a class="add_wishlist" href="#"><i class="icon-heart"></i></a>
                                    </div>
                                </div>
                                <hr />

                                <div class="product_share">
                                    <span>Share:</span>
                                    <ul class="social_icons">
                                        <li><a href="https://www.facebook.com/"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="https://x.com/?lang=en"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="https://www.youtube.com/"><i class="ion-social-youtube-outline"></i></a></li>
                                        <li><a href="https://www.instagram.com/"><i class="ion-social-instagram-outline"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="large_divider clearfix"></div>
                    </div>
                </div>
                <div class="row card">
                    <div class="col-md-12 col-sm-12">
                        <div class="tab-style3">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Additional-info" role="tab" aria-controls="Additional-info" aria-selected="false">Additional info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews" role="tab" aria-controls="Reviews" aria-selected="false">Reviews (2)</a>
                                </li>
                            </ul>
                            <div class="tab-content shop_info_tab">
                                <div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                                    <p class="justify-content-around">{!! $product->long_description !!}</p>
                                </div>
                                <div class="tab-pane fade" id="Additional-info" role="tabpanel" aria-labelledby="Additional-info-tab">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Capacity</td>
                                            <td>5 Kg</td>
                                        </tr>
                                        <tr>
                                            <td>Color</td>
                                            <td>Black, Brown, Red,</td>
                                        </tr>
                                        <tr>
                                            <td>Water Resistant</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Material</td>
                                            <td>Artificial Leather</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                                    <div class="comments">
                                        <h5 class="product_tab_title">2 Review For <span>Blue Dress For Woman</span></h5>
                                        <ul class="list_none comment_list mt-4">
                                            <li>
                                                <div class="comment_img">
                                                    <img src="{{ asset('/') }}website/assets/images/user1.jpg" alt="user1"/>
                                                </div>
                                                <div class="comment_block">
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div class="product_rate" style="width:80%"></div>
                                                        </div>
                                                    </div>
                                                    <p class="customer_meta">
                                                        <span class="review_author">Alea Brooks</span>
                                                        <span class="comment-date">March 5, 2018</span>
                                                    </p>
                                                    <div class="description">
                                                        <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comment_img">
                                                    <img src="{{ asset('/') }}website/assets/images/user2.jpg" alt="user2"/>
                                                </div>
                                                <div class="comment_block">
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div class="product_rate" style="width:60%"></div>
                                                        </div>
                                                    </div>
                                                    <p class="customer_meta">
                                                        <span class="review_author">Grace Wong</span>
                                                        <span class="comment-date">June 17, 2018</span>
                                                    </p>
                                                    <div class="description">
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="review_form field_form">
                                        <h5>Add a review</h5>
                                        <form class="row mt-3">
                                            <div class="form-group col-12 mb-3">
                                                <div class="star_rating">
                                                    <span data-value="1"><i class="far fa-star"></i></span>
                                                    <span data-value="2"><i class="far fa-star"></i></span>
                                                    <span data-value="3"><i class="far fa-star"></i></span>
                                                    <span data-value="4"><i class="far fa-star"></i></span>
                                                    <span data-value="5"><i class="far fa-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="form-group col-12 mb-3">
                                                <textarea required="required" placeholder="Your review *" class="form-control" name="message" rows="4"></textarea>
                                            </div>
                                            <div class="form-group col-md-6 mb-3">
                                                <input required="required" placeholder="Enter Name *" class="form-control" name="name" type="text">
                                            </div>
                                            <div class="form-group col-md-6 mb-3">
                                                <input required="required" placeholder="Enter Email *" class="form-control" name="email" type="email">
                                            </div>

                                            <div class="form-group col-12 mb-3">
                                                <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">Submit Review</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="small_divider"></div>
                        <div class="divider"></div>
                        <div class="medium_divider"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="heading_s1">
                            <h3>Releted Products</h3>
                        </div>
                        <div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>

                            @foreach ($sliderproduct as $product)
                               <div class="item">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="{{ route('product.details',['id'=>$product->id]) }}">
                                            <img src="{{ asset( $product->image) }}" alt="product_img1">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">{{ $product->name }}</a></h6>
                                        <div class="product_price">
                                            <span class="price">{{ $product->selling_price }}</span>
                                            <del>{{ $product->regular_price }}</del>
                                            <div class="on_sale">
                                                <span>{{ $product->discount_amount }} {{ $product->discount_type == 'fixed' ? 'TK' : '%' }} Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                        <div class="pr_switch_wrap">
                                            <div class="product_color_switch">
                                                <span class="active" data-color="#87554B"></span>
                                                <span data-color="#333333"></span>
                                                <span data-color="#DA323F"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

    </div>
    <!-- END MAIN CONTENT -->

@endsection
