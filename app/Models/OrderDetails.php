<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cart;

class OrderDetails extends Model
{
    use HasFactory;

    private static $orderDetail;

    public static function newOrderDetail($order){

        foreach (Cart::content() as $item){
            self::$orderDetail = new OrderDetails();
            self::$orderDetail->order_id     = $order->id;
            self::$orderDetail->product_id   = $item->id;
            self::$orderDetail->product_name = $item->name;
            self::$orderDetail->product_price = $item->price;
            self::$orderDetail->product_qty = $item->qty;
            self::$orderDetail->save();
        }
        Cart::remove($item->rowId);
    }
}
