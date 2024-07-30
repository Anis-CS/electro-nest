<?php

use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\website\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\WebsiteController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SubCategoryController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\ColorController;
use App\Http\Controllers\admin\SizeController;
use App\Http\Controllers\admin\UnitController;
use App\Http\Controllers\admin\ShippingAreaController;
use App\Http\Controllers\admin\CourierController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\OfferController;
use App\Http\Controllers\admin\PrivacyAndPolicyController;
use App\Http\Controllers\website\CategoryByProductController;
use App\Http\Controllers\website\CartController;
use App\Http\Controllers\website\CheckoutController;
use App\Http\Controllers\SslCommerzPaymentController;


Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/website-product', [WebsiteController::class, 'product'])->name('website-product');
Route::get('/product-detail/{id}',[WebsiteController::class, 'productDetails'])->name('product.details');

Route::resources(['carts'=>CartController::class]);
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::get('/cart', [WebsiteController::class, 'cart'])->name('cart');
Route::get('/get-price-by-area',[WebsiteController::class,'getPriceByArea'])->name('get-price-by-area');
Route::post('/new-order',[CheckoutController::class,'newOrder'])->name('new-order');

Route::get('/wishlist', [WebsiteController::class, 'wishlist'])->name('wishlist');
Route::get('/offer-product/{id}', [WebsiteController::class, 'offers'])->name('product-offer');
Route::get('/get-category-by-product/{id}',[CategoryByProductController::class,'index'])->name('product.category');
Route::get('/get-product-by-subcategory/{id}',[CategoryByProductController::class,'subCategoryWiseProduct'])->name('product.subCategory');

// start policy Info
Route::get('/privacy&policy/page-one', [WebsiteController::class, 'policyOne'])->name('policyone');
Route::get('/privacy&policy/page-two', [WebsiteController::class, 'policyTwo'])->name('policytwo');
Route::get('/privacy&policy/page-three', [WebsiteController::class, 'policyThree'])->name('policythree');
Route::get('/privacy&policy/page-four', [WebsiteController::class, 'policyFour'])->name('policyfour');
Route::get('/term-condition', [WebsiteController::class, 'termCondition'])->name('term.condition');


// End policy Info

Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/customer/profile', [WebsiteController::class, 'customerProfile'])->name('customerProfile');



Route::get('/faq',[WebsiteController::class, 'faq'])->name('faq');
Route::get('/aboutUs',[WebsiteController::class, 'aboutUs'])->name('about.us');


// start customer login and Register
Route::get('/customer/register', [CustomerController::class, 'RegistrationForm'])->name('customer.register');
Route::post('/customer/register', [CustomerController::class, 'saveCustomerInfo'])->name('customer.register');
Route::get('/customer/profile/{id}', [CustomerController::class, 'CustomerProfileUpdate'])->name('customer.update');
Route::get('/customer/login', [CustomerController::class, 'loginForm'])->name('customer.login');
Route::post('/customer/login', [CustomerController::class, 'customerLoginCheck'])->name('customer.login');
Route::get('/customer/logout', [CustomerController::class, 'logout'])->name('customer.logout');
// Route::get('/customer/delete',[CustomerController::class,'deleteCustomer'])->name('customer.delete');


// End customer

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    //Setting Module Section
    Route::resources(['category'=>CategoryController::class]);
    Route::resources(['sub-category'=>SubCategoryController::class]);
    Route::resources(['brand'=>BrandController::class]);
    Route::resources(['color'=>ColorController::class]);
    Route::resources(['size'=>SizeController::class]);
    Route::resources(['unit'=>UnitController::class]);
    Route::resources(['shipping-area'=>ShippingAreaController::class]);
    Route::resources(['courier'=>CourierController::class]);
    Route::resources(['offer'=>OfferController::class]);

    //Product Module Section
    Route::resources(['product'=>ProductController::class]);
    Route::get('/get-sub-category-by-category',[ProductController::class,'getSubCategoryByCategory'])->name('get-sub-category-by-category');
    Route::get('/product/status/{id}',[ProductController::class,'productInfo'])->name('product.status');

    //privacy Policy
    Route::resources(['privacy-policy'=>PrivacyAndPolicyController::class]);
    Route::resources(['company'=>CompanyController::class]);


});
