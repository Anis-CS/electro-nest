<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Customer;
use Session;
use Cart;


class CheckoutController extends Controller
{
    private $customer, $order, $orderDetail;

    public function newOrder(Request $request)
    {

        if (Session::get('customer_id')) {
            $this->customer = Customer::find(Session::get('customer_id'));
        } else {
            $this->customer = Customer::where('phone', $request->phone)
                ->orWhere('email', $request->email)
                ->first();
            if (!$this->customer) {
                $this->customer = Customer::saveInfo($request);
            }
            Session::put('customer_id', $this->customer->id);
            Session::put('customer_name', $this->customer->name);
        }
        $this->order = Order::newOrder($request, $this->customer);
        OrderDetails::newOrderDetail($this->order);
        return back();

    }
    public function completeOrder()
    {
        return view('website.checkout.complete-order');

    }
}
