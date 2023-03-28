<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Services\JodaResources\JodaApiResource;

class ClientController extends Controller
{


    use JodaApiResource;

}
