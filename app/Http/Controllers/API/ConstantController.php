<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Constant;
use App\Services\JodaResources\JodaApiResource;
use Illuminate\Http\Request;

class ConstantController extends Controller
{
    use JodaApiResource;
}
