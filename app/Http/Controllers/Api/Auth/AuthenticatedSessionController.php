<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;

class AuthenticatedSessionController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'register' => 'required|string',
            'password' => 'required|string',
        ]);
    
        // Find the user by register (username)
        $user = User::where('register', $request->register)->first();
    
        // Check if the user exists
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
    
        // Hash the input password with MD5
        $hashedPassword = md5($request->password);
    
        // Check if the hashed password matches the user's password
        if ($hashedPassword === $user->password) {
            // Authentication passed, log in the user
            Auth::login($user);
    
            // Generate token for the authenticated user
            $token = $user->createToken('auth_token')->plainTextToken;
    
            return response()->json([
                'message' => 'Login successful',
                'token' => $token,
                'user' => $user,
            ], 200);
        } else {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    }
        protected function isTokenValid($token, $user)
        {
            // Cek apakah token sudah ada
            $existingToken = PersonalAccessToken::where('tokenable_id', $user->id)
                ->where('tokenable_type', User::class)
                ->where('token', $token) // pastikan token sudah di-hash
                ->first();
        
            // Jika token tidak ada, buat token baru
            if (!$existingToken) {
                return [
                    'valid' => false,
                    'new_token' => $user->createToken('auth_token')->plainTextToken,
                ];
            }
        
            // Jika token ada, kembalikan status valid
            return ['valid' => true];
        }
}
