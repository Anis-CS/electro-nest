<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Brick\Math\shiftedLeft;

class Data extends Model
{
    use HasFactory;

    private static $data;

    public static function newData($request,$customer){
        self::$data = new Data();
        self::$data->name = $customer->id;
        self::$data->shipping_area_id  = $request->shippingArea;
        self::$data->delivery_address  = $request->shippingAddress;
        self::$data->shipping_total    = $request->shipping_total;
        self::$data->order_total = $request->order_total;
        self::$data->order_date = date('y-m-d');
        self::$data->order_timestamp   = strtotime(date('y-m-d'));
        self::$data->payment_method    = $request->payment_method;
        self::$data->save();
        return self::$data;
    }
}
