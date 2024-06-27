<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentImage extends Model
{
    use HasFactory;

    private static $paymentImage, $paymentImages, $image, $logoPaymentImageUrl, $directory, $imageName, $extension;

    public static function newPaymentImage($images, $companyId)
    {
        foreach ($images as $image)
        {
            self::$extension    = $image->getClientOriginalExtension();
            self::$imageName    = rand(10000, 500000).'.'.self::$extension;
            self::$directory    = 'upload/company-images/';
            $image->move(self::$directory, self::$imageName);
            self::$logoPaymentImageUrl     = self::$directory.self::$imageName;

            self::$paymentImage = new PaymentImage();
            self::$paymentImage->company_id     = $companyId;
            self::$paymentImage->payment_images          = self::$logoPaymentImageUrl;
            self::$paymentImage->save();
        }
    }

    public static function updatePaymentImage($images, $companyID ){

        self::$paymentImages = PaymentImage::where('company_id',$companyID)->get();

        if ($images != null){
            foreach (self::$paymentImages as self::$paymentImage){
                if (file_exists(self::$paymentImage)){
                    unlink(self::$paymentImage);
                }
                self::$paymentImage->delete();
            }
            PaymentImage::newPaymentImage($images, $companyID);
        }
    }

    public function image(){
        return $this->belongsTo(PaymentImage::class);
    }

}
