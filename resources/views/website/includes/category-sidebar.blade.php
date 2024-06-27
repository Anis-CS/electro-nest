
<div class="categories_wrap">

    <button type="submit" data-bs-toggle="collapse" data-bs-target="#navCatContent" aria-expanded="false" class="categories_btn">
        <i class="linearicons-menu"></i><span>All Categories </span>
    </button>
    <div id="navCatContent" class="nav_cat navbar nav collapse show mobile_side_menu">
        @foreach($categories as $category)
        <ul>
            <li class="dropdown dropdown-mega-menu">
                <a class="dropdown-item nav-link dropdown-toggler" href="{{ route('product.category', $category->id) }}" data-bs-toggle="dropdown"><i class="flaticon-tv"></i> <span>{{ $category->name }}</span></a>
                <div class="dropdown-menu" data-bs-popper="static">
                    <ul class="mega-menu d-lg-flex">
                        <li class="mega-menu-col col-lg-7">
                            <ul class="d-lg-flex">
                                <li class="mega-menu-col col-lg-6">
                                    <ul>
                                        <li class="dropdown-header">Featured Item</li>
                                        @foreach($subCategories as $subCategory)
                                            @if($category->id == $subCategory->category_id)
                                        <li><a class="dropdown-item nav-link nav_item" href="{{ route('product.subCategory', $subCategory->id) }}">{{ $subCategory->name }}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        @endforeach
        <div class="more_categories">More Categories</div>
    </div>
</div>
