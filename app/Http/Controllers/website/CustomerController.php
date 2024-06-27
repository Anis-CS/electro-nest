<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\PrivacyAndPolicy;
use Illuminate\Http\Request;
use Session;

class CustomerController extends Controller
{
    private $customer, $orders, $orderDetail, $customer_id, $wishlist;

    // customer Register
    public function index()
    {
        return view('website.customer.customer-register',[
            'policy' => PrivacyAndPolicy::latest()->first(),

        ]);
    }

    public function loginFrom()
    {
        return view('website.customer.customer-login',[
            'policy' => PrivacyAndPolicy::latest()->first(),

        ]);
    }

    public function customerLoginCheck(Request $request)
    {
        Customer::loginCheck($request);
        if (Session::get('product_id')) {
            $productId = Session::get('product_id');
            Session::forget(Session::get('product_id'));
            return  redirect('product-detail/' . $productId);
        }
        return redirect(route('home'));
    }

    public function saveCustomerInfo(Request $request)
    {
        Customer::saveInfo($request);
        Session::put('customer_id', $this->customer->id);
        Session::put('customer_name', $this->customer->fname);
        return redirect(route('customer.login'));
    }
}
