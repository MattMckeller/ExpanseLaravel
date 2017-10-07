<?php

namespace App\Http\Controllers\Api;

use App\Events\NewInquiryEvent;

use App\Models\Customers\Address;
use App\Models\Customers\Customer;
use App\Models\Customers\EmailAddress;
use App\Models\Customers\PhoneNumber;
use App\Models\Ecommerce\ShippingOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Api\ApiController;

class ShippingOptionsController extends ApiController
{
    function __construct(){
    }

    private $rules = array(
    );

    /**
     * Retrieve all existing shipping options
     * @param Request $request
     */
    function getShippingOptions(Request $request){}

    /**
     * Retrieve a single shipping option
     * @param ShippingOption $shippingOption
     */
    function getShippingOption(ShippingOption $shippingOption){}

    /**
     * Add a new shipping option
     * @param Request $request
     */
    function addOption(Request $request){}

    /**
     * Remove a shipping option
     * @param Request $request
     */
    function removeOption(Request $request){}

    /**
     * Edit a shipping option
     * @param Request $request
     */
    function editOption(Request $request){}
}
