@extends('website.master')

@section('title')
    ElectroNest | SubCategory Wise Products
@endsection

@section('body')

    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Product Page</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('website-product')}}">Pages</a></li>
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
                    <div class="col-lg-9">
                        <div class="row align-items-center mb-4 pb-1">
                            <div class="col-12">
                                <div class="product_header">
                                    <div class="product_header_left">
                                        <div class="custom_select">
                                            <select class="form-control form-control-sm">
                                                <option value="order">Default sorting</option>
                                                <option value="popularity">Sort by popularity</option>
                                                <option value="date">Sort by newness</option>
                                                <option value="price">Sort by price: low to high</option>
                                                <option value="price-desc">Sort by price: high to low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="product_header_right">
                                        <div class="products_view">
                                            <a href="javascript:;" class="shorting_icon grid active"><i class="ti-view-grid"></i></a>
                                            <a href="javascript:;" class="shorting_icon list"><i class="ti-layout-list-thumb"></i></a>
                                        </div>
                                        <div class="custom_select">
                                            <select class="form-control form-control-sm">
                                                <option value="">Showing</option>
                                                <option value="9">9</option>
                                                <option value="12">12</option>
                                                <option value="18">18</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row shop_container">
                            @foreach ($subCategoryWiseProducts as $subCategoryWiseProduct)
                            <div class="col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="{{ route('product.details',['id'=>$subCategoryWiseProduct->id]) }}">
                                            <img src="{{ asset($subCategoryWiseProduct->image) }}" alt="product_img1">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="{{route('cart')}}"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                <li><a href="{{route('wishlist')}}"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="{{ route('product.details',['id'=>$subCategoryWiseProduct->id]) }}">{{ $subCategoryWiseProduct->name }}</a></h6>
                                        <div class="product_price">
                                            <span class="price">{{ $subCategoryWiseProduct->selling_price }}</span>
                                            <del>{{ $subCategoryWiseProduct->regular_price }}</del>
                                            <div class="on_sale">
                                                <span>{{ $subCategoryWiseProduct->discount_amount }}{{ $subCategoryWiseProduct->discount_type == 'fixed' ? 'TK' : '%' }} Off</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <ul class="pagination mt-3 justify-content-center pagination_style1">
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="linearicons-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0">
                        @foreach ($subCategoryWiseProducts as $subCategoryWiseProduct)
                        <div class="sidebar">
                            <div class="widget">
                                <h5 class="widget_title">Categories</h5>
                                <ul class="widget_categories">
                                    @foreach($categories as $category)
                                    <li><a href="{{ route('product.category',$category->id) }}"><span class="categories_name">{{ $category->name }}</span><span class="categories_num">(9)</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget">
                                <h5 class="widget_title">Brand</h5>
                                @foreach($brands as $brand)
                                    <ul class="list_brand">
                                        <li>
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox" id="Arrivals" value="">
                                                <label class="form-check-label" for="Arrivals"><span>{{ $brand->name }}</span></label>
                                            </div>
                                        </li>
                                    </ul>
                                @endforeach
                            </div>
                            <div class="widget">
                                <h5 class="widget_title">Size</h5>
                                <div class="product_size_switch">
                                    @foreach($sizes as $size)
                                        <span>{{ $size->name }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="widget">
                                <h5 class="widget_title">Color</h5>
                                <div class="product_color_switch">
                                    <span data-color="#87554B"></span>
                                    <span data-color="#333333"></span>
                                    <span data-color="#DA323F"></span>
                                    <span data-color="#2F366C"></span>
                                    <span data-color="#B5B6BB"></span>
                                    <span data-color="#B9C2DF"></span>
                                    <span data-color="#5FB7D4"></span>
                                    <span data-color="#2F366C"></span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->


    </div>
    <!-- END MAIN CONTENT -->


@endsection
