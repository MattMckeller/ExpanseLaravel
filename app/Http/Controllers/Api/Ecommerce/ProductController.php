<?php

namespace App\Http\Controllers\Api;

use App\Events\NewInquiryEvent;
use App\Models\Customers\Address;
use App\Models\Customers\Customer;
use App\Models\Customers\EmailAddress;
use App\Models\Customers\PhoneNumber;
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
     * Add a new product to the database
     * @param Request $request
     */
    function createNewProduct(Request $request){}

    /**
     * Edit an existing product
     * @param Request $request
     */
    function editProduct(Request $request){}

    /**
     * Soft delete an existing product
     * @param Request $request
     */
    function removeProduct(Request $request){}

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
