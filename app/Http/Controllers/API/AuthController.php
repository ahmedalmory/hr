<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validate the request data
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);
        // Create the users
        $user =  User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // Generate an API token
        $token = $user->createToken('api_token')->plainTextToken;

        // Return a response with the token
        return response()->json(['token' => $token], 201);
        // return response()->json(['message' => 'User has been registered'], 200);
    }

    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($request->only('email', 'password'))) {
            // Generate an API token
            $token = auth()->user()->createToken('api_token')->plainTextToken;

            // Return a response with the token
            return response()->json(['token' => $token], 200);
        }

        // If authentication fails, return an error response
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    public function logout(Request $request)
    {
        // Revoke the current user's token
        $request->user()->tokens()->delete();
        // Return a response with a success message
        return response()->json(['message' => 'Logged out'], 200);
    }
    
    public function user(Request $request)
    {
        // Return the current user
        return response()->json(['user' => $request->user()], 200);
    }
}
