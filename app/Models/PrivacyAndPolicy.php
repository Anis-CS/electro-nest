<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyAndPolicy extends Model
{
    use HasFactory;

    private static $privacyPolicy;

    public static function newPrivacyPolicy($request)
    {
        self::$privacyPolicy = new PrivacyAndPolicy();
        self::$privacyPolicy->one_name                  = $request->one_name;
        self::$privacyPolicy->one_description           = $request->one_description;
        self::$privacyPolicy->two_name                  = $request->two_name;
        self::$privacyPolicy->two_description           = $request->two_description;
        self::$privacyPolicy->three_name                = $request->three_name;
        self::$privacyPolicy->three_description         = $request->three_description;
        self::$privacyPolicy->four_name                 = $request->four_name;
        self::$privacyPolicy->four_description          = $request->four_description;
        self::$privacyPolicy->save();
    }

    public static function updatePrivacyPolicy($request, $id)
    {
        self::$privacyPolicy = PrivacyAndPolicy::find($id);
        self::$privacyPolicy->one_name                  = $request->one_name;
        self::$privacyPolicy->one_description           = $request->one_description;
        self::$privacyPolicy->two_name                  = $request->two_name;
        self::$privacyPolicy->two_description           = $request->two_description;
        self::$privacyPolicy->three_name                = $request->three_name;
        self::$privacyPolicy->three_description         = $request->three_description;
        self::$privacyPolicy->four_name                 = $request->four_name;
        self::$privacyPolicy->four_description          = $request->four_description;
        self::$privacyPolicy->save();
    }
}
