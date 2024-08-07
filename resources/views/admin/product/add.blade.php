@extends('admin.master')

@section('title')
    Add Product Form
@endsection

@section('body')


    <!--app-content open-->
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Form Layouts</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- row -->
                <div class="row row-deck">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <span><h3 class="card-title">Add Product Form</h3></span>
                                <a href="{{ route('product.index') }}" class="btn btn-primary ms-auto d-block">Manage Product</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-md-4 form-label">Category Name</label>
                                                <div class="col-md-8">
                                                    <select name="category_id" onchange="setSubCategory(this.value)" class="form-control" id="">
                                                        <option>Select A Category</option>
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="sub_category_id" class="col-md-5 form-label">Sub Category Name</label>
                                                <div class="col-md-7">
                                                    <select name="sub_category_id" class="form-control" id="subCategoryID">
                                                        <option>Select A Sub Category</option>
                                                        @foreach($subCategories as $subCategory)
                                                            <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="categoryName" class="col-md-4 form-label">Brand Name</label>
                                                <div class="col-md-8">
                                                    <select name="brand_id" class="form-control" id="">
                                                        <option>Select A Brand</option>
                                                        @foreach($brands as $brand)
                                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-md-5 form-label">Unit Name</label>
                                                <div class="col-md-7 form-group">
                                                    <select name="unit_id" data-placeholder="Select Unit" class="form-control" id="">
                                                        <option>Select Unit</option>
                                                        @foreach($units as $unit)
                                                            <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-md-4 form-label">Color Name</label>
                                                <div class="col-md-8 form-group">
                                                    <select multiple name="color[]" data-placeholder="Select Color" class="form-control select2 " id="">
                                                        <option>Select Color</option>
                                                        @foreach($colors as $color)
                                                            <option value="{{ $color->id }}">{{ $color->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-md-5 form-label">Size Name</label>
                                                <div class="col-md-7 form-group">
                                                    <select multiple name="size[]" data-placeholder="Select Size" class="form-control select2" id="">
                                                        <option>Select Size</option>
                                                        @foreach($sizes as $size)
                                                            <option value="{{ $size->id }}">{{ $size->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="color_id" class="col-md-4 form-label">Product Name</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="name" placeholder="Product Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="size_id" class="col-md-5 form-label">Product Code</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" name="code" placeholder="Product Code">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label for="color_id" class="col-md-2 form-label">Short Description</label>
                                                <div class="col-md-10">
                                                    <textarea class="content" name="short_description" id=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label for="color_id" class="col-md-2 form-label">Long Description</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control summernote" name="long_description" id=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label for="color_id" class="col-md-2 form-label">Meta Title</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="meta_title" id=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label for="color_id" class="col-md-2 form-label">Meta Description</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="meta_description" id=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-md-4 form-label">Product Image</label>
                                                <div class="col-md-8">
                                                    <input type="file" class="dropify" data-height="200" name="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-md-4 form-label">Others Image</label>
                                                <div class="col-md-8">
                                                    <input type="file" name="other_image[]" accept=" image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-md-4 form-label">Product Video Link</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="video_link">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-md-4 form-label">Product Price</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="price" name="regular_price">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-md-5 form-label">Discount Type</label>
                                                <div class="col-md-7">
                                                    <label for=""><input type="radio" name="discount_type" class="fixed" value="fixed"/> Fixed Discount </label>
                                                    <label for=""><input type="radio" name="discount_type" class="percent" value="percent"/> Percentage Discount </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-md-4 form-label">Discount Amount</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="discountAmount" name="discount_amount">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-md-4 form-label">Selling Price</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="discountPrice" name="selling_price">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="" class="col-md-4 form-label">Stock Amount</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="stock_amount">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save Product</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->


@endsection
