<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontrooller;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\categorycontrolle;
use App\Http\Controllers\productcontrolle;
use App\Http\Controllers\brand_controller;
use App\Http\Controllers\news_controller;
use App\Http\Controllers\AdvertiseController;
use App\Http\Controllers\BuyNowPayLaterController;
use App\Http\Livewire\ProductRatings;


/* 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    
     Route::get('/forget-password', 'ForgotPasswordController@getEmail');
Route::post('/forget-password', 'ForgotPasswordController@postEmail');
Route::get('/reset-password/{token}', 'ResetPasswordController@getPassword');
Route::post('/reset-password', 'ResetPasswordController@updatePassword');
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/admin', 'HomeController@admin')->name('home.admin');
    Route::get('/home', 'HomeController@index')->name('home.index');
    Route::get('grid-list/', function () {
    return view('grid-list');
});
Route::get('/sortby/{id}/{orderby}/{pagesize}', 'HomeController@sortingsortby');
Route::get('pages/seller', 'HomeController@seller')->name('home.seller');

Route::get('grid-list/{id}', 'HomeController@category')->name('home.category');
Route::get('grid-list/price/{id}/{min}/{max}', 'HomeController@categoryprice');
Route::get('grid-list1/price/{id}/{min}/{max}', 'HomeController@categoryprice1');
Route::post('grid-list', 'HomeController@sorting')->name('home.sorting');
Route::post('grid-list1', 'HomeController@sorting1')->name('home.sorting1');
Route::get('/sortby1/{id}/{orderby}/{pagesize}', 'HomeController@sortingsortby1');
Route::post('grid-list2', 'HomeController@sorting2')->name('home.sorting2');
Route::get('/sortby2/{id}/{orderby}/{pagesize}', 'HomeController@sortingsortby2');

Route::get('grid-list2/{id}', 'HomeController@vendor')->name('home.vendor');
Route::get('grid-list2/price/{id}/{min}/{max}', 'HomeController@categoryprice2');

Route::get('pages/quickfind/{id}', 'HomeController@quickfind')->name('home.quickfind');
Route::get('product/{id}', 'HomeController@product')->name('home.product');
Route::get('/brand', 'HomeController@brand')->name('home.brand');
Route::get('brand/{id}', 'HomeController@brands')->name('home.brands');
// Route::get('grid-list/{id}', [liveController::class, 'home.category']);
Route::get('pages/price', 'HomeController@price')->name('home.price');
Route::get('brands/{id}', 'HomeController@cbrands')->name('home.cbrands');
Route::get('pages/select/{id}', 'HomeController@select')->name('home.select');
Route::post('pages/select', 'PricecheckController@addproduct')->name('home.addproduct');
Route::post('pages/details', 'PricecheckController@update')->name('home.update');
Route::get('pages/details/{id}', 'PricecheckController@details')->name('home.details');

Route::get('admin/pricecheck', 'PricecheckController@show')->name('home.show');
Route::get('/searchdata/{search}', 'HomeController@searchdata')->name('home.searchdata');
Route::get('/sortby', 'HomeController@sortby')->name('home.sortby');
Route::get('/searchdata', 'HomeController@searchdata')->name('home.searchdata');
Route::post('/addtocart', 'cart_controller@addtocart')->name('home.addtocart');
Route::post('/addtocompare', 'CompareController@addtocompare')->name('home.addtocompare');
Route::post('/removecompare/', 'CompareController@removecompare')->name('home.removecompare');
Route::post('/pages/checkout', 'BillingController@create')->name('home.create');
Route::get('/showOrder/{id}', 'BillingController@showOrder')->name('home.showOrder');
Route::get('/admin/billing', 'BillingController@billing')->name('home.billing');
Route::get('/admin/billing/delete/{id}', 'BillingController@destroy')->name('home.destroy');
// pages/checkout
Route::get('/showcompare', 'CompareController@showcompare')->name('home.showcompare');
Route::get('/pages/compare', 'CompareController@index')->name('home.index');

Route::get('/addtocart/{addtocart}', 'cart_controller@addtocarts')->name('home.addtocarts');
Route::get('/showcart/', 'cart_controller@showcart')->name('home.showcart');
Route::get('/pages/cart/', 'cart_controller@index')->name('home.index');

Route::post('/removecart/', 'cart_controller@removecart')->name('home.removecart');
Route::get('/removecart/{id}', 'cart_controller@removecart1')->name('home.removecart1');

Route::post('/updatecart/', 'cart_controller@updatecart')->name('home.updatecart');
Route::post('/pluscart/', 'cart_controller@pluscart')->name('home.pluscart');
Route::post('/minuscart/', 'cart_controller@minuscart')->name('home.minuscart');
Route::post('/update/', 'cart_controller@update')->name('home.update');
// update
Route::post('pages/quotation', 'QuoteController@create')->name('home.create');
Route::get('admin/Quotation', 'QuoteController@index')->name('home.index');
Route::get('admin/Quotation/delete/{id}', 'QuoteController@destroy')->name('home.destroy');
Route::put('/account/', 'usercontrooller@update')->name('home.update');
Route::get('/account/', 'usercontrooller@index')->name('home.index');
Route::get('/pages/addresses/', 'usercontrooller@addresses')->name('home.addresses');
Route::get('/pages/track/{id}', 'OrderController@track')->name('home.track');
Route::get('/pages/complete/', 'OrderController@complete')->name('home.complete');
Route::get('admin/invoice/{id}', 'OrderController@invoice')->name('home.invoice');
Route::post('/', 'EmailController@create')->name('create');
Route::get('/admin/Subscribe', 'EmailController@Subscribe')->name('home.Subscribe');
Route::get('admin/Subscribe/delete/{id}', 'EmailController@destroy')->name('home.destroy');
Route::get('/pages/checkout', 'BillingController@index')->name('home.index');

Route::post('/pages/contact', 'ContactUsController@create')->name('home.create');
Route::get('/admin/contact', 'ContactUsController@contact')->name('home.contact'); 
Route::get('/admin/contact/delete/{id}', 'ContactUsController@destroy')->name('home.destroy'); 



Route::get('/pages/buyNowPayLeter', 'BuyNowPayLaterController@buyNowPayLeter')->name('home.buyNowPayLeter');


Route::get('/pages/advertise', 'AdvertiseController@advertise')->name('home.advertise');
Route::post('/selectedproducrs', 'HomeController@selectedproducrs')->name('home.selectedproducrs');


Route::post('pages/seller', 'BecomeSellerController@create')->name('home.create');
Route::get('admin/seller/ActiveSellers/{id}', 'BecomeSellerController@ActiveSellers')->name('home.ActiveSellers');
Route::post('admin/ActiveSellers/', 'BecomeSellerController@ActiveSellerscreate')->name('home.ActiveSellerscreate');
Route::post('admin/seller', 'BecomeSellerController@createseller')->name('home.createseller');
Route::get('admin/seller', 'BecomeSellerController@show')->name('home.show');
Route::get('admin/seller/delete/{id}', 'BecomeSellerController@destroy')->name('home.destroy');

Route::get('pages/requirement', 'RequirementController@show')->name('home.show');
Route::get('admin/requirement', 'RequirementController@admin')->name('home.admin');
Route::get('admin/requirement/delete/{id}', 'RequirementController@destroy')->name('home.destroy');
Route::post('pages/requirement', 'RequirementController@create')->name('home.create');
Route::post('pages/custom', 'CustomController@create')->name('home.create');
Route::get('pages/custom', 'CustomController@show')->name('home.show');
Route::get('admin/custom', 'CustomController@admin')->name('home.admin');
Route::get('admin/custom/delete/{id}', 'CustomController@destroy')->name('home.destroy');
// footersort
Route::get('/footersort', 'HomeController@footersort')->name('home.footersort');

// // seller routes


Route::get('seller/', 'SellerController@index')->name('home.index');
Route::get('BestSeller/', 'SellerController@BestSeller')->name('home.BestSeller');
Route::get('seller/product', 'SellerController@product')->name('home.product');
Route::get('admin/sellerlist', 'SellerController@sellerlist')->name('home.sellerlist');

Route::get('admin/order', 'OrderController@show')->name('home.show');
Route::get('seller/order', 'OrderController@order')->name('home.order');
Route::post('admin/orderstatus', 'OrderController@orderstatus')->name('home.orderstatus');
// removecompare

Route::get('admin/gallery', 'GalleryController@show')->name('home.show');
Route::get('admin/gallery/delete/{id}', 'GalleryController@destroy')->name('home.destroy');
Route::post('admin/gallery', 'GalleryController@create')->name('home.create');
// Route::get('pages/price', function () {
//     return view('pages/price');
// });
    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        
        
    });
});
// Route::get('/', function () { return view('index'); });

Route::get('/pages/about', function () { return view('/pages/about'); });


Route::get('/pages/blog_details/{id}',[news_controller::class,'blogdetails']);
Route::get('/pages/blog',[news_controller::class,'blog']);

Route::get('/pages/contact', function () {
    return view('/pages/contact');
});

Route::get('/pages/billing', function () {
    return view('/pages/billing');
});


Route::get('/pages/cancellation', function () {
    return view('/pages/concellation');
});







Route::get('/pages/wishlist', function () {
    return view('/pages/wishlist');
});

Route::get('/pages/coming', function () {
    return view('/pages/coming');
});


Route::get('/pages/faq', function () {
    return view('/pages/faq');
});

Route::get('/pages/return', function () {
    return view('/pages/return');
});

Route::get('/pages/shipping', function () {
    return view('/pages/shipping');
});


Route::get('/pages/forget', function () {
    return view('/pages/forget');
});


Route::get('/pages/search', function () {
    return view('/pages/search');
});



Route::get('/pages/payment', function () {
    return view('/pages/payment');
});

Route::get('/pages/privacy', function () {
    return view('/pages/privacy');
});


Route::get('/pages/terms', function () {
    return view('/pages/terms');
});

Route::get('test2', function () {
    return view('test2');
});
Route::get('test3', function () {
    return view('test3');
});
Route::get('admin/simple', function () {
    return view('admin/simple');
});

Route::get('admin/data', function () {
    return view('admin/data');
});
Route::get('admin/jsgrid', function () {
    return view('admin/jsgrid');
});

Route::get('pages/brands', function () {
    return view('pages/brands');
});
Route::get('pages/select', function () {
    return view('pages/select');
});
Route::get('pages/quotation', function () {
    return view('pages/quotation');
});




Route::get('pages/sellernext', function () {
    return view('pages/sellernext');
});








// Route::post('login', [usercontrooller::class, 'login']);
// Route::post('register', [usercontrooller::class, 'register']);

Route::get('admin/category', [categorycontrolle::class, 'category']);
// Route::post('admin/category', function () {return view('admin/category'); });
Route::post('admin/category', [categorycontrolle::class, 'addcategory']);


Route::get('/admin/category-edit/{id}',[categorycontrolle::class,'edit'])->name('edit');
Route::post('/admin/category-edit/{id}',[categorycontrolle::class,'update'])->name('update');

Route::get('/admin/brand-edit/{id}',[brand_controller::class,'edit'])->name('edit');
Route::post('/admin/brand-edit/{id}',[brand_controller::class,'update'])->name('update');


Route::get('admin/product', [productcontrolle::class, 'product']);

Route::get('admin/productrequest', [productcontrolle::class, 'productrequest']);

Route::get('admin/productrequest/approve/{id}', [productcontrolle::class, 'approve']);

Route::post('admin/product', [productcontrolle::class, 'addproduct']);

Route::get('/admin/product-edit/{id}',[productcontrolle::class,'edit'])->name('edit');
Route::post('/admin/product-edit/{id}',[productcontrolle::class,'update'])->name('update');




Route::post('/search', [productcontrolle::class, 'view']);
Route::get('/search/{data}', [productcontrolle::class, 'viewget']);
Route::post('/searchbrand', [productcontrolle::class, 'searchbrand']);




Route::get('admin/product/delete/{id}', [productcontrolle::class, 'destroy']);
Route::get('admin/category/delete/{id}', [categorycontrolle::class, 'destroy']);
Route::get('admin/product/edit/{id}', [productcontrolle::class, 'edit']);
Route::get('admin/category/edit/{id}', [categorycontrolle::class, 'edit']);



// Route::get('brand', function () {
//     return view('brand');
// });
Route::get('admin/brand', [brand_controller::class, 'brand']);
Route::post('admin/brand', [brand_controller::class, 'addbrand']);
Route::get('admin/brand/edit/{id}', [brand_controller::class, 'edit']);
Route::get('admin/brand/delete/{id}', [brand_controller::class, 'destroy']);






 






Route::get('admin/news', [news_controller::class, 'news']);
Route::post('admin/news', [news_controller::class, 'addnews']);
Route::get('admin/news/edit/{id}', [news_controller::class, 'edit']);
Route::get('admin/news/delete/{id}', [news_controller::class, 'destroy']);
Route::get('/admin/news-edit/{id}',[news_controller::class,'edit'])->name('edit');
Route::post('/admin/news-edit/{id}',[news_controller::class,'update'])->name('update');



Route::post('pages/advertise', [AdvertiseController::class, 'create']);
Route::get('admin/advertise', [AdvertiseController::class, 'index']);
Route::get('admin/advertise/delete/{id}', [AdvertiseController::class, 'destroy']);




Route::post('pages/buyNowPayLeter', [BuyNowPayLaterController::class, 'create']);
Route::get('admin/Credit', [BuyNowPayLaterController::class, 'Credit']);
Route::get('admin/Credit/delete/{id}', [BuyNowPayLaterController::class, 'destroy']);

Route::post('/rating/rate', [ProductRatings::class, 'rate']);
// /rating/delete
Route::get('/rating/delete/{id}/{productid}', [ProductRatings::class, 'delete']);
Route::get('/rating/{id}/', [ProductRatings::class, 'show']);
Route::get('livewire/ratingijs', [ProductRatings::class, 'show1']);



