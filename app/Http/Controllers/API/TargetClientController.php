<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TargetClient;
use Illuminate\Http\Request;
use App\Services\JodaResources\JodaApiResource;

class TargetClientController extends Controller
{

    use JodaApiResource;
    
}
