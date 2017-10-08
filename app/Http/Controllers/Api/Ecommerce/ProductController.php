<?php

namespace App\Http\Controllers\Api;

use App\Events\NewInquiryEvent;
use App\Models\Customers\Address;
use App\Models\Customers\Customer;
use App\Models\Customers\EmailAddress;
use App\Models\Customers\PhoneNumber;
use App\Models\Ecommerce\Product;
use App\Models\Ecommerce\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Api\ApiController;

class ProductController extends ApiController
{
    function __construct(){

    }

    private $rules = array(
    );


    /**
     * Get information about an individual product
     * @param Product $product
     */
    function getProduct(Product $product){}

    /**
     * Get information about many products
     * @param Request $request
     */
    function getProducts(Request $request){}

    /**
     * Add a new product to the database
     * @param Request $request
     */
    function createProduct(Request $request){}

    /**
     * Edit an existing product
     * @param Product $product
     */
    function editProduct(Product $product){}

    /**
     * Soft delete an existing product
     * @param Product $product
     */
    function removeProduct(Product $product){}

    /**
     * Set an existing image as the primary image for a product.
     * @param Request $request
     */
    function setPrimaryImage(Request $request){}

    /**
     * Update the order in which the product images appear for a product.
     * @param Request $request
     */
    function updateImageOrder(Request $request){}

}
