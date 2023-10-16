<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function registration(){
    return view('backend.auth.registration');
   }

   public function register(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string',
                'phone' => 'required|string',
                'address' => 'required|string',
                'role' => 'required|string',
                'email' => 'required|email|unique:users',
                'password' => 'required|string|min:6',
            ]);

            User::create($validatedData);

            return response()->json(['message' => 'User created successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Registration failed. Please try again.']);
        }
    }
}
