<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\PrivacyAndPolicy;
use App\Models\Product;
use App\Models\ShippingArea;
use App\Models\Size;
use App\Models\SubCategory;



class CategoryByProductController extends Controller
{
    private $category;

    public function index($id){
        $this->category =Category::find($id);
        return view('website.category-by-product.index',[
            'products'=>Product::where('category_id',$this->category->id)->get(),
            'ShippingAreas'=>ShippingArea::all(),
            'categories'=>Category::where('status',1)->get(),
            'subCategories' => SubCategory::where('status', 1)->get(),
        ]);
    }
    public function subCategoryWiseProduct($id){
        $this->subcategory =SubCategory::find($id);
        return view('website.category-by-product.subCategory-wise-product',[
            'subCategoryWiseProducts'   =>  Product::where('sub_category_id',$this->subcategory->id)->get(),
            'ShippingAreas'             =>  ShippingArea::all(),
            'subcategories'             =>  SubCategory::where('status',1)->get(),
            'categories'                =>  Category::where('status',1)->get(),
            'brands'                    =>  Brand::all(),
            'sizes'                     =>  Size::all(),
        ]);
    }
}
