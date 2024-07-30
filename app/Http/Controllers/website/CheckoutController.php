<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ShippingArea;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Customer;
use Session;
use App\Http\Controllers\SslCommerzPaymentController;


class CheckoutController extends Controller
{
    private $customer, $order, $orderDetail;

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


    public function newOrder(Request $request)
    {

        if (Session::get('customer_id'))
        {
            $this->customer = Customer::find(Session::get('customer_id'));
        }
        else
            {
            $this->customer = Customer::where('phone', $request->phone)
                ->orWhere('email', $request->email)
                ->first();
            if (!$this->customer) {
                $this->customer = Customer::saveInfo($request);
            }
            Session::put('customer_id', $this->customer->id);
            Session::put('customer_name', $this->customer->name);
        }
        if($request->payment_method == 'Online')
        {
            $sslCommerzPayment = new SslCommerzPaymentController();
            $sslCommerzPayment->index($request, $this->customer);
        }
        else
            {
                $this->order = Order::newOrder($request, $this->customer);
                OrderDetails::newOrderDetail($this->order);
                return redirect('/');
            }
    }
    public function completeOrder()
    {
        return view('website.checkout.complete-order');

    }
}
