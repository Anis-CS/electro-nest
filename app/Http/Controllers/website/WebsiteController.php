<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use App\Models\ProductReview;
use App\Models\ProductSize;
use App\Models\ShippingArea;
use App\Models\SubCategory;
use App\Models\Customer;
use Illuminate\Http\Request;
use Session;
use Cart;

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

        ]);

    }

    public function product()
    {
        return view('website.product.index',[
            'products'=>Product::where('status',1)->latest()->get(),

        ]);
    }
    public function checkout()
    {
        if(Session::get('customer_id')){
            $this->customer = Customer::find(Session::get("customer_id"));
        }
        else{
            $this->customer = '';
        }

        return view('website.checkout.index',
            [
                'areas'    =>ShippingArea::where('status',1)->get(),
                'customer' => $this->customer,
                'categories' => Category::where('status',1)->get(),
            ]);
    }
    public function cart()
    {
        return view('website.checkout.cart',[

        ]);
    }
    public function contact()
    {
        return view('website.contact.index',[

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


            'products'=>Product::where('status',1)->latest()->take(4)->get()
        ]);
    }


    public function customerRegister()
    {
        return view('website.customer.customer-register',[

        ]);
    }

    public function customerProfile()
    {
        return view('website.customer.customer-info.profile',[

        ]);
    }

    public function wishlist()
    {
        return view('website.wishlist.index',[

        ]);
    }

    public function termCondition()
    {
        return view('website.term-condition.index',[

        ]);
    }

    public function faq()
    {
        return view('website.faq.index',[

        ]);
    }

    public function aboutUs()
    {
        return view('website.about-us.index',[

        ]);
    }

    public function policyOne()
    {
        return view('website.policy.pageOne',[

        ]);
    }

    public function policyTwo()
    {
        return view('website.policy.pageTwo',[

        ]);
    }

    public function policyThree()
    {
        return view('website.policy.pageThree',[

        ]);
    }
    public function policyFour()
    {
        return view('website.policy.pageFour',[

        ]);
    }
    public function getPriceByArea(Request $request)
    {
        $area = ShippingArea::find($request->id);

        if (!$area) {
            return response()->json(['error' => 'Area not found'], 404);
        }

        return response()->json(['price' => $area->price]);
    }
}
