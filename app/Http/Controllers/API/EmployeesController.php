<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = User::with('role')->where('type','employee')->get();

        return response()->json($employees);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

      /*  $data =   $this->validate($request, [
            'role_id' => 'required|integer',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8',
            'trading_name' => 'required|string|max:255',
            'registration_no' => 'required|string|max:255',
            'profile_photo' => 'nullable|string|max:255',
            'contact_number' => 'required|string|max:255',
            'gender' => 'required|string|max:20',
            'basic_salary' => 'required|string|max:20',
            'salary_hourly' => 'required|string|max:20',
        ]);
        if($data->fails()){
            return response()->json(['error'=>$data->errors()->all()], 400);
        }  */

        $rules = [
            'role_id' => 'required|integer',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8',
            'trading_name' => 'required|string|max:255',
            'registration_no' => 'required|string|max:255',
            'profile_photo' => 'nullable|string|max:255',
            'contact_number' => 'required|string|max:255',
            'gender' => 'required|string|max:20',
            'basic_salary' => 'required|string|max:20',
            'salary_hourly' => 'required|string|max:20',
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()) {
            return response()->json([
              'status' => 'failed',
              'message' => $validator->errors(),
            ], 400);
          }

        $request_data = $request->except(['password', 'photo']);
        $request_data['password'] = bcrypt($request->password);
        $request_data['type'] = "employee";

        $employee = User::create($request_data);

        return response()->json(['success'=>'Employee created']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
