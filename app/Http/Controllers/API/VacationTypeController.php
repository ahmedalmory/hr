<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\JodaResources\JodaApiResource;
use Illuminate\Http\Request;
use App\Models\VacationType;

class VacationTypeController extends Controller
{
    use JodaApiResource;

}
