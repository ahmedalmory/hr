<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\JodaResources\JodaApiResource;
use Illuminate\Http\Request;

class TimesheetController extends Controller
{
    use JodaApiResource;
}
