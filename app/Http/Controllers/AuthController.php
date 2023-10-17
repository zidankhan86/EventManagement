<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   public function registration(){
    return view('backend.auth.registration');
   }

   public function register(Request $request)
    {
        try {
             $request->validate([
                'name' => 'required|string',
                'phone' => 'required|string',
                'address' => 'required|string',
                'role' => 'required|string',
                'email' => 'required|email|unique:users',
                'password' => 'required|string|min:6',
            ]);

            User::create([
                "name"=>$request->name,
                "phone"=>$request->phone,
                "address"=>$request->address,
                "role"=>$request->role,
                "email"=>$request->email,
                "password"=>bcrypt($request->password),
            ]);

            return response()->json(['message' => 'User created successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Registration failed. Please try again.']);
        }
    }

    public function login(){
        return view('backend.auth.login');
    }

    
    //Login Process
    public function loginProcess(Request $request){
        $credential = $request->only(['email', 'password']);

        if (Auth::attempt($credential)) {
            if (auth()->user()->role == 'attendee') {
                return redirect()->route('website');
            } elseif (auth()->user()->role == 'organizer') {
                return redirect()->route('dashboard');
            }
        } else {
            return redirect()->back()->withErrors(['error' => 'Invalid credentials. Please try again.']);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('website');
    }



}
