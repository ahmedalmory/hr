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

Route::apiResource('settings', 'SettingsController');

Route::apiResource('vacations', 'VacationController');
Route::apiResource('vacation-type', 'VacationTypeController');

Route::apiResource('clients', 'ClientController');
Route::apiResource('target-clients', 'TargetClientController');
Route::apiResource('constants', 'ConstantController');
Route::apiResource('office-shifts', 'OfficeShiftController');
Route::apiResource('countries', 'CountryController');
Route::apiResource('departments', 'DepartmentController');
Route::apiResource('designations', 'DesignationController');
Route::apiResource('roles', 'RoleController');
Route::apiResource('users', 'UserController');
Route::apiResource('timesheets', 'TimesheetController');
Route::apiResource('payslips', 'PayslipController');
