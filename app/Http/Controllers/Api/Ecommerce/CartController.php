<?php

namespace App\Http\Controllers\Api;

use App\Events\NewInquiryEvent;

use App\Models\Customers\Address;
use App\Models\Customers\Customer;
use App\Models\Customers\EmailAddress;
use App\Models\Customers\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Api\ApiController;

class CartController extends ApiController
{
    function __construct(){
    }

    private $rules = array(
    );



}
