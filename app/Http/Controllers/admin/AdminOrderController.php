<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Courier;
use App\Models\OrderDetails;

class AdminOrderController extends Controller
{
    public function index()
    {
        return view('admin.order.index',[
            'orders' => Order::latest()->get()
        ]);
    }

    public function orderDetail($id){
        return view('admin.order.detail',['order' => Order::find($id)]);
    }
    public function edit($id){
        return view('admin.order.edit',[
            'order' => Order::find($id),
            'couriers'=>Courier::all()
        ]);
    }
    public function update(Request $request, $id)
    {
        Order::updateOrder($request,$id);
        return redirect('admin/all-order')->with('message','Order info Update Complate');
    }

    public function delete(Request $request, $id)
    {
        $order        = Order::find($id);
        $orderDetails = OrderDetails::where('order_id',$id)->get();
        foreach ($orderDetails as $orderDetail)
        {
            $orderDetail->delete();
        }
        $order->delete();
        return redirect('/admin/all-order')->with('message','Order Info delete Successfully');
    }
}
