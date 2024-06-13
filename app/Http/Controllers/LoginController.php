<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request) 
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::where('email',$request->email)->first();
        if (empty($user)) {
            return response()->json(['message' => 'User not found'], 404);
        }
        if (Hash::check($request->password, $user->password) == false) {
            return response()->json(['message' => 'Password is incorrect'], 401);
        }
        $token = $user->createToken('login')->plainTextToken;
        return response()->json(['token' => $token], 200);
    }
}
