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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('clients', 'ClientController');
Route::resource('target-clients', 'TargetClientController');
Route::resource('constants', 'ConstantController');
Route::resource('office-shifts', 'OfficeShiftController');
Route::resource('countries', 'CountryController');
Route::resource('departments', 'DepartmentController');
Route::resource('designations', 'DesignationController');
Route::resource('roles', 'RoleController');
Route::resource('users', 'UserController');
