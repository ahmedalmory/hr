<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends JodaApiController
{
    protected $rules = [
        'role_id' => 'nullable|integer',
        'type' => 'nullable|string|max:50',
        'company_id' => 'nullable|integer',
        'first_name' => 'nullable|string|max:255',
        'last_name' => 'nullable|string|max:255',
        'username' => 'required|unique:users|string|max:255',
        'email' => 'required|email|unique:users|max:255',
        'email_verified_at' => 'nullable|date',
        'password' => 'required|string|max:255',
        'company_name' => 'nullable|string|max:255',
        'trading_name' => 'nullable|string|max:255',
        'registration_no' => 'nullable|string|max:255',
        'government_tax' => 'nullable|string|max:255',
        'company_type_id' => 'nullable|integer',
        'profile_photo' => 'nullable|string|max:255',
        'contact_number' => 'nullable|string|max:255',
        'gender' => 'nullable|string|max:20',
        'address_1' => 'nullable|string',
        'address_2' => 'nullable|string',
        'city' => 'nullable|string|max:255',
        'state' => 'nullable|string|max:255',
        'zipcode' => 'nullable|string|max:255',
        'country_id' => 'nullable|integer',
        'last_login' => 'nullable|date',
        'last_logout' => 'nullable|date',
        'last_login_ip' => 'nullable|string|max:255',
        'is_logged_in' => 'nullable|boolean',
        'is_active' => 'nullable|boolean',
        'permissions' => 'nullable|string',
        'employee_id' => 'nullable|integer',
        'department_id' => 'nullable|integer',
        'designation_id' => 'nullable|integer',
        'office_shift_id' => 'nullable|integer',
        'basic_salary' => 'nullable|numeric',
        'hourly_rate' => 'nullable|numeric',
        'salary_type' => 'nullable|integer',
        'role_description' => 'nullable|string',
        'date_of_joining' => 'nullable|string|max:255',
        'date_of_leaving' => 'nullable|string|max:255',
        'date_of_birth' => 'nullable|string|max:255',
        'marital_status' => 'nullable|integer',
        'religion_id' => 'nullable|integer',
        'blood_group' => 'nullable|string|max:255',
        'citizenship_id' => 'nullable|integer',
        'bio' => 'nullable|string',
        'experience' => 'nullable|integer',
        'fb_profile' => 'nullable|string',
        'twitter_profile' => 'nullable|string',
        'gplus_profile' => 'nullable|string',
        'linkedin_profile' => 'nullable|string',
        'account_title' => 'nullable|string|max:255',
        'account_number' => 'nullable|string|max:255',
        'bank_name' => 'nullable|string|max:255',
        'iban' => 'nullable|string|max:255',
        'swift_code' => 'nullable|string|max:255',
        'bank_branch' => 'nullable|string',
        'contact_full_name' => 'nullable|string|max:255',
        'contact_phone_no' => 'nullable|string|max:255',
        'contact_email' => 'nullable|string|max:255',
        'contact_address' => 'nullable|string'
    ];

    public function beforeUpdate($model){
        $this->rules['email'] = 'nullable|email|unique:users,email,'.$model->id.',id';
        $this->rules['username'] = 'nullable|unique:users,username,'.$model->id.',id';
        $this->rules['password'] = 'nullable|string|max:255';
    }
}
