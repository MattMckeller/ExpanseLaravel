<?php

namespace App\Http\Controllers\Api\Ecommerce;

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

class ProductImageController extends ApiController
{
    function __construct(){

    }

    private $rules = array(
    );

    /**
     * Creates a new image and adds it to a product.
     * @param Request $request -- Image upload data, image name, product to associate image with
     */
    function addNewImage(Request $request){}

    /**
     * Removes an image from a product
     * @param Request $request -- ProductImage + Product
     */
    function removeImage(Request $request){}

    /**
     * Edit an image's data
     * @param Request $request
     */
    function editImage(Request $request){}
}
