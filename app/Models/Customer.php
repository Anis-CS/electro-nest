<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Customer extends Model
{
    use HasFactory;

    private static $customer,$image, $imageUrl, $directory, $imageName, $extension;

    private static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = rand(10000, 500000).'.'.self::$extension;
        self::$directory = 'upload/category-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function saveInfo($request,$id=null)
    {
        if ($id !== null) {
            self::$customer = Customer::find($id);
        } else {
            self::$customer = new Customer();
        }

        if ($request->file('image'))
        {
            self::getImageUrl($request);
        }
        else
            {
                self::$imageUrl =" ";
            }

        self::$customer->name              = $request->name;
        self::$customer->phone              = $request->phone;
        self::$customer->email              = $request->email;
        if ($request->password) {
            self::$customer->password = bcrypt($request->password);
        } else {
            self::$customer->password = bcrypt($request->phone);
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
        self::$customer = Customer::where('email',$request->user_name)
            ->orWhere('phone',$request->user_name)
            ->first();
        if (self::$customer)
        {
            if (password_verify($request->password,self::$customer->password))
            {

                Session::put('customer_id', self::$customer->id);
                Session::put('customer_name', self::$customer->name);
                return back()->with('message','logIn successfully');

            }
            else
                {
                return back()->with('message','Please use valid password');
            }
        }
        else
            {
            return back()->with('message','Please use valid email or phone number');
        }
    }

}
