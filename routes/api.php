<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Inquiry Routes
Route::post('/contactUs', 'Api\ContactController@submitContactForm');
Route::post('/inquiry', 'Api\InquiryController@saveInquiry');

//Checkout
Route::post('/checkout', 'Api\Ecommerce\CheckoutController@checkout');
Route::post('/checkout/submit', 'Api\Ecommerce\CheckoutController@checkout');


/** Restful Model Mapping Controllers **/
//Cart
Route::get('/cart/getProducts', 'Api\Ecommerce\CartController@getProducts');
Route::post('/cart/addProduct', 'Api\Ecommerce\CartController@addProduct');
Route::delete('/cart/removeProduct', 'Api\Ecommerce\CartController@removeProduct');
Route::delete('/cart/emptyCart', 'Api\Ecommerce\CartController@emptyCart');

//Payment types
Route::get('/paymentTypes/getPaymentType/{PaymentType}', 'Api\Ecommerce\PaymentTypesController@getPaymentType');
Route::get('/paymentTypes/getPaymentTypes', 'Api\Ecommerce\PaymentTypesController@getPaymentType');
Route::post('/paymentTypes/addPaymentType', 'Api\Ecommerce\PaymentTypesController@addPaymentType');
Route::post('/paymentTypes/editPaymentType', 'Api\Ecommerce\PaymentTypesController@editPaymentType');
Route::delete('/paymentTypes/removePaymentType', 'Api\Ecommerce\PaymentTypesController@removePaymentType');

//Products
Route::get('/products/getProduct/{Product}', 'Api\Ecommerce\ProductsController@getProduct');
Route::get('/products/getProducts', 'Api\Ecommerce\ProductsController@getProducts');
Route::post('/products/createProduct', 'Api\Ecommerce\ProductsController@createProduct');
Route::post('/products/editProduct/{Product}', 'Api\Ecommerce\ProductsController@editProduct');
Route::delete('/products/removeProduct/{Product}', 'Api\Ecommerce\ProductsController@removeProduct');
Route::post('/products/setPrimaryImage', 'Api\Ecommerce\ProductsController@setPrimaryImage');
Route::post('/products/updateImageOrder', 'Api\Ecommerce\ProductsController@updateImageOrder');

//Product Images
Route::get('/productImages/getImage', 'Api\Ecommerce\ProductImageController@getImage');
Route::post('/productImages/addImage', 'Api\Ecommerce\ProductImageController@addImage');
Route::post('/productImages/editImage', 'Api\Ecommerce\ProductImageController@editImage');
Route::delete('/productImages/removeImage/{ProductImage}', 'Api\Ecommerce\ProductImageController@removeImage');

//Shipping Options
Route::get('/shipping/getOption/{ShippingOption}', 'Api\Ecommerce\ShippingOptionsController@getOption');
Route::get('/shipping/getOptions', 'Api\Ecommerce\ShippingOptionsController@getOptions');
Route::post('/shipping/addOption', 'Api\Ecommerce\ShippingOptionsController@addOption');
Route::post('/shipping/editOption/{ShippingOption}', 'Api\Ecommerce\ShippingOptionsController@editOption');
Route::delete('/shipping/removeOption', 'Api\Ecommerce\ShippingOptionsController@removeOption');
