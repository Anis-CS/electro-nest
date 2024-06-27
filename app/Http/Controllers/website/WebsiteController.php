<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Offer;
use App\Models\PrivacyAndPolicy;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use App\Models\ProductReview;
use App\Models\ProductSize;
use App\Models\ShippingArea;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    private $product;
    public function index()
    {
        return view('website.home.index',[
            'products'=>Product::where('status',1)->latest()->take(5)->get(),
            'productImages' => ProductImage::all(),
            'offers' => Offer::where('status',1)->get(),
            'categories' => Category::where('status',1)->get(),
            'subCategories' => SubCategory::where('status', 1)->get(),
            'policy' => PrivacyAndPolicy::latest()->first(),
        ]);

    }

    public function product()
    {
        return view('website.product.index',[
            'products'=>Product::where('status',1)->latest()->get(),
            'policy' => PrivacyAndPolicy::latest()->first(),
        ]);
    }
    public function checkout()
    {
        return view('website.checkout.index',[
            'policy' => PrivacyAndPolicy::latest()->first(),
        ]);
    }
    public function cart()
    {
        return view('website.checkout.cart',[
            'policy' => PrivacyAndPolicy::latest()->first(),
        ]);
    }
    public function contact()
    {
        return view('website.contact.index',[
            'policy' => PrivacyAndPolicy::latest()->first(),
        ]);
    }
    public function offers($id)
    {
        return view('website.offer.product-offer',
        ['offer' => Offer::find($id)]);
    }
    public function productDetails($id)
    {
        $this->product = Product::find($id);
        return view('website.product.product-details',[
            'product' => $this->product,
            'productColors' => ProductColor::where('product_id',$this->product->id)->get(),
            'productSizes' => ProductSize::where('product_id',$this->product->id)->get(),
            'productImages' => ProductImage::where('product_id',$this->product->id)->get(),
            'ShippingAreas'=>ShippingArea::all(),
            'categories'=>Category::where('status',1)->get(),

            'sliderproduct'=>Product::where('status',1)->latest()->take(6)->get(),

            'policy' => PrivacyAndPolicy::latest()->first(),
            'products'=>Product::where('status',1)->latest()->take(4)->get()
        ]);
    }


    public function customerRegister()
    {
        return view('website.customer.customer-register',[
            'policy' => PrivacyAndPolicy::latest()->first(),
        ]);
    }

    public function customerProfile()
    {
        return view('website.customer.customer-info.profile',[
            'policy' => PrivacyAndPolicy::latest()->first(),
        ]);
    }

    public function wishlist()
    {
        return view('website.wishlist.index',[
            'policy' => PrivacyAndPolicy::latest()->first(),
        ]);
    }

    public function termCondition()
    {
        return view('website.term-condition.index',[
            'policy' => PrivacyAndPolicy::latest()->first(),
        ]);
    }

    public function faq()
    {
        return view('website.faq.index',[
            'policy' => PrivacyAndPolicy::latest()->first(),
        ]);
    }

    public function aboutUs()
    {
        return view('website.about-us.index',[
            'policy' => PrivacyAndPolicy::latest()->first(),
        ]);
    }

    public function policyOne()
    {
        return view('website.policy.pageOne',[
            'policy' => PrivacyAndPolicy::latest()->first(),
        ]);
    }

    public function policyTwo()
    {
        return view('website.policy.pageTwo',[
            'policy' => PrivacyAndPolicy::latest()->first(),
        ]);
    }

    public function policyThree()
    {
        return view('website.policy.pageThree',[
            'policy' => PrivacyAndPolicy::latest()->first(),
        ]);
    }
    public function policyFour()
    {
        return view('website.policy.pageFour',[
            'policy' => PrivacyAndPolicy::latest()->first(),
        ]);
    }
}
