<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', 'AuthController@login')->name('login');
Route::post('/register', 'AuthController@register')->name('register');
Route::post('/logout', 'AuthController@logout')->name('logout')->middleware('auth:sanctum');

// Route::post('login', 'Auth\AuthController@login')->name('login');





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('vacations', 'VacationController');
Route::resource('vacation-type', 'VacationTypeController');

Route::resource('clients', 'ClientController');
Route::resource('target-clients', 'TargetClientController');
Route::resource('constants', 'ConstantController');
Route::resource('office-shifts', 'OfficeShiftController');
Route::resource('countries', 'CountryController');
Route::resource('departments', 'DepartmentController');
Route::resource('designations', 'DesignationController');
Route::resource('roles', 'RoleController');
Route::resource('users', 'UserController');
Route::resource('timesheets', 'TimesheetController');
Route::resource('payslips', 'PayslipController');
