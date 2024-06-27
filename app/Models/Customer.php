<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    private static $customer, $image, $imageUrl, $directory, $imageName, $extension, $images;

    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = rand(1000, 50000000000) . '.' . self::$extension;
        self::$directory = 'upload/customer-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }


    public static function saveInfo($request)
    {
        if ($request->file('image')) {
            self::getImageUrl($request);
        }

        self::$customer = new Customer();
        self::$customer->name              = $request->name;
        self::$customer->phone              = $request->phone;
        self::$customer->email              = $request->email;
        if ($request->password) {
            self::$customer->password = bcrypt($request->password);
        } else {
            self::$customer->password = bcrypt($request->email);
        }
        self::$customer->address            = $request->address;
        self::$customer->gender             = $request->gender;
        self::$customer->date_of_birth      = $request->date_of_birth;
        self::$customer->image              = self::$imageUrl;
        self::$customer->save();
        return self::$customer;
    }

    public static function loginCheck($request)
    {
        self::$customer = Customer::where('email', $request->user_name)->orWhere('phone', $request->user_name)->first();
        if (self::$customer) {
            if (password_verify($request->password, self::$customer->password)) {

                Session::put('customer_id', self::$customer->id);
                Session::put('customer_name', self::$customer->name);
                return redirect(route('home'));
            } else {
                Session::put('passwordMessage', 'passwordMessage');
                return redirect(route('customer.login'));
            }
        } else {
            return redirect(route('customer.login'))->with('nameMessage', 'nameMessage');
        }
    }


}
