<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\PrivacyAndPolicy;
use Illuminate\Http\Request;
use Session;

class CustomerController extends Controller
{
    private $customer;

    // customer Register
    public function RegistrationForm()
    {
        return view('website.customer.customer-register');
    }

    public function loginForm()
    {
        return view('website.customer.customer-login');
    }

    public function customerLoginCheck(Request $request)
    {
        Customer::loginCheck($request);
        if (Session::get('product_id')) {
            $productId = Session::get('product_id');
            Session::forget(Session::get('product_id'));
            return  redirect('product-detail/' . $productId);
        }
        if (session::get('customer_id')){
            return redirect('/');
        }else
        {
            return back();
        }

    }

    public function saveCustomerInfo(Request $request)
    {
        $this->customer = Customer::saveInfo($request);
        Session::put('customer_id', $this->customer->id);
        Session::put('customer_name', $this->customer->name);
        return redirect('/');
    }
    public function CustomerProfileUpdate(Request $request, string $id)
    {
        $this->customer = Customer::saveInfo($request,$id);
        Session::put('customer_id', $this->customer->id);
        Session::put('customer_name', $this->customer->name);
        return redirect('/');
    }
    public function logout(){
        Session::forget('customer_id');
        Session::forget('customer_name');

        return redirect('/');
    }
}
