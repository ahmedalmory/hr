<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\JodaResources\JodaApiResource;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use JodaApiResource;

    protected $rules = [
        'role_id' => 'nullable|integer',
    'type' => 'nullable|string|max:50',
    'company_id' => 'nullable|integer',
    'first_name' => 'nullable|string|max:255',
    'last_name' => 'nullable|string|max:255',
    'username' => 'nullable|string|max:255',
    'email' => 'nullable|email|unique:users|max:255',
    'password' => 'required|string|min:8',
    'company_name' => 'nullable|string|max:255',
    'trading_name' => 'nullable|string|max:255',
    'registration_no' => 'nullable|string|max:255',
    'government_tax' => 'nullable|string|max:255',
    'company_type_id' => 'nullable|integer',
    'profile_photo' => 'nullable|string|max:255',
    'contact_number' => 'nullable|string|max:255',
    'gender' => 'nullable|string|max:20',
    'address_1' => 'nullable|string|max:255',
    'address_2' => 'nullable|string|max:255',
    'city' => 'nullable|string|max:255',
    'state' => 'nullable|string|max:255',
    'zipcode' => 'nullable|string|max:255',
    'country_id' => 'nullable|integer',
    'last_login' => 'nullable|date',
    'last_logout' => 'nullable|date',
    'last_login_ip' => 'nullable|string|max:255',
    'is_logged_in' => 'nullable|boolean',
    'is_active' => 'nullable|boolean',
    'permissions' => 'nullable|string'
    ];
}
